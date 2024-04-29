<!DOCTYPE html>
<html>
<head>
    <title>WebCam Beispiel</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <style type="text/css">
        #results { padding:20px; border:1px solid; background:#ccc; }
        #my_camera { margin: 0 auto; } /* Zentriert das Webcam-Element */
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center">WebCam Beispiel</h1>

    <form method="POST" action="{{ route('webcam.capture') }}">
        @csrf
        <div class="container text-center">
            <div class="row justify-content-center"> <!-- Verbessert die Zentrierung -->
                <div class="col text-center">
                    <div id="my_camera"></div> <!-- Webcam-Ansicht -->
                    <br/>
                    <input type=button class="btn btn-success" id="captureButton" value="1. Bild aufnehmen" onClick="take_snapshot()">
                    <input type="hidden" name="image" class="image-tag">
                </div>
            </div>
        </div>

        <div class="container text-center mt-5">
            <div class="row justify-content-center">
                <div class="col text-center">
                    <div id="results">Dein Bild wird nach der Aufnahme hier angezeigt...</div>
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                    <br/><br/>
                    <button class="btn btn-success" id="saveButton" disabled>2. Bild speichern</button>
                </div>
            </div>
        </div>

        <div class="container text-center mt-5">
            <div class="row justify-content-center">
                <div class="col text-center">
                    <a href="http://test-photo.chargedata.eu/images" class="btn btn-primary" role="button" aria-disabled="true">Alle Bilder anzeigen</a>
                </div>
            </div>
        </div>

    </form>
</div>

<script>
    Webcam.set({
        width: 490,
        height: 350,
        image_format: 'jpeg',
        jpeg_quality: 90
    });

    Webcam.attach('#my_camera');

    function take_snapshot() {
        Webcam.snap(function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
        });
    }

    document.getElementById('captureButton').addEventListener('click', function() {
        // Logik, um ein Bild aufzunehmen
        console.log('Bild wird aufgenommen...');

        // Aktivieren des Speicher-Buttons
        document.getElementById('saveButton').disabled = false;
    });

    document.getElementById('saveButton').addEventListener('click', function() {
        // Logik, um das aufgenommene Bild zu speichern
        console.log('Bild wird gespeichert...');
    });

</script>

</body>
</html>
