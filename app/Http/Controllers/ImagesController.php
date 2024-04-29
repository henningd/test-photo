<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index()
    {
        //$images = File::allFiles(public_path('uploads'));
        $images = Storage::disk('public')->allFiles('uploads');
        dd($images);
        return view('images.index', compact('images'));
    }
}
