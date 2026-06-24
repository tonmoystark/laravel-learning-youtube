<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.teachers', compact('teachers'));
    }

    public function courses()
    {
        $courses = Course::with('teacher')->get();
        return view('teachers.courses', compact('courses'));
    }

    public function viewDetails(int $id)
    {
        $teacher = Teacher::with('profile', 'courses')->find($id);

        return view('teachers.details', compact('teacher'));
    }
}
