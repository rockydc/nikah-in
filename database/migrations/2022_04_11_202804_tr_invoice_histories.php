<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TrInvoiceHistories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tr_invoice_history', function(Blueprint $column){
            $column->bigIncrements('ih_id');
            $column->date('history_date');
            $column->integer('invoice_id');
            $column->integer('user_id');
            $column->integer('action_id')->nullable();
            $column->string('action', 200)->nullable();
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
