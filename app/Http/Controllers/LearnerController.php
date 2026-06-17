<?php

namespace App\Http\Controllers;

use App\Models\Learner;
use Illuminate\Http\Request;


class LearnerController extends Controller
{
    //
    public function index()
    {
        $learners = Learner::all();
        return view('learners.allLearners', compact('learners'));
    }
}
