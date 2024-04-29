<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gespeicherte Bilder</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            padding: 20px;
            font-family: Arial, sans-serif;
        }
        .image-container {
            padding-bottom: 20px;
            width: 100%; /* Nutzt die volle Breite aus */
            display: flex;
            justify-content: center; /* Zentriert die Bilder horizontal */
        }
        .image-container img {
            max-width: 100%; /* Sorgt dafür, dass das Bild nicht über den Bildschirm hinausgeht */
            height: auto; /* Erhält das Seitenverhältnis */
        }
        @media (min-width: 600px) {
            .image-container img {
                max-width: 200px; /* Beschränkt die Bildbreite auf 200px auf größeren Bildschirmen */
            }
        }
        .home-button {
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .home-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<h1>Bilder</h1>
<br>
<a href="{{ url('/') }}" class="home-button">Zur Startseite</a>
<br>
<div>
    @foreach ($images as $image)
        <div class="image-container">
            <img src="{{ asset($image) }}" alt="Bild">
        </div>
    @endforeach
</div>

</body>
</html>
