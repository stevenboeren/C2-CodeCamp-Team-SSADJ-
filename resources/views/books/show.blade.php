@extends('layout')

@section('nav')
    <nav>   
        <a href="/">Home</a> |
        <a href="/books">Boeken</a> |
        <a href="/drinks">Dranken</a> |
        <a href="/movies">Films</a> |
        <a href="/tools">Gereedschappen</a> |
        <a href="/lyrics">Songteksten</a>
    </nav>
@endsection

@section('content')

<div class="container">
	<div class="page-content">
		<div class="page-content-left">
			<h1>{{ $book->name }}</h1>
			<p>{{ $book->description }}</p>
		</div>

		<div class="page-content-right">
			<img src="../img/boeken/{{ $book->img_url }}" alt="">
			<div class="more-info">
				<p><span>Auteur:</span>  {{ $book->actor }}</p>
				<p><span>Pagina's:</span>  {{ $book->pages }}</p>
			</div>
		</div>
	</div>
	
</div>

@endsection
