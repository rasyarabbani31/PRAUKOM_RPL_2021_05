<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.a
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id(); //autoincrement+auto primary key
            $table->string('username', 50);
            $table->string('password', 50);
            $table->unsignedBigInteger('kode_level'); //foreign key 
            $table->rememberToken();
            $table->timestamps();

            //fk dari level_user
            $table
            ->foreign('kode_level')
            ->references('id')
            ->on('level_user')
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
        Schema::dropIfExists('user');
    }
};
