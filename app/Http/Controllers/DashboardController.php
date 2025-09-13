<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::with('contributors')->get();
        return view('pages.backend.dashboard', compact('users'));
    }
}
