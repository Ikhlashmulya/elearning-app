<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function index(Request $request): RedirectResponse|Response
    {
        if (!$request->session()->exists('user')) {
            return redirect('/login');
        } else {
            return response()->view('home');
        }
    }
}
