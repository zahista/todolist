<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('dashboard', ['restaurants' => $restaurants]);
    }

    public function show(Restaurant $restaurant)
    {

        $categories = $restaurant->offers->pluck('category')->unique();
        $offers = $restaurant->offers->groupBy('category');

        
        return view('show', 
        [
            'restaurant' => $restaurant, 
            'categories' => $categories, 
            'offers' => $offers
        ]);
    }
}
