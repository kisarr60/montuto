@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        {!! Form::model($agent, ['action' => ['AgentController@update', $agent->id], 'method' => 'post', 'files' => true]) !!}
        <div class="card-header bg-secondary text-white">
            <div class="row">
                <div class="col-4">
                    <h1>Modification</h1>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ url('/') }}" class="btn btn-warning">Annuler</a>
                </div> 
                <div class="col-4">
                    {{ Form::submit('Enregistrer', ['class' => 'text-left btn btn-primary']) }}
                </div>
                      
            </div>
              
        </div>
        <div class="card-body">
        <div class="row">
            <div class="col-6">
                
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('prenoms', 'Prénoms') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::text('prenoms', $agent->prenoms, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('nom', 'Nom') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::text('nom', $agent->nom, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('datnais', 'né(e) le') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::text('datnais', $agent->datnais, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('lieunais', 'à') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::text('lieunais', $agent->lieunais, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('matricule', 'Matricule') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::text('matricule', $agent->matricule, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    
            </div>
            
            <div class="col-6">
                <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('corps', 'Corps') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::text('corps', $agent->corps, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('grade', 'Grade') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::text('grade', $agent->grade, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('fonction', 'Fonction') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::text('fonction', $agent->fonction, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('discipline', 'Discipline') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::text('discipline', $agent->discipline, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('phone', 'Téléphone') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::text('phone', $agent->phone, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('email', 'Email') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::text('email', $agent->email, ['class' => 'form-control']) }}
                        </div>
                </div>
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