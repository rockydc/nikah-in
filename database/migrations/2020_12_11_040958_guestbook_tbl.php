<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GuestbookTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('guestbook_tbl', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('no_telepon');
            $table->string('alamat');
            $table->string('kerabat');
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
           Schema::dropIfExists('guestbook_tbl');
    }
}
