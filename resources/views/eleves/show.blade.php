@extends('layouts.app')

@section('content')
	<div class="container">
		<h2 class="py-3">Affichage du numéro {{ $eleve->id }}</h2>
		
		<div class="card" style="width:800px">
    		<div class="card-header">
    			<h2>Certificat de scolarité</h2>
    		</div>
    		<div class="card-body">
	      		<h4 class="card-title">John Doe</h4>
	      		<p class="card-text">
	      			<div class="row">
	      				<div class="col-3">
	      					Prénoms et Nom :
	      				</div>
	      				<div class="col-9">
	      					<strong>{{ $eleve->student_prenom }} {{$eleve->student_name}}</strong>
	      				</div>
	      			</div>
	      			<div class="row">
	      				<div class="col-3">
	      					Date de naissance :
	      				</div>
	      				<div class="col-9">
	      					{{ $eleve->student_dob }}
	      				</div>
	      			</div>
	      			<div class="row">
	      				<div class="col-3">
	      					Matricule :
	      				</div>
	      				<div class="col-9">
	      					{{ $eleve->student_matricule }}
	      				</div>
	      			</div>
	      		</p>
    		</div>
    		<div class="card-footer">	
    			<a href="#" class="btn btn-primary">See Profile</a>
    		</div>
  		</div>
	</div>
@endsection