<!DOCTYPE html>
<html>
<head>
    <title>Gespeicherte Bilder</title>
</head>
<body>
    <h1>Bilder</h1>
    <div>
        @foreach ($images as $image)
            <div style="padding-bottom: 20px;">
                <img src="{{ asset($image) }}" style="width: 200px; height: auto;">
            </div>
        @endforeach
    </div>
</body>
</html>
