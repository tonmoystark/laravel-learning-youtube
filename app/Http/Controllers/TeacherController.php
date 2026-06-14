<?php

namespace App\Http\Controllers;

use App\Models\teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //
    public function index()
    {
        return teacher::all();
    }
    public function add()
    {
        $item = new teacher();
        $item->name = 'Tonmoy';
        $item->email = 'tonmoy.a009@gmail.com';
        $item->age = 25;
        $item->save();

        return 'added successfully';
    }

    public function show(int $id)
    {
        $item = teacher::findOrFail($id);

        return $item;
    }
    public function update(int $id)
    {
        $item = teacher::findOrFail($id);
        $item->name = 'Tonu';
        $item->update();

        return 'name updated';
    }
    public function delete(int $id)
    {
        $item = teacher::findOrFail($id);
        $item->delete();

        return 'deleted successfully';
    }
}
