<header id="app_header" class="py-2 bg-dark">
    <nav class="nav justify-content-around ">
        <div class="main-link d-flex justify-content-center">
            {{-- <a class="nav-link active" href="{{ route('home') }}">Home</a> --}}
            <a class="nav-link" href="{{ route('comics.index') }}">Comics</a>
            <a class="nav-link" href="{{ route('trash') }}">Trash</a>
            <a class="nav-link" href="{{ route('comics.create') }}">Add Comic</a>
        </div>
        <div class="link"><a class="nav-link" href="{{ route('home') }}">Guest</a></div>
    </nav>
</header>
