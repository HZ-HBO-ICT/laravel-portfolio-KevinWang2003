@extends('layout')

@section('head')
    <link rel="stylesheet" href="css/portfolio.css">
    <title>Portfolio</title>
@endsection

@section('content')
    <main>
        <h1>Portfolio</h1>
        <p>Dit is mijn Portfolio Pagina</p>
        <div class="vogelbekdier">
            <h2>Vogelbekdier</h2>
            <img src="resources/website middelbare.PNG" width="1000" height="460">
            <p>Dit is mijn website die ik in de middelbare heb gemaakt.</p>
            <p>Voor deze website moest ik een onderwerp kiezen en die in deze website verwerken.</p>
            <p>Het onderwerp mochten we zelf wel kiezen maar het moest wel goedgekeurd zijn.</p>
            <p>De onderwerp die ik gekozen had was de vogelbekdier.</p>
        </div>
        <div class="smulkamerapp">
            <h2>SmulKamerApp</h2>
            <img src="resources/smulkamerapp.png" width="460" height="800">
            <p>Voor het vak Technasium moest ik een app creëren om mensen met een verstandelijke beperking te leren bakken.</p>
            <p>Dit hebben we gedaan doormiddel van een HTML website die je via je telefoon of tablet kunt bekijken.</p>
            <p>Hiervoor hadden we eerst node.js gebruikt, maar door het gebrek van de kennis ging dat niet.</p>
        </div>
        <footer><img class="logo" src="resources/HZ logo.png" width="75px" height="75px" alt="HZ Logo"></footer>
    </main>
@endsection
