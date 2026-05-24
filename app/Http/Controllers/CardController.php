<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = [
            [
                "id" => 1,
                "name" => "Tonmoy",
                "email" => "tonmoy@example.com",
                "role" => "Frontend Developer",
            ],

            [
                "id" => 2,
                "name" => "Rahim",
                "email" => "rahim@example.com",
                "role" => "Backend Developer",
            ],

            [
                "id" => 3,
                "name" => "Karim",
                "email" => "karim@example.com",
                "role" => "UI Designer",
            ],
        ];


        return view('home', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
