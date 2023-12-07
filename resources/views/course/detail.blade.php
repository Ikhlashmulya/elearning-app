<x-layout>
    <br><br><br><br>
    <div class="container pt-2" style="border:1px solid black; border-radius:10px;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/courses">All Courses</a></li>
                <li class="breadcrumb-item active" aria-current="page">Course</li>
            </ol>
        </nav>
    </div>
    <div class="container mt-5">
        @if (count($materi) == 0)
            <h2>Materi Tidak Ada</h2>
        @endif
        @foreach ($materi as $m)
            <div class="card mb-4 mt-4">
                <div class="card-body">
                    <a href="{{ request()->url() }}/content/{{ $m->id }}">
                        {{ $m->judul }}
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
