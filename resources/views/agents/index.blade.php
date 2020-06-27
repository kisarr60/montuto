@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-header bg-secondary">
			<div class="row">
				<div class="col-md-3"><h4 class="text-white" >Listes des professeurs</h4></div>
				<div class="col-md-3"><a class="btn btn-primary float-right" href="pdfprofs" target="_BLANK">Liste des profs</a></div>
				<div class="col-md-3"><a class="btn btn-primary float-right" href=" {{ url('/documents/AUTORISATION ABSENCE.pdf')}} " target="_BLANK">Formulaire absence</a></div>
				<div class="col-md-3"><a class="btn btn-primary float-right" href="agents/create">Ajouter un prof</a></div>
			</div>
		</div>
			<div class="card-body">
				<table class="table table-striped">
			<tr>
				<th>#</th>
				<th>Prénoms</th>
				<th>Nom</th>
				<th>Discipline</th>
				<th>Téléphone</th>
				<th>Action</th>
			</tr>
			@foreach($profs as $prof)
				<tr>
					<td>{{ $prof->id }}</td>
					<td>{{ $prof->prenoms }}</td>
					<td>{{ $prof->nom }}</td>
					<td>{{ $prof->discipline }}</td>
					<td>{{ $prof->phone }}</td>
					<td><div class="row">
										<div class="col-md-2">
									<a href="/agents/{{$prof->id}}" class="btn btn-info">Voir</a></div>
									<div class="col-md-2">
									<a href="/agents/{{$prof->id}}/edit" class="btn btn-warning">Edit</a>
									</div>
									<div class="col-md-4">
									{!!Form::open(['action' => ['AgentController@destroy', $prof->id], 'method' => 'post', 'class' => 'pull-right'])  !!}

										{{Form::hidden('_method', 'DELETE')}}
										{{ Form::submit('Sup', ['class' => 'btn btn-danger']) }}

									{!! Form::close() !!}
									</div>

									</div></td>
				</tr>
			@endforeach
		</table>
			</div>
			<div class="card-footer bg-secondary text-white text-center">
				{{$profs->links()}} 
			</div>
		</div>
		
		
		
	</div>
@endsection