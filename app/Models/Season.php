<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;
    /**
    	* @property string 
    */
    
    public $table = 'seasons';

    public $fillable = [
    	'name',
    	'begin_date',
    	'end_date'
    ];
}
