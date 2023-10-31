<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function comics()
    {
        return view('comics', ['comics' => Comic::all()]);
    }

    public function about()
    {
        return view('about');
    }
}
