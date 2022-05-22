<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        return view('dashboard.admin.index', [
            'title' => 'Admin',
            'admins' => Admin::all()
        ]);
    }
}