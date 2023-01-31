<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            $table->enum('jk_siswa', ["Laki-Laki", "Perempuan"]);
            $table->char('nisn');
            $table->unsignedBigInteger('kode_kelas'); //foreign key
            $table->unsignedBigInteger('kode_jurusan'); //fk

            $table->timestamps();

            //fk dari jurusan
            $table
            ->foreign('kode_jurusan')
            ->references('id')
            ->on('jurusan')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();

            //fk dari kelas
            $table
            ->foreign('kode_kelas')
            ->references('id')
            ->on('kelas')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
};
