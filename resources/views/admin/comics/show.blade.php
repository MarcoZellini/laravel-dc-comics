@extends('layouts.admin')

@section('content')
    <div class="p-5 bg-dark text-light rounded-0">
        <h1 class="text-center">Comic #{{ $comic->id }}</h1>
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">{{ $comic->title }}</h1>
            <p class="col-md-8 fs-4">{{ $comic->description }}</p>
            {{-- <button class="btn btn-primary btn-lg" type="button">Example button</button> --}}
        </div>
    </div>
    <div class="container d-flex py-3">
        <img class="me-5" src="{{ asset('storage/' . $comic->thumb) }}" alt="">
        <div class="row row-cols-2 w-100 info">
            <div class="col-6 artists">
                <h5>Artists: </h5>
                <ul>
                    @forelse (json_decode($comic->artists) as $artist)
                        <li>{{ $artist }}</li>
                    @empty
                    @endforelse
                </ul>
            </div>
            <div class="col-6 writers">
                <h5>Writers: </h5>
                <ul>
                    @forelse (json_decode($comic->writers) as $writer)
                        <li>{{ $writer }}</li>
                    @empty
                    @endforelse
                </ul>
            </div>
            <div class="col-12">
                <h4><strong>Type: </strong> {{ $comic->type }}</h4>
                <h4><strong>Series: </strong> {{ $comic->series }}</h4>
                <h4><strong>Sale Date: </strong> {{ $comic->sale_date }}</h4>
                <h4><strong>Price: </strong> {{ $comic->price }}</h4>
            </div>
        </div>
    </div>
@endsection
