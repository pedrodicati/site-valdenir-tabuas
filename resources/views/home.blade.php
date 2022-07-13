@extends('layouts.main')

@section('title', 'Home')

@section('content')

<div id="carousel" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="100">
        	<img src="{{ asset('img/tabua-inteligente-05.jpg') }}" class="d-block w-100" alt="Tabua inteligente">
			<div class="carousel-caption d-none d-md-block">
				<h5>TÁBUA INTELIGENTE</h5>
				<p>Praticidade e sofisticação para seu churrasco</p>
			</div>
      	</div>
      	<div class="carousel-item" data-bs-interval="200">
        	<img src="{{ asset('img/petisqueira-06.jpeg') }}" class="d-block w-100" alt="petisqueira">
			<div class="carousel-caption d-none d-md-block">
				<h5>PETISQUEIRA</h5>
				<p>Estilo e personalidade aliados à ótimos petiscos</p>
			</div>
		</div>
      	<div class="carousel-item" data-bs-interval="200">
        	<img src="{{ asset('img/tabua-mesa-01.jpg') }}" class="d-block w-100" alt="tabua de mesa">
			<div class="carousel-caption d-none d-md-block">
				<h5>TABUA DE MESA</h5>
				<p>Elegancia para seu final de semana.</p>
			</div>
		</div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
      	<span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
      	<span class="carousel-control-next-icon" aria-hidden="true"></span>
      	<span class="visually-hidden">Next</span>
    </button>
</div>

@endsection