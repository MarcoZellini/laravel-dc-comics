@extends('layouts.app')

@section('content')
    <section id="comics">
        <div class="container py-3">
            <h1 class="text-center">Comics Collection</h1>
            <div class="row row-cols-1 row-cols-md-3 g-5">
                @forelse ($comics as $comic)
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-header">
                                <div><strong>Title: </strong>{{ $comic->title }}</div>
                            </div>

                            @if (str_contains($comic->thumb, 'http'))
                                <a href="{{ route('show', $comic) }}" class="h-100">
                                    <img class="img-fluid" src="{{ $comic->thumb }}">
                                </a>
                            @else
                                <a href="{{ route('show', $comic) }}" class="h-100">
                                    <img class="img-fluid" src="{{ asset('storage/' . $comic->thumb) }}">
                                </a>
                            @endif

                            <div class="card-footer">
                                <div><strong>Price: </strong>{{ $comic->price }}</div>
                                <div><strong>Series: </strong>{{ $comic->series }}</div>
                                <div><strong>Sale Date:</strong> {{ $comic->sale_date }}</div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h3> There are ant comics yet! </h3>
                @endforelse
            </div>
        </div>
    </section>
@endsection
