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
        Schema::create('presensi_siswa', function (Blueprint $table) {
            $table->id(); //ai+pk
            $table->date('tanggal');
            $table->unsignedBigInteger('kode_siswa'); //fk
            $table->unsignedBigInteger('kode_kelas'); //foreign key
            $table->unsignedBigInteger('kode_jurusan'); //fk
            $table->unsignedBigInteger('kode_keterangan'); //fk
            $table->timestamps();

            //fk dari siswa
            $table
            ->foreign('kode_siswa')
            ->references('id')
            ->on('siswa')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();

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

            //fk dari keterangan
            $table
            ->foreign('kode_keterangan')
            ->references('id')
            ->on('keterangan_izin')
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
        Schema::dropIfExists('presensi_siswa');
    }
};
