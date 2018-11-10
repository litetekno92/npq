<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Todo.
 *
 * @author  The scaffold-interface created at 2018-11-10 11:31:50am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Todo extends Model
{
	
	
    protected $table = 'todos';
    protected $fillable = [
        'title', 
    ];


	
}
