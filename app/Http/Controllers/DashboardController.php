<?php

namespace App\Http\Controllers;

use App\Models\Certificate;

class DashboardController extends Controller
{
    public function index()
    {
        $cert = Certificate::first();
        $array = [
            "Tomáš",
            "Martin",
            "Evženie"
        ];


    

        return view('dashboard',["cert" => $cert, "array" => $array]);
    }
}
