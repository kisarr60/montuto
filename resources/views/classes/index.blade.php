@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card">
  		<div class="card-header bg-secondary">
			<div class="row">
				<div class="col-md-8"><h2 class="text-white" >Liste des classes</h2></div>
				<div class="col-md-4"><a class="btn btn-primary float-right" href="classes/create">Ajouter une classe</a></div>
			</div>
		</div>
		<div class="card-body">
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>RefClasse</th>
						<th>Libellé</th>
						<th>Salle</th>
						<th>Local</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($classes as $classe)
						<tr>
							<div class="row">
								<div class="col-md-10">
								<td>{{$classe->id}}</td>
								<td>{{$classe->refClasse}}</td>
								<td>{{$classe->libClasse}}</td>
								<td>{{$classe->Salle->name}}</td>
								<td>{{$classe->Salle->local}}</td>
								</div>
								<div class="col-md-2">
								<td>
									<div class="row">
										<div class="col-md-2">
									<a href="/classes/{{$classe->id}}" class="btn btn-info">Voir</a></div>
									<div class="col-md-2">
									<a href="/classes/{{$classe->id}}/edit" class="btn btn-warning">Edit</a>
									</div>
									<div class="col-md-4">
									{!!Form::open(['action' => ['ClasseController@destroy', $classe->id], 'method' => 'post', 'class' => 'pull-right'])  !!}

										{{Form::hidden('_method', 'DELETE')}}
										{{ Form::submit('Sup', ['class' => 'btn btn-danger']) }}

									{!! Form::close() !!}
									</div>

									</div>
								</td>
							</div>
							</div>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="card-footer pull-center bg-secondary">{{$classes->links()}}</div>
		
	</div>
@stop