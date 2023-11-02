@extends('layouts.admin')

@section('content')
    <div class="container py-3">
        <h1 class="text-center">Edit Comic Number: # {{ $comic->id }}</h1>
        <form action="{{ route('comics.update', $comic) }}" method="POST" enctype="multipart/form-data">
            @csrf

            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="helpTitle"
                    placeholder="Insert a comic title" value="{{ $comic->title }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="helpprice"
                    placeholder="Insert a comic price" value="{{ $comic->price }}">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Choose file</label>
                <input type="file" class="form-control" name="thumb" id="thumb" placeholder="Choose file"
                    aria-describedby="fileHelpThumb" value="{{ $comic->thumb }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
