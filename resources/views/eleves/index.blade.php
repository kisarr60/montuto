@extends('layouts.app')

@section('content')
	<div class="container">
		<h2>Liste des élèves</h2>
		<table class="table table-striped">
			<tr>
				<th>#</th>
				<th>Prénoms</th>
				<th>Nom</th>
				<th>Matricule</th>
				<th>Classe</th>
				<th>Action</th>
			</tr>
			@foreach($eleves as $eleve)
				<tr>
					<td>{{ $eleve->id }}</td>
					<td>{{ $eleve->prenoms }}</td>
					<td>{{ $eleve->nom }}</td>
					<td>{{ $eleve->matricule }}</td>
					<td>{{ $eleve->classe->libClasse }}</td>
					<td><a class="btn btn-info" href="/eleve/{{$eleve->id}}">Voir</a></td>
				</tr>
			@endforeach
		</table>
		<div> {{$eleves->links()}} </div>
	</div>
@endsection