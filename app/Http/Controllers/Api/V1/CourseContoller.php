<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\CourseCollection;
use App\Http\Resources\Api\V1\CourseResource;
use App\Models\course;
use App\Services\Api\V1\CourseService;
use Illuminate\Http\Request;

class CourseContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $course;
    public function __construct(CourseService $courseService)
    {
        $this->middleware('permission:show courses')->only(['index']);
        $this->course = $courseService;
    }

    public function index()
    {
        return response()->json($this->course->getAllCourse());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(course $course)
    {
        return response()->json(new CourseResource($course));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, course $course)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(course $course)
    {
        //
    }
}
