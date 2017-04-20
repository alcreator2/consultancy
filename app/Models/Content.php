<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Content extends Model
{
    use Sluggable;

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
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'which_page',
        'position',
        'excerpt',
        'cover_image',
        'thumbnail_image',
        'status',
        'meta_description',
        'meta_keywords',
    ];
}
