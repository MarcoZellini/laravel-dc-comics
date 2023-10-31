<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function comics()
    {
        $comics = config('comics');
        //dd($comics);
        return view('comics', ['comics' => $comics]);
    }

    public function about()
    {
        return view('about');
    }
}
