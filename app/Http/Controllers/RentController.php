<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rent;

class RentController extends Controller
{
    public function index()
    {
        return view('dashboard.rents.index', [
            'title' => "Peminjaman",
            'rents' => Rent::latest()->paginate(10)->withQueryString(),
        ]);
    }
}
