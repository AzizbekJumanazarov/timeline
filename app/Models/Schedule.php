<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class Schedule
 * @package App\Models
 *
 * @property integer $season_id
 * @property integer $room_id
 * @property integer $teacher_id
 * @property integer $subject_id
 * @property integer $group_id
 * @property integer $day
 * @property string $begin_time
 * @property string $end_time
 */
class Schedule extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    public $table = 'schedules';

    /**
     * @var array
     */
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

    /**
     * @var array
     */
    public $casts = [
        'season_id' => 'integer',
        'room_id' => 'integer',
        'teacher_id' => 'integer',
        'group_id' => 'integer',
        'subject_id' => 'integer',
        'day' => 'integer',
        'begin_time' => 'timestamp:H:i:s',
        'end_time' => 'timestamp:H:i:s'
    ];

    /**
     * @return BelongsTo
     */
    public function season(): BelongsTo
    {
        return $this->belongsTo(Season::class);
    }

    /**
     * @return BelongsTo
     */
    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

    /**
     * @return BelongsTo
     */
    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }

    /**
     * @return BelongsTo
     */
    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }

    /**
     * @return BelongsTo
     */
    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    /**
     * @param Builder $query
     * @param array $filters
     * @return Builder
     */
    public function scopeFilter(Builder $query, array $filters): Builder
    {
        return $query->when($filters['search'] ?? null, function(Builder $query, string $search) {
           return $query->whereHas('teacher', function(Builder $query) use ($search){
                return $query->where('full_name', 'like', '%'.$search.'%');
           })->orWhereHas('subject', function(Builder $query) use ($search) {
               return $query->where('name', 'like', '%'.$search.'%');
           })->orWhereHas('room', function(Builder $query) use ($search) {
               return $query->where('number', 'like', '%'.$search.'%');
           })->orWhereHas('group', function(Builder $query) use ($search) {
               return $query->where('name', 'like', '%'.$search.'%');
           });
        })->when($filters['begin_time'] ?? null, function(Builder $query, string $begin_time) {
            return $query->where('begin_time', 'like', $begin_time.'%');
        })->when($filters['teacher_id'] ?? null, function(Builder $query, int $teacher_id) {
            return $query->where('teacher_id', '=', $teacher_id);
        })->when($filters['subject_id'] ?? null, function(Builder $query, int $subject_id) {
            return $query->where('subject_id', '=', $subject_id);
        })->when($filters['group_id'] ?? null, function(Builder $query, int $group_id) {
            return $query->where('group_id', '=', $group_id);
        })->when($filters['room_id'] ?? null, function(Builder $query, int $room_id) {
            return $query->where('room_id', '=', $room_id);
        });
    }
}
