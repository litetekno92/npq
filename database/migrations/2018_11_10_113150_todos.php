<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Todos.
 *
 * @author  The scaffold-interface created at 2018-11-10 11:31:50am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Todos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('todos',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('title');
        
        /**
         * Foreignkeys section
         */
        
        
        $table->timestamps();
        
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('todos');
    }
}
