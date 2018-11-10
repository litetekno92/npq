<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Posts.
 *
 * @author  The scaffold-interface created at 2018-11-10 12:13:30pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('posts',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('title');
        
        $table->String('slug');
        
        $table->longText('body');
        
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
        Schema::drop('posts');
    }
}
