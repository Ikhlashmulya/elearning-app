<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark fixed-top" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/logo.png') }}" alt="Bootstrap" width="50" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('courses') ? 'active' : '' }}"
                        href="{{ route('courses') }}">Courses</a>
                </li>
                @if (!Auth::check())
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link {{ request()->is('login') ? 'active' : '' }}">
                            Login
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="nav-link">Logout</button>
                        </form>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
