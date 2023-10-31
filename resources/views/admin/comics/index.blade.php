@extends('layouts.admin')

@section('content')
    <div class="container py-3">
        <h1 class="text-center">Comic List</h1>

        <div class="table-responsive-sm">
            <table class="table table-light">
                <thead>
                    <tr class="text-center">
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Thumb</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr class="text-center">
                            <td>{{ $comic->id }}</td>
                            <td>{{ $comic->title }}</td>
                            <td><img height="50px" src="{{ $comic->thumb }}" alt=""></td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('comics.show', $comic->id) }}">More</a>
                                <a class="btn btn-warning" href="#">Edit</a>
                                <a class="btn btn-danger" href="#">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <h6>There are any comic in here!</h6>
                    @endforelse
                </tbody>
            </table>
        </div>


    </div>
@endsection
