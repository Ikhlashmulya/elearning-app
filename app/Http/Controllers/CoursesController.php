<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\MataKuliah;

class CoursesController extends Controller
{
    public function index(): Response
    {
        $data = MataKuliah::paginate(9);

        return response()->view('course.index', compact('data'));
    }

    public function detail(Request $request, int $id): Response
    {
        $mataKuliah = MataKuliah::where('id', $id)->firstOrFail();
        $materi = $mataKuliah->Materi()->get();

        return response()->view('course.detail', compact('materi'));
    }

    public function content(Request $request, int $courseId, int $contentId): Response
    {
        $mataKuliah = MataKuliah::where('id', $courseId)->firstOrFail();
        $materi = $mataKuliah->Materi()->findOrFail($contentId);

        return response()->view('course.content', compact('materi'));
    }
}
