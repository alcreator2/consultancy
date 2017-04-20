<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
	/**
	* @var array
	*/
    protected $fillable = [
        'full_name',
        'message',
        'status'
    ];
}
