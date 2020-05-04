@extends('layouts.app')

@section('content')
<div class="container">
	<div class="card">
  		<div class="card-header bg-secondary text-center text-white">
  			<h1>Welcome in {{$classe->libClasse}}</h1>
  		</div>
  		<div class="card-body">
			<div class="card-columns">
				  <div class="card bg-primary">
				    <div class="card-body text-center">
				      <p class="card-text"><h3>Dénomination <br>{{$classe->libClasse}}</h3></p>
				    </div>
				  </div>
				  <div class="card bg-warning">
				    <div class="card-body text-center">
				      <p class="card-text"><h3>Effectif <br>{{get_nombreEleves($classe->id)}} élèves </h3></p>
				    </div>
				  </div>
				  <div class="card bg-success">
				    <div class="card-body text-center">
				      <p class="card-text"><h3>Responsable de classe<br>{{$respons->prenoms}} {{$respons->nom}} </h3></p>
				    </div>
				  </div>
			</div>
			
			<div class="card-columns">
				  <div class="card bg-primary">
				    <div class="card-body text-center">
				      <p class="card-text"><h3>Surveillant <br>{{$surv->prenoms}} {{ $surv->nom }} </h3></p>
				    </div>
				  </div>
				  <div class="card bg-warning">
				    <div class="card-body text-center">
				      <p class="card-text"><h3>Salle <br>{{$salle['name']}} </h3></p>
				    </div>
				  </div>
				  <div class="card bg-danger">
				    <div class="card-body text-center">
				      <p class="card-text"><h3>Professeur principal <br> {{$profprinc->prenoms}} {{ $profprinc->nom }} </h3></p>
				    </div>
				  </div>
				</div>
			</div>
			<div class="card-footer bg-secondary text-center text-white pull-right">
				<a href="/eleves/voir?classe={{$classe->id}}" class="btn btn-info">Les élèves</a>
				<a href="/classes/{{$classe->id}}/edit" class="btn btn-info">Modifier</a>
  		</div>
	</div>

</div>
@stop