<?php

namespace App\Services;

use App\Repositories\Timetables as TimetablesRepository;
use Illuminate\Pagination\Paginator;

/**
 * Class Timetable
 * @package App\Services
 */
class Timetable
{
    /**
     * @var TimetablesRepository
     */
    protected $repository;

    /**
     * Timetable constructor.
     *
     * @param TimetablesRepository $repository
     */
    public function __construct(TimetablesRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param array $filters
     * @return Paginator
     */
    public function getByFilter(array $filters): Paginator
    {
        return $this->repository->filter($filters);
    }

    /**
     * @return array
     */
    public function options(): array
    {
        return [
            'teachers' => \App\Models\Teacher::all(['id', 'full_name']),
            'groups' => \App\Models\Group::all(['id', 'name']),
            'subjects' => \App\Models\Subject::all(['id', 'name']),
            'rooms' => \App\Models\Room::all(['id', 'number']),
        ];
    }
}