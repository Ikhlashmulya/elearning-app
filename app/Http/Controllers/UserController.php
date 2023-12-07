<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(): Response
    {
        return response()->view('user.login');
    }

    public function doLogin(LoginUserRequest $request): RedirectResponse
    {
        $cridentials = $request->getCridentials();

        if (!Auth::validate($cridentials)) {
            return redirect('/login')->with('error', 'email atau password yang anda masukan tidak valid');
        }

        $user = User::where('email', $cridentials['email'])->first();

        if (!$user->is_active) {
            return redirect('/login')->with('warn', 'akun anda belum diaktivasi oleh admin');
        }

        Auth::login($user);

        return redirect('/');
    }

    public function doLogout(): RedirectResponse
    {
        Auth::logout();
        return redirect('/');
    }

    public function register(): Response
    {
        return response()->view('user.register');
    }

    public function doRegister(RegisterUserRequest $request): RedirectResponse
    {
        User::create($request->validated());

        return redirect('/register')->with('success', 'register success');
    }
}
