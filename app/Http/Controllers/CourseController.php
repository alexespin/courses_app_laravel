<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::orderBy('start_time', 'asc')->get();
        return view('courses.index', compact('courses'));
    }
}
