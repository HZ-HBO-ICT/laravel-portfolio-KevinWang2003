@extends('layout')

<head>
    <link rel="stylesheet" href="css/profile.css">
    <title>My Profile</title>
</head>

@section('content')
    <main>
        <article>
            <h1>Profile</h1>
            <div class="gegevens">
                <h2>Persoonlijke Gegevens:</h2>
                <img class="image1" src="resources/Mijn foto.jpg" alt="Selfie" width="217px" height="363px">
                <ul>
                    <li><p>Naam: Kevin Wang</p></li>
                    <li><p>Leeftijd: 17 (Bijna 18)</p></li>
                    <li><p>Geboortedatum: 09-12-2003</p></li>
                    <li><p>Woonplaats: Yerseke</p></li>
                    <li><p>Afgestudeerde scholen:</p></li>
                    <li><p>OBS Parelmoer en Pontes Oranjeweg</p></li>
                    <li><p>Vooropleiding + Profiel:</p></li>
                    <li><p>Havo Natuur en Techniek</p></li>
                </ul>
            </div>
            <div class="baan">
                <h2>Bijbaan en Vrijetijd:</h2>
                <img class="image2" src="resources/Ayaya.gif" alt="Ayaya">
                <ul>
                    <li><p>Mijn ouders komen uit Azië en ik geboren in Nederland</p></li>
                    <li><p>Mijn vader komt uit China en mijn moeder komt uit Vietnam.</p></li>
                    <li><p>Ik werk bij de cafetaria van mijn ouders.</p></li>
                    <li><p>De cafetaria heet: Kam Boat.</p></li>
                    <li><p>Ik game heel veel en luister ook veel naar muziek.</p></li>
                    <li><p>Ik kijk ook veel naar Anime en Formula 1.</p></li>
                    <li><p>Mijn studie gaat voor het gamen, dus ik moet eerst al mijn schoolopdrachten afmaken voordat ik ga gamen.</p></li>
                </ul>
            </div>
            <div class="games">
                <h2>Games die ik speel:</h2>
                <div class="video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/fiJ7JwwlG6o"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <ul>
                    <li><p>Minecraft</p></li>
                    <li><p>Counter-Strike Global Offensive</p></li>
                    <li><p>Osu!</p></li>
                    <li><p>Professor Layton</p></li>
                    <li><p>Rocket League</p></li>
                    <li><p>Persona 5</p></li>
                    <li><p>Ace attorney: Phoenix Wright</p></li>
                    <li><p>Valorant</p></li>
                </ul>
            </div>
        </article>
        <footer><img class="logo" src="resources/HZ logo.png" width="75px" height="75px" alt="HZ Logo"></footer>
    </main>
@endsection
