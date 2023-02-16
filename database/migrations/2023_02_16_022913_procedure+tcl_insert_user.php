<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS tambah_user");
        DB::unprepared(
          "CREATE PROCEDURE tambah_user( 
                username VARCHAR(255),
                password VARCHAR(255),
                kode_level bigint(20)
            )
            BEGIN 
            -- TCL
            DECLARE kodeError CHAR(5) DEFAULT '00000';
            DECLARE CONTINUE HANDLER FOR SQLEXCEPTION
            BEGIN
                GET DIAGNOSTICS CONDITION 1
                kodeError = RETURNED_SQLSTATE;
            END;

            START TRANSACTION;
            SAVEPOINT initial;

            INSERT INTO user (username, password, kode_level) VALUES (username, password, kode_level);

            IF kodeError != '00000' THEN
                ROLLBACK TO initial;
            END IF;
            
            COMMIT;
          END;"
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('procedure_insert_user');
    }
};
