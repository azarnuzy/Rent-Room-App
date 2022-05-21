<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        return view('rooms', [
            'title' => "Rooms List",
        ]);
    }

    public function add()
    {
    }
}
