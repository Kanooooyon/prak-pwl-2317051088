<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mata_kuliah', function (Blueprint $table) {
            $table->id();               // kolom id
            $table->string('nama_mk');  // kolom nama mata kuliah
            $table->integer('sks');     // kolom sks
            $table->timestamps();       // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mata_kuliah');
    }
};
