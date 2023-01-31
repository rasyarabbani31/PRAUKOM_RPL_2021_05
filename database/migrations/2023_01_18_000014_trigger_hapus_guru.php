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
            CREATE TRIGGER hapus_guru
            AFTER DELETE 
            ON guru
            FOR EACH ROW
            BEGIN

            DECLARE adder VARCHAR(30);
            DECLARE kode CHAR(7);

            SELECT newIdHistori() INTO kode;
            SELECT guru.nama_guru INTO adder FROM guru WHERE guru.id = old.id;

           INSERT INTO histori (id_histori,nama_guru,aktivitas,tgl) VALUES (
               kode,old.nama_guru,'hapus guru',NOW()
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
