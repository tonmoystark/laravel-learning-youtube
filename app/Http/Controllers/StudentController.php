<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index()
    {
        $students = Student::all();

        return view('students.index', compact('students'));
    }
    public function viewDetails(int $id)
    {
        $student = Student::with('profile')->findOrFail($id);

        return view('students.details', compact('student'));
    }
}
