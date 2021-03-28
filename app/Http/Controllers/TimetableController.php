<?php

namespace App\Http\Controllers;

use App\Http\Requests\Timetable as TimetableRequest;
use App\Services\Timetable as TimetableService;

/**
 * Class TimetableController
 * @package App\Http\Controllers
 */
class TimetableController extends Controller
{
    /**
     * @var TimetableService
     */
    protected $service;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(TimetableService $service)
    {
        $this->middleware('auth');
        $this->service = $service;
    }

    /**
     * Show the application dashboard.
     *
     * @param TimetableRequest $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(TimetableRequest $request)
    {
        return view('timetables.index', [
            'list' => $this->service->getByFilter($request->validated()),
            'options' => $this->service->options(),
        ]);
    }
}
