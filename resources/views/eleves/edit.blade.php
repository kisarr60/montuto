@extends('layouts.app')

@section('content')
	<div class="container">
	
		    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Modification d'un élève</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('eleve.update', $eleve->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="field">
                        <label class="label">Prénoms</label>
                        <div class="control">
                          <input class="input @error('prenoms') is-danger @enderror" type="text" name="prenoms" value="{{ old('prenoms', $eleve->prenoms) }}" placeholder="Titre du film">
                        </div>
                        @error('title')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">Nom</label>
                        <div class="control">
                          <input class="input" type="text" name="nom" value="{{ old('nom', $eleve->nom)}}">
                        </div>
                        @error('nom')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">Date de naisssance</label>
                        <div class="control">
                            <input class="input" type="date" name="datnais" value="{{ old('datnais', $eleve->datnais)}}">
                        </div>
                        @error('datnais')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">Lieu de naissance</label>
                        <div class="control">
                          <input class="input" type="text" name="lieunais" value="{{ old('lieunais', $eleve->lieunais)}}">
                        </div>
                        @error('lieunais')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">Sexe</label>
                        <div class="control">
                          <input class="input" type="text" name="sexe" value="{{ old('sexe', $eleve->sexe)}}">
                        </div>
                        @error('sexe')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">matricule</label>
                        <div class="control">
                          <input class="input" type="text" name="matricule" value="{{ old('matricule', $eleve->matricule)}}">
                        </div>
                        @error('matricule')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <div class="control">
                          <button class="button is-link">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

	</div>


	<div class="well">
 
    {!! Form::open(['url' => '', 'class' => 'form-horizontal']) !!}
 
    <fieldset>
 
        <legend>Legend</legend>
 
        <!-- Email -->
        <div class="form-group">
            {!! Form::label('email', 'Email:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
            </div>
        </div>
        <!-- Password -->
        <div class="form-group">
            {!! Form::label('password', 'Password:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::password('password',['class' => 'form-control', 'placeholder' => 'Password', 'type' => 'password']) !!}
                <div class="checkbox">
                    {!! Form::label('checkbox', 'Checkbox') !!}
                    {!! Form::checkbox('checkbox') !!}
                </div>
            </div>
        </div>
@stop