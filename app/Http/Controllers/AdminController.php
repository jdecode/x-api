<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(): RedirectResponse
    {
        return redirect()->route('admin.dashboard');
    }

    public function loginForm(): View
    {
        return view('admin.loginForm');
    }

    public function login(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            request()->session()->flash('flash-notification', 'You are now logged in!');
            return redirect()->intended(route('admin.dashboard'));
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function dashboard(): View
    {
        return view('admin.dashboard');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $request->session()->flash('flash-notification', 'You are now logged out!');

        return redirect(route('admin.loginForm'));
    }
}
