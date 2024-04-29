<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebcamController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
        ],
        [
            'image.required' => 'Bitte nehmen Sie ein Bild auf',
        ]);
        $img = $request->image;
        $folderPath = "uploads/";
        $image_parts = explode(";base64,", $img);
        $image_base64 = base64_decode($image_parts[1]);
        $fileName = uniqid() . '.png';

        $file = $folderPath . $fileName;
        Storage::put($file, $image_base64);

        dd('Bild erfolgreich hochgeladen: '.$fileName);
    }
}
