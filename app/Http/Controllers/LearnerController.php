<?php

namespace App\Http\Controllers;

use App\Models\Learner;
use Illuminate\Http\Request;


class LearnerController extends Controller
{

    //
    public function index(Request $request)
    {
        $learners = Learner::when($request->search, function ($query) use ($request) {
            return $query->whereAny([
                'name',
                'email',
                'age',
                'score',
                'gender'
            ], 'like', '%' . $request->search . '%');
        })->get();

        return view('learners.allLearners', compact('learners'));
    }

    //add new learner in database
    public function add(Request $request)
    {
        $learner = new Learner();
        $learner->name = $request->name;
        $learner->email = $request->email;
        $learner->age = $request->age;
        $learner->score = $request->score;
        $learner->gender = $request->gender;
        $learner->save();
        return redirect('/learner');
    }

    public function update(Request $request, int $id)
    {
        $learner = Learner::findOrFail($id);
        $learner->name = $request->name;
        $learner->email = $request->email;
        $learner->age = $request->age;
        $learner->score = $request->score;
        $learner->gender = $request->gender;
        $learner->update();
        return redirect('/learner');
    }

    public function edit(int $id)
    {
        $learner = Learner::findOrFail($id);
        return view('learners.edit', compact('learner'));
    }

    public function delete(int $id)
    {
        $learner = Learner::findOrFail($id);
        $learner->delete();
        return redirect('/learner');
    }

    public function trashData()
    {
        $learners = Learner::onlyTrashed()->get();
        return view('learners.trash', compact('learners'));
    }
    public function retrieveData(int $id)
    {
        $learner = Learner::onlyTrashed()->findOrFail($id);
        $learner->restore();

        return redirect('/learner');
    }
    public function permanentDelete(int $id)
    {
        $learner = Learner::onlyTrashed()->findOrFail($id);
        $learner->forceDelete();

        return redirect('/learner/suspended');
    }
}
