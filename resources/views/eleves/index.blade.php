@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card">
		<div class="card-header bg-secondary text-center text-white">
			<h2>Liste des élèves</h2>
		</div>
		<div class="card-body">
			<table class="table table-striped">
			<tr>
				<th>#</th>
				<th>Prénoms</th>
				<th>Nom</th>
				<th>Matricule</th>
				<th>Classe</th>
				<th>Action</th>
			</tr>
			@foreach($eleves as $key => $eleve)
				<tr>
					<td>{{ $key + 1 }}</td>
					<td>{{ $eleve->prenoms }}</td>
					<td>{{ $eleve->nom }}</td>
					<td>{{ $eleve->matricule }}</td>
					<td>{{ $eleve->classe->libClasse }}</td>
					<td><a class="btn btn-info" href="/eleve/{{$eleve->id}}">Voir</a></td>
				</tr>
			@endforeach
		</table>
		</div>
		<div class="card-footer bg-secondary">
			<div> {{$eleves->links()}} </div>
		</div>
	</div>
@endsection