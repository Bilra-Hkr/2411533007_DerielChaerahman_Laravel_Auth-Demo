<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all(); // Mengambil seluruh data user
        return view('admin', compact('users')); // Melempar data ke view 'admin'
    }
}
