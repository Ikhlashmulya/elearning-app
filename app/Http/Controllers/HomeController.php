<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function index(Request $request): Response
    {
        $data = MataKuliah::all()->take(6);

        return response()->view('home.index', compact('data'));
    }
}
