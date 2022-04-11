<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NikahinCustDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('nikahin_cust_details', function(Blueprint $column){
            $column->bigIncrements('cd_id');
            $column->timestamps();
            $column->integer('cust_id')->nullable();
            $column->longtext('nikahin_detail')->nullable();
            $column->date('wedding_date');
            $column->integer('chosen_template')->nullable();
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
