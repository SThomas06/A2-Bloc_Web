@extends('template')

@section('titre')
    Liste des ressources
@endsection

@section('contenu')
	<a href="./home">Go Home</a>
    <h1>Ressources : </h1>

    @if(isset($ressources))
    	<ol>
		    @foreach($ressources as $ressource)
		    	<li>$ressource->name</li>
		    @endforeach
		</ol>
    @else
    	<h2>PAS DE RESSOURCES DISPONIBLES</h2>
    @endif
@endsection