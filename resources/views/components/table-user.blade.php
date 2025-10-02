<table class="table table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Kelas</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $u)
        <tr>
            <td>{{ $u->id }}</td>
            <td>{{ $u->nama }}</td>
            <td>{{ $u->nim }}</td>
            <td>{{ $u->nama_kelas }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
