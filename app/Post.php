<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

/**
 * Class Post.
 *
 * @author  The scaffold-interface created at 2018-11-10 12:13:30pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Post extends Model
{
	
	
    use Sluggable;
    protected $table = 'posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'body',
    ];

	/**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

	/**
     * category.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    /**
     * Assign a category.
     *
     * @param  $category
     * @return  mixed
     */
    public function assignCategory($category)
    {
        return $this->categories()->attach($category);
    }
    /**
     * Remove a category.
     *
     * @param  $category
     * @return  mixed
     */
    public function removeCategory($category)
    {
        return $this->categories()->detach($category);
    }

}
