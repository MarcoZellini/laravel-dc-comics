<header id="app_header" class="py-2 bg-dark">
    <nav class="nav justify-content-around ">
        <div class="main-link d-flex justify-content-center">
            <a class="nav-link active" href="{{ route('home') }}">Home</a>
            <a class="nav-link" href="{{ route('comics') }}">Comics</a>
            <a class="nav-link" href="{{ route('about') }}">About</a>
        </div>
        <div class="link"><a class="nav-link" href="{{ route('comics.index') }}">Admin</a></div>
    </nav>
</header>
