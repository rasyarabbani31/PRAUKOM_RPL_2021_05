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
         DB::unprepared("DROP TRIGGER IF EXISTS delete_histori");
         DB::unprepared("
             CREATE TRIGGER hapus_siswa
             AFTER DELETE 
             ON siswa
             FOR EACH ROW
             BEGIN

             DECLARE adder VARCHAR(30);
             DECLARE kode CHAR(7);

             SELECT newIdHistori() INTO kode;
             SELECT siswa.nama_siswa INTO adder FROM siswa WHERE siswa.id = old.id;

            INSERT INTO histori (id_histori,nama_siswa,aktivitas,tgl) VALUES (
                kode,old.nama_siswa,'hapus siswa',NOW()
            );
             
             END;  

        ");
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
