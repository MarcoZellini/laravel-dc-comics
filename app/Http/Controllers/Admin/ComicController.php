<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comic;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use Illuminate\Support\Facades\Storage;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.comics.index', ['comics' => Comic::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {

        $val_data = $request->validated();

        if ($request->has('thumb')) {
            $file_path = Storage::put('comics_images', $request->thumb);
            $val_data['thumb'] = $file_path;
        }

        Comic::create($val_data);

        return to_route('comics.index')->with('message', 'Store operation done successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {

        return view('admin.comics.show', ['comic' => $comic]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', ['comic' => $comic]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {

        $val_data = $request->validated();

        if ($request->has('thumb')) {
            $file_path = Storage::put('comics_images', $request->thumb);
            $val_data['thumb'] = $file_path;

            if ($comic->thumb) {
                Storage::delete($comic->thumb);
            }
        }

        $comic->update($val_data);
        return to_route('comics.index', $comic)->with('message', 'Update operation done successfully!');
    }

    public function trashed()
    {
        return view('admin.comics.trash', ['comics' => Comic::onlyTrashed()->get()]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return to_route('comics.index')->with('message', 'Delete operation done successfully!');
    }

    public function restore($id)
    {
        $comic = Comic::withTrashed()->find((int)$id);

        $comic->restore();

        return to_route('trash')->with('message', 'Comic Restored Successfully!');
    }

    public function forceDestroy($id)
    {
        $comic = Comic::withTrashed()->find($id);

        $comic->forceDelete();

        return to_route('trash')->with('message', 'Comic Deleted Successfully!');
    }
}
