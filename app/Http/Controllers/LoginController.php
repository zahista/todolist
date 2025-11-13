<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
 
class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('admin.index');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function register(Request $request)
    {
        $data = $request->all();

        // validace 

        User::create($data);

        // přihlášení uživatele 

        to_route('index');
    }


    public function showLoginForm()
    {
        return view('login');
    }

    public function showRegisterForm()
    {
        return view('register');
    }
}