<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class learnController extends Controller
{
    //
    public function index(int $id, string $name)
    {
        // return view('learnControl', compact('name', 'id'));
        return view('learnControl', ['id' => $id, 'name' => $name]);
    }
}
