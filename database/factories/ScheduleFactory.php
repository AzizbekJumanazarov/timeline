<?php

namespace Database\Factories;

use App\Models\Schedule;
use App\Models\Season;
use App\Models\Room;
use App\Models\Teacher;
use App\Models\Group;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScheduleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Schedule::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'season_id' => Season::all(['id'])->random(),
            'room_id'=> Room::all(['id'])->random(),
            'teacher_id'=> Teacher::all(['id'])->random(),
            'group_id'=> Group::all(['id'])->random(),
            'subject_id'=> Subject::all(['id'])->random(),
            'day'=> $this->faker->numberBetween(1, 6),
            'begin_time'=> $this->faker->time,
            'end_time'=> $this->faker->time
        ];
    }
}
