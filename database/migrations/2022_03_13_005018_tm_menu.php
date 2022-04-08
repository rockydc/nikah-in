<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TmMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tm_menu', function(Blueprint $column){
            $column->id();
            $column->string('slug','255')->nullable();
            $column->integer('parent_id')->nullable();
            $column->string('menu_name', '200');
            $column->string('icon','200')->nullable();
            $column->integer('status')->nullable();
            $column->integer('urutan')->nullable();
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
