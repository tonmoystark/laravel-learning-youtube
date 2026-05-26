<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function index()
    {
        $messages = Message::with('user')
            ->latest()
            ->take(10)
            ->get();

        return view('chirper', ['messages' => $messages]);
    }
}
