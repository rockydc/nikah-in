<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TmCostumer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tm_costumers', function(Blueprint $column){
            $column->bigIncrements('costumer_id');
            $column->string('name', 255);
            $column->string('costumer_ticket', 100)->nullable();
            $column->integer('payment_status')->nullable();
            $column->integer('payment_amount')->nullable();
            $column->date('payment_date')->nullable();
            $column->integer('chosen_template');
            $column->string('customer_email',100)->nullable();
            $column->string('costumer_number',20)->nullable();
            $column->integer('costumer_type')->nullable();
            $column->timestamps();
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
