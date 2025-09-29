<?php

namespace App\Http\Controllers;

use App\Http\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function showLoginForm()
    {
        return View('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'], 
            'password' => ['required'],
        ]);

        if($this->authService->login($credentials)){
            $request->session()->regenerate(); // Regenerate a new session id for user after success 
            return redirect()->intended("/"); 
        }

        return back()->withErrors([
            'email' => 'Email hoặc mật khẩu không đúng.', 
        ])->onlyInput('email'); 
    }

    public function logout(Request $request)
    {
        $this->authService->logout();
        $request->session()->invalidate(); // Remove all data in session 
        $request->session()->regenerateToken(); // csrf new token
        
        return redirect('/login');
    }
}
