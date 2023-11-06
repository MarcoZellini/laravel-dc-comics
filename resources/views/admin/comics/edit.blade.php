@extends('layouts.admin')

@section('page-title', 'Edit')


@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container py-3">
        <h1 class="text-center">Edit Comic Number: # {{ $comic->id }}</h1>
        <form action="{{ route('comics.update', $comic) }}" method="POST" enctype="multipart/form-data">
            @csrf

            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title *</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="helpTitle"
                    placeholder="Insert a comic title" value="{{ old('title', $comic->title) }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" name="description" id="description"
                    aria-describedby="helpdescription" placeholder="Insert a comic description"
                    value="{{ old('description', $comic->description) }}">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Choose file</label>
                <input type="file" class="form-control" name="thumb" id="thumb" placeholder="Choose file"
                    aria-describedby="fileHelpThumb">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price *</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="helpprice"
                    placeholder="Insert a comic price" value="{{ old('price', $comic->price) }}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="helpseries"
                    placeholder="Insert a comic series" value="{{ old('series', $comic->series) }}">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" aria-describedby="helpsale_date"
                    placeholder="Insert a comic sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="helptype"
                    placeholder="Insert a comic type" value="{{ old('type', $comic->type) }}">
            </div>
            <button type="submit" class="btn btn-warning">Edit</button>
        </form>
    </div>
@endsection
