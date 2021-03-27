<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    /**
    	* @property string 
    */
    
    public $table = 'subjects';

    public $fillable = [
    	'name',
    ];
}
