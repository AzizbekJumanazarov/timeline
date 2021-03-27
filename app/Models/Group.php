<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    /**
    * @property string 
    */
    public $table = 'groups';

    public $fillable = [
    	'name'
    ];

}
