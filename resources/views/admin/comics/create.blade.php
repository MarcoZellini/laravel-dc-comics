@extends('layouts.admin')

@section('page-title', 'Create')


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
        <h1 class="text-center">Add a Comic</h1>
        <form action="{{ route('comics.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title *</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    aria-describedby="helpTitle" placeholder="Insert a comic title" value="{{ old('title') }}">

                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" name="description"
                    id="description" aria-describedby="helpdescription" placeholder="Insert a comic description"
                    value="{{ old('description') }}">

                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Choose file</label>
                <input type="file" class="form-control @error('thumb') is-invalid @enderror" name="thumb"
                    id="thumb" placeholder="Choose file" aria-describedby="fileHelpThumb">

                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price *</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                    id="price" aria-describedby="helpprice" placeholder="Insert a comic price"
                    value="{{ old('price') }}">

                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" name="series"
                    id="series" aria-describedby="helpseries" placeholder="Insert a comic series"
                    value="{{ old('series') }}">

                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date"
                    id="sale_date" aria-describedby="helpsale_date" placeholder="Insert a comic sale_date"
                    value="{{ old('sale_date') }}">

                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type"
                    aria-describedby="helptype" placeholder="Insert a comic type" value="{{ old('type') }}">

                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
