<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title' => "Ruangan",
            'rooms' => Room::all(),
        ]);
    }
}