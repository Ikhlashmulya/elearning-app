<x-layout>
    <br><br><br><br>
    <div class="container pt-2" style="border:1px solid black; border-radius:10px;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('courses') }}">All Courses</a></li>
                {{-- <li class="breadcrumb-item"><a href="/">Course</a></li> --}}
                <li class="breadcrumb-item active" aria-current="page">Materi</li>
            </ol>
        </nav>
    </div>
    <div class="container mt-5">
        <h2>{{ $materi->judul }}</h2>
        <p>{{ $materi->description }}</p>
        <embed src="{{ asset('storage/' . $materi->file) }}" type="application/pdf" width="100%" height="720">
        <br><br>
    </div>
</x-layout>
