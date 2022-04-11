<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TmTemplates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('tr_invoices', function(Blueprint $blueprint){
            $blueprint->integer('ref')->nullable();
        });
        Schema::create('tm_templates', function(Blueprint $column){
            $column->bigIncrements('t_id');
            $column->string('template_extends')->nullable();
            $column->integer('template_parent')->nullable();
            $column->string('template_path')->nullable();
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
