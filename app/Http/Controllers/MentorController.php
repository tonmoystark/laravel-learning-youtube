<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    //
    public function index()
    {

        $mentors = Mentor::with('courses')->get();

        return view('mentors.mentors', compact('mentors'));
    }
    public function viewCourse(int $id)
    {
        $mentor = Mentor::with('courses')->find($id);
        return view('mentors.courses', compact('mentor'));
    }
}
