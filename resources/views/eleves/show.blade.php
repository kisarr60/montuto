@extends('layouts.app')

@section('content')
<div class="container">
	<div class="card">
		<div class="card-header">
			<div class="row">
	      				<div class="col-6">
	      					<h2>Profil de {{ $eleve->prenoms }} {{ $eleve->nom }}</h2>
	      				</div>
	      				<div class="col-3">
	      					<form action="{{ url('eleves/certif') }}" method="post" target="__BLANK">
				      			@METHOD('post')
			    				@csrf
			    				<input type="hidden" name="classe" value=" {{$eleve->classe->libClasse}} ">
			    				<input type="hidden" name="var" value=" {{$eleve->matricule}} ">
			    				<input type="submit" name="submit" value="Certificat de scolarité">
    						</form>
	      				</div>
	      				<div class="col-3">
	      					<form action="{{ url('eleves/billetsortie') }}" method="post" target="__BLANK">
				      			@METHOD('post')
			    				@csrf
			    				<input type="hidden" name="classe" value=" {{$eleve->classe->libClasse}} ">
			    				<input type="hidden" name="var" value=" {{$eleve->matricule}} ">
			    				<input type="submit" name="submit" value="Billet de sortie">
		    				</form>
	      				</div>
	      			</div>
		</div>
		<div class="card-body">

			<div class="row">
				<div class="col-5">
					<div class="row">
	      				<div class="col-5">
		      					Prénoms et Nom :
		      			</div>
		      			<div class="col-7">
		      				<strong>{{ $eleve->prenoms }} {{$eleve->nom}}</strong>
		      			</div>
		      		</div>
		      		<div class="row">
						<div class="col-5">
	      					Date de naissance :
	      				</div>
	      				<div class="col-7">
	      					{{changeDateFormate($eleve->datnais,'d-m-Y')}}
	      				</div>
					</div>
					<div class="row">
	      				<div class="col-5">
	      					Lieu de naissance :
	      				</div>
	      				<div class="col-7">
	      					{{ ucwords($eleve->lieunais) }}
	      				</div>
	      			</div>
	      			<div class="row">
	      				<div class="col-5">
	      					Matricule :
	      				</div>
	      				<div class="col-7">
	      					{{ $eleve->matricule }}
	      				</div>
	      			</div>
	      			<div class="row">
	      				<div class="col-5">
	      					Classe :
	      				</div>
	      				<div class="col-7">
	      					{{ $eleve->classe->libClasse }}
	      				</div>
	      			</div>			
				</div>
				<div class="col-5">
					<div class="row">
	      				<div class="col-5">
		      					Prénoms et Nom :
		      			</div>
		      			<div class="col-7">
		      				<strong>{{ $eleve->prenoms }} {{$eleve->nom}}</strong>
		      			</div>
		      		</div>
		      		<div class="row">
						<div class="col-5">
	      					Date de naissance :
	      				</div>
	      				<div class="col-7">
	      					{{changeDateFormate($eleve->datnais,'d-m-Y')}}
	      				</div>
					</div>
					<div class="row">
	      				<div class="col-5">
	      					Lieu de naissance :
	      				</div>
	      				<div class="col-7">
	      					{{ ucwords($eleve->lieunais) }}
	      				</div>
	      			</div>
	      			<div class="row">
	      				<div class="col-5">
	      					Matricule :
	      				</div>
	      				<div class="col-7">
	      					{{ $eleve->matricule }}
	      				</div>
	      			</div>
	      			<div class="row">
	      				<div class="col-5">
	      					Classe :
	      				</div>
	      				<div class="col-7">
	      					{{ $eleve->classe->libClasse }}
	      				</div>
	      			</div>
				</div>
				<div class="col-md-2">
					<img src="/images/eleves/{{ $eleve->photo }}" style="width:140px; height:150px; top:10px; left:10px; border-radius:20%">
				</div>
			</div>

			
		</div>
		<div class="card-footer">
			<a href="/eleve/{{$eleve->id}}/edit" class="btn btn-primary">See Profile</a>
		</div>
	</div>		
</div>

@endsection