<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPeter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_peter_rsvp', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('ikatan');
            $table->string('email');
            $table->longText('pesan');
            $table->string('status');
            $table->integer('jmlh_orang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_peter_rsvp');
    }
}
