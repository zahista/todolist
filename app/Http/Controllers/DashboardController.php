<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $certificates = Certificate::all();
        return view('dashboard',["certificates" => $certificates]);
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'email' => ['required', 'max:255', 'email'],
            'question' => ['required', 'min:5'],
        ],[
          "question.required" => "Toto pole je povinné vole!",
          "question.min"=> "To je zase moc krátké!"
        ]);

        Certificate::create([
            "title"=> $validatedData['email'],
            "description"=> $validatedData['question'],
        ]);

        return redirect('/');
    }
}
