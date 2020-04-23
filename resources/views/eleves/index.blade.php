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
			</tr>
			@foreach($eleves as $eleve)
				<tr>
					<td><a class="btn btn-info" href="/eleves/{{$eleve->id}}">{{ $eleve->id }}</a></td>
					<td>{{ $eleve->student_prenom }}</td>
					<td>{{ $eleve->student_name }}</td>
					<td>{{ $eleve->student_matricule }}</td>
					<td>{{ $eleve->libclasse }}</td>
				</tr>
			@endforeach
		</table>
		<div></div>
	</div>
@endsection