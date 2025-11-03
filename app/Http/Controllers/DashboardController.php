<?php

namespace App\Http\Controllers;

use App\Models\Certificate;

class DashboardController extends Controller
{
    public function index()
    {
        $cert = Certificate::first();
        return view('dashboard', compact('cert'));
    }
}
