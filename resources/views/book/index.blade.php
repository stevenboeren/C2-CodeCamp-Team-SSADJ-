@extends('layout')

@section('nav')
    <nav>
        <a href="/">Home</a> |
        <a href="/book">Boeken</a> |
        <a href="/drinks">Dranken</a> |
        <a href="/movies">Films</a> |
        <a href="/tools">Gereedschappen</a> |
        <a href="/lyrics">Songteksten</a>
    </nav>
@endsection

@section('content')

<div class="container selection">

    <div class="welcome-message">
        <h2>Boeken</h2>
        <p>Lekker een boek lezen, maar weet niet welke. Hier is een lijst met boeken</p>
    </div>
    
    <div class="grid">
        <div class="grid-item" style="background-image: url('/img/boeken/zuurstofschuld.jpeg')">
            <div class="item-text"><a href="">Zuurstofschuld</a></div>
        </div>
        <div class="grid-item" style="background-image: url('/img/boeken/klifi.jpeg')">
            <div class="item-text"><a href="">KliFi</a></div>
        </div>
        <div class="grid-item" style="background-image: url('/img/boeken/amir.jpeg')">
            <div class="item-text"><a href="">Amir</a></div>
        </div>
        <div class="grid-item" style="background-image: url('/img/boeken/alles-is-weg.jpeg')">
            <div class="item-text"><a href="">Alles is weg</a></div>
        </div>
        
    </div>

</div>
    

@endsection