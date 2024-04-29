<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Erfolg</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-sm mt-5">
    <div class="alert alert-success mb-5" role="alert">
        Bild erfolgreich hochgeladen: {{ $fileName }}
    </div>
    <a href="{{ url('/') }}" class="btn btn-primary btn-block mb-4">Zur Startseite</a>
    <a href="{{ url('/images') }}" class="btn btn-secondary btn-block">Bilder anzeigen</a>
</div>
</body>
</html>
