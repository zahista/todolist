<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {   
        $restaurants = Restaurant::all();

        return view('admin', ['restaurants' => $restaurants]);
    }


    public function create(Request $request)
    {
        Restaurant::create($request->all());

        return to_route('admin.index');
    }
}
