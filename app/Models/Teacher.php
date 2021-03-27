<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    /**
    * @property string 
    */
    public $table = 'teachers';

    public $fillable = [
    	'full_name',
    	'phone',
    	'email',
    	'major',
    	'birth_day'
    ];
}
