<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
     /**
	* @var array
	*/
    protected $fillable = [
        'name',
        'path',
        'title',
        'excerpt',
        'link',
        'link_name',
        'which_page',
        'which_theme',
        'status',
        'position',
    ];
}
