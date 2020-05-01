@extends('layouts.app')

@section('content')
	<div class="container">
		<h2 class="py-3">Affichage du numéro {{ $eleve->id }}</h2>
		
		<div class="card" style="width:800px">
    		<div class="card-header">
    			<h2>Certificat de scolarité</h2>
    		</div>
    		<div class="card-body">

	      		<div class="card-title">
	      			<form action="{{ url('eleves/certif') }}" method="post" target="__BLANK">
	      			@METHOD('post')
    				@csrf
    				<input type="hidden" name="classe" value=" {{$eleve->classe}} ">
    				<input type="hidden" name="var" value=" {{$eleve->assurance}} ">
    				<input type="submit" name="submit" value="Imprimer">
    			</form>
	      		</div>
	      		<p class="card-text">
	      			<div class="row">
	      				<div class="col-3">
	      					Prénoms et Nom :
	      				</div>
	      				<div class="col-9">
	      					<strong>{{ $eleve->first_name }} {{$eleve->last_name}}</strong>
	      				</div>
	      			</div>
	      			<div class="row">
	      				<div class="col-3">
	      					Date de naissance :
	      				</div>
	      				<div class="col-9">
	      					{{changeDateFormate($eleve->datnais,'d-m-Y')}}
	      				</div>
	      			</div>
	      			<div class="row">
	      				<div class="col-3">
	      					Lieu de naissance :
	      				</div>
	      				<div class="col-9">
	      					{{ ucwords($eleve->lieunais) }}
	      				</div>
	      			</div>
	      			<div class="row">
	      				<div class="col-3">
	      					Matricule :
	      				</div>
	      				<div class="col-9">
	      					{{ $eleve->assurance }}
	      				</div>
	      			</div>
	      			<div class="row">
	      				<div class="col-3">
	      					Classe :
	      				</div>
	      				<div class="col-9">
	      					{{ $eleve->classe }}
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