<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    public function index()
    {
        $images = Storage::disk('public')->allFiles('uploads');
        dd($images);
        return view('images.index', compact('images'));
    }
}
