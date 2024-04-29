<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebCam Beispiel</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <style>
        #results { padding:20px; border:1px solid; background:#ccc; }
        #my_camera { width: 100%; /* Stellt sicher, dass die Webcam auf kleinen Bildschirmen nicht überläuft */ }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center mt-4">WebCam Beispiel</h1>

    <form method="POST" action="{{ route('webcam.capture') }}">
        @csrf
        <div class="row justify-content-center">
            <div class="col-12 col-md-6"> <!-- Responsive Spalten -->
                <div id="my_camera"></div>
                <input type="button" class="btn btn-success my-3" value="1. Bild aufnehmen" onclick="take_snapshot()">
                <input type="hidden" name="image" class="image-tag">
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div id="results">Dein Bild wird nach der Aufnahme hier angezeigt...</div>
                <span class="text-danger">{{ $errors->first('image') }}</span>
                <button class="btn btn-success my-3" disabled id="saveButton">2. Bild speichern</button>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <a href="http://test-photo.chargedata.eu/images" class="btn btn-primary">Alle Bilder anzeigen</a>
            </div>
        </div>
    </form>
</div>

<script>
    Webcam.set({
        width: 320, // Kleinere Breite für mobile Geräte
        height: 240, // Entsprechend kleinere Höhe
        image_format: 'jpeg',
        jpeg_quality: 90
    });

    Webcam.attach('#my_camera');

    function take_snapshot() {
        Webcam.snap(function(data_uri) {
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'" class="img-fluid"/>'; // Stellt sicher, dass das Bild responsive ist
            $(".image-tag").val(data_uri);
        });
        document.getElementById('saveButton').disabled = false; // Aktiviert den Speichern-Button nach der Aufnahme
    }
</script>

</body>
</html>
