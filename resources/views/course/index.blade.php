<x-layout>
    <br><br><br>
    <div class="container pt-2" style="border:1px solid black; border-radius:10px;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">All Courses</li>
            </ol>
        </nav>
    </div>
    <div class="container mt-5">
        <div class="row">
            @foreach ($data as $d)
                <x-course-card id="{{ $d->id }}" title="{{ $d->nama }}" />
            @endforeach
        </div>
        {{ $data->links() }}
    </div>
</x-layout>
