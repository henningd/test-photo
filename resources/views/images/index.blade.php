<!DOCTYPE html>
<html>
<head>
    <title>Image Gallery</title>
</head>
<body>
    <h1>Bildergalerie</h1>
    <div>
        @foreach ($images as $image)
            <div>
                <img src="{{ asset('uploads/' . $image->getFilename()) }}" style="width: 200px; height: auto;">
            </div>
        @endforeach
    </div>
</body>
</html>
