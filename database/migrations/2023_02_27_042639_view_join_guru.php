<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
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
        DB::unprepared(
            "CREATE OR REPLACE VIEW nama_presensi_guru AS (
                SELECT
                guru.nama_guru, keterangan_izin.keterangan , presensi_guru.id, presensi_guru.tanggal, presensi_guru.kode_guru, presensi_guru.kode_keterangan, presensi_guru.agenda_kbm, presensi_guru.gambar
                FROM presensi_guru
                join guru
                ON presensi_guru.kode_guru=guru.id
                join keterangan_izin
                ON presensi_guru.kode_keterangan=keterangan_izin.id
            )"
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
