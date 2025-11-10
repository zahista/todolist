<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Restaurant;

class DashboardController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('dashboard', ['restaurants' => $restaurants]);
    }

    public function show(Restaurant $restaurant)
    {
        return view('show', ['restaurant' => $restaurant]);
    }
}
