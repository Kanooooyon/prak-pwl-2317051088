<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct(){
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index(){
        $data = [
            'title' => 'List User',
            'user' => $this->userModel->getUser()
        ];
        return view('list_user', $data);
    }

    public function create(){
        $kelasModel = new Kelas();
        $Kelas = $kelasModel->getKelas();
        $data = [
            'title' => 'Create User',
            'kelas' => $Kelas
        ];
        return view('create_user', $data);
    }

    public function store(Request $request){
        $this->userModel->create([
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'kelas_id' => $request->input('kelas_id')
        ]);

        return redirect()->to('/user');
    }

    public function edit($id){
        $user = $this->userModel->find($id);
        $kelas = $this->kelasModel->getKelas();
        $data = [
            'title' => 'Edit User',
            'user' => $user,
            'kelas' => $kelas
        ];
        return view('edit_user', $data);
    }

    public function update(Request $request, $id){
        $this->userModel->where('id', $id)->update([
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'kelas_id' => $request->input('kelas_id')
        ]);
        return redirect()->to('/user')->with('success', 'Data user berhasil diperbarui!');
    }
    
    public function destroy($id){
        $this->userModel->where('id', $id)->delete();
        return redirect()->to('/user')->with('success', 'Data user berhasil dihapus!');
    }
    
}
