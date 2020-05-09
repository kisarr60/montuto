@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        {!! Form::model($eleve, ['action' => ['EleveController@update', $eleve->id], 'method' => 'post', 'files' => true]) !!}
        <div class="card-header bg-secondary text-white">
            <div class="row">
                <div class="col-4">
                    <h1>Modification</h1>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ url('eleve') }}"><button class="btn btn-warning">Annuler</button></a>
                </div> 
                <div class="col-4">
                    {{ Form::submit('Enregistrer', ['class' => 'text-left btn btn-primary']) }}
                </div>
                      
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
                                {{ Form::text('prenoms', $eleve->prenoms, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('nom', 'Nom') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::text('nom', $eleve->nom, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('datenais', 'Date de naissance') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::date('datnais', $eleve->datnais, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('lieunais', 'Lieu de naissance') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::text('lieunais', $eleve->lieunais, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('sexe', 'Sexe') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::select('sexe',['M'=>'Mascilin', 'F' =>'Féminin'], $eleve->sexe,['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('matricule', 'Matricule') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::text('matricule', $eleve->matricule, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('classe_id', 'Classe') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::select('classe_id', $classes, $eleve->classe_id, ['class' => 'form-control']) }}
                        </div>
                    </div>
            </div>
            <div class="col-5">
                <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('prenomPere', 'Prénoms du père') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::text('prenomPere', $eleve->prenomPere, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('prenomNomMere', 'Nom de la mère') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::text('prenomNomMere', $eleve->prenomNomMere, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('tuteur', 'Tuteur') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::text('tuteur', $eleve->tuteur, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('contact', 'Contact') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::text('contact', $eleve->contact, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('adresse', 'Adresse') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::text('adresse', $eleve->adresse,['class' => 'form-control']) }}
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('photo', 'Modifier la photo') }}
                        </div>
                        <div class="col-md-8">
                            {{Form::file('photo',['class' => 'form-group'],)}}
                        </div>
                    </div>
            </div>
            <div class="col-2">
                <div class="text-center"><h2>Photo</h2></div>
                <img src="/uploads/eleves/{{ $eleve->photo }}" style="width:140px; height:150px; top:10px; left:10px; border-radius:50%">
            </div>
        </div>
            
                
            </div>
            <div class="card-footer bg-secondary text-white">
                <div class="form-group row">
                        <div class="col-md-8 text-right">
                            {{Form::hidden('_method', 'PUT')}}
                        </div>
                        <div class="col-md-2">
                            
                        </div>
                        <div class="col-md-2">
                                
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop