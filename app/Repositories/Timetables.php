<?php

namespace App\Repositories;

use App\Models\Schedule;
use Illuminate\Pagination\Paginator;

/**
 * Class Teachers
 *
 * @package App\Repositories
 */
class Timetables
{
    /**
     * @param array $filters
     * @return Paginator
     */
    public function filter(array $filters): Paginator
    {
        return Schedule::filter($filters)->simplePaginate();
    }
}