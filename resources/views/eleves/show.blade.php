@extends('layouts.app')

@section('content')
<div class="container">
	<div class="card">
		<div class="card-header bg-secondary text-center text-white">
			<div class="row">
	      				<div class="col-6">
	      					<h3>Profil de {{ $eleve->prenoms }} {{ $eleve->nom }}</h3>
	      				</div>
	      				<div class="col-2">
	      					<form action="{{ url('eleves/certif') }}" method="post" target="__BLANK">
				      			@METHOD('post')
			    				@csrf
			    				<input type="hidden" name="classe" value=" {{$eleve->classe->libClasse}} ">
			    				<input type="hidden" name="var" value=" {{$eleve->matricule}} ">
			    				<button class="btn btn-primary" type="submit" name="submit">Certif de scolarité</button>
    						</form>
	      				</div>
	      				<div class="col-2">
	      					<form action="{{ url('eleves/billetsortie') }}" method="post" target="__BLANK">
				      			@METHOD('post')
			    				@csrf
			    				<input type="hidden" name="classe" value=" {{$eleve->classe->libClasse}} ">
			    				<input type="hidden" name="var" value=" {{$eleve->matricule}} ">
			    				<button class="btn btn-warning" type="submit" name="submit">Billet de sortie</button>
		    				</form>
	      				</div>
                        <div class="col-2"><a href="/eleve/{{$eleve->id}}/edit" class="btn btn-primary">Modifier</a></div>
	      			</div>
		</div>
		<div class="card-body">
			<div class="row">
            <div class="col-5">
                
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('prenoms', 'Prénoms') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::label('prenoms', $eleve->prenoms, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('nom', 'Nom') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::label('nom', $eleve->nom, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('datenais', 'Date de naissance') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::label('datnais', $eleve->datnais, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('lieunais', 'Lieu de naissance') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::label('lieunais', $eleve->lieunais, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('sexe', 'Sexe') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::label('sexe', $eleve->sexe,['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('matricule', 'Matricule') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::label('matricule', $eleve->matricule, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('classe_id', 'Classe') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::label('classe_id', $eleve->Classe->libClasse, ['class' => 'form-control']) }}
                        </div>
                    </div>
            </div>
            <div class="col-5">
                <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('prenomPere', 'Prénoms du père') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::label('prenomPere', $eleve->prenomPere, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('prenomNomMere', 'Nom de la mère') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::label('prenomNomMere', $eleve->prenomNomMere, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('tuteur', 'Tuteur') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::label('tuteur', $eleve->tuteur, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('contact', 'Contact') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::label('contact', $eleve->contact, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('adresse', 'Adresse') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::label('adresse', $eleve->adresse,['class' => 'form-control']) }}
                        </div>
                    </div>
                    
                   
            </div>
            <div class="col-2">
                <div class="text-center"><h2>Photo</h2></div>
                <img src="/uploads/eleves/{{ $eleve->photo }}" style="width:140px; height:150px; top:10px; left:10px; border-radius:50%">
            </div>
        </div>
		</div>
		<div class="card-footer bg-secondary">
			<div class="form-group pull-right">
    			
			</div>
			
		</div>
	</div>		
</div>

@endsection