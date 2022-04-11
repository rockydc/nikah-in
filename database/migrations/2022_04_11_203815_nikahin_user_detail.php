<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NikahinUserDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('nikahin_user_details', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('user_name');
            $table->string('user_bod');
            $table->timestamps();
        });
        Schema::table('users', function(Blueprint $table){
            $table->integer('user_status');
            $table->integer('user_type');
        });
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
}
