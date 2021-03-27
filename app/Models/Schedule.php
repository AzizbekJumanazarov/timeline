<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    /**
    	* @property string 
    */
    
    public $table = 'schedules';

    public $fillable = [
    	'season_id',
    	'room_id',
    	'teacher_id',
    	'group_id',
    	'subject_id',
    	'day',
    	'begin_time',
    	'end_time'
    ];
}
