<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rent;

class TemporaryRentController extends Controller
{
    public function index()
    {
        return view('dashboard.temporaryRents.index', [
            'title' => "Peminjaman Sementara",
            'rents' => Rent::latest()->paginate(10)->withQueryString(),
        ]);
    }
}