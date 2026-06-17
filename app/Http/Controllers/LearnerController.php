<?php

namespace App\Http\Controllers;

use App\Models\Learner;
use Illuminate\Http\Request;


class LearnerController extends Controller
{
    //
    public function index()
    {
        $learner = Learner::all();
        return $learner;
    }
    public function showIndividual(int $id)
    {
        $learner = Learner::select(['name', 'age', 'score'])
            ->find($id);
        return $learner;
    }
    public function update()
    {
        $learner = Learner::where('id', 1)->update([
            'name' => 'Tonmoy',
            'email' => 'tonmoy.a009@gmail.com',
            'age' => 25,
            'score' => 97,
        ]);

        return $learner;
    }

    public function add()
    {
        $learner = new Learner();
        $learner->name = 'Rakib';
        $learner->email = 'rakib.a009@gmail.com';
        $learner->age = 25;
        $learner->score = 97;
        $learner->save();
        return 'data added';
    }
    public function bright()
    {
        $learner = Learner::where('score', '>', 90)
            ->where(function ($query) {
                $query->where('age', '>', 20)
                    ->where('age', '<', 50);
            })->get();
        return $learner;
    }

    public function male()
    {
        $learner = Learner::male()->get();
        return $learner;
    }

    public function female()
    {
        $learner = Learner::female()->get();
        return $learner;
    }

    public function delete($id)
    {
        $learner = Learner::findOrFail($id)
            ->delete();

        return 'data delted';
    }

    //restore data
    public function restore()
    {
        $learner = Learner::withTrashed()->restore();
        return 'data restored';
    }
}
