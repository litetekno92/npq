<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Categories.
 *
 * @author  The scaffold-interface created at 2018-11-10 12:12:11pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Categories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('categories',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('name');
        
        $table->String('slug');
        
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
        Schema::drop('categories');
    }
}
