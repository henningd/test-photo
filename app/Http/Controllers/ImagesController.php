<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function index()
    {
        $images = File::allFiles(public_path('uploads'));
        dd($images);
        return view('images.index', compact('images'));
    }
}
