<x-layout>
    <div class="jumbotron p-5 mt-5">
        <br><br><br>
        <h1 class="display-4">Hello!</h1>
        <p class="lead">Temukan materi pembelajaran yang dapat membantu Anda dalam memahami topik ini dengan lebih
            baik.</p>
        <br><br>
    </div>
    <hr>
    <br><br>
    <div class="container mt-5">
        <div class="row">
            @foreach ($data as $d)
                <x-card id="{{ $d->id }}" title="{{ $d->nama }}" />
            @endforeach
        </div>
    </div>
</x-layout>
