<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\MataKuliah;
use Exception;

class CoursesController extends Controller
{
    public function index(): Response
    {
        $data = MataKuliah::all();

        return response()->view('course.index', compact('data'));
    }

    public function show(Request $request): Response
    {
        throw new Exception('TODO: implement show course');
    }
}
