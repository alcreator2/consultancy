<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
	* @var array
	*/
    protected $fillable = [
        'name',
        'logo',
        'status'
    ];
}
