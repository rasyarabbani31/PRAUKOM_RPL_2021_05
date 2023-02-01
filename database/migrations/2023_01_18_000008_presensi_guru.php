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
        Schema::create('presensi_guru', function (Blueprint $table) {
            $table->id(); //ai+pk
            $table->date('tanggal');
            $table->unsignedBigInteger('kode_guru'); //fk
            $table->unsignedBigInteger('kode_keterangan'); //fk
            $table->string('agenda_kbm', 255);
            $table->string('gambar');
            $table->timestamps();

            //fk dari guru
            $table
            ->foreign('kode_guru')
            ->references('id')
            ->on('guru')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();

            //fk dari keterangan izin
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
        Schema::dropIfExists('presensi_guru');
    }
};
