<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TrInvoice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tr_invoices', function(Blueprint $column){
            $column->bigIncrements('invoice_id');
            $column->string('invoice_number', 100)->nullable();
            $column->integer('invoice_status');
            $column->integer('invoice_type');
            $column->date('invoice_date')->nullable();
            $column->string('invoice_file')->nullable();
            $column->integer('invoice_author')->nullable();
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
