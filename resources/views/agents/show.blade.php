@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
       
        <div class="card-header bg-secondary text-white">
            <div class="row">
                <div class="col-2">
                    <h3>Modification</h3>
                </div>
                <div class="col-2 text-right">
                    <a href="/agents/{{$agent->id}}/edit" class="btn btn-info">Modifier</a>
                </div> 
                <div class="col-2">
                    <form action="{{ url('pdf') }}" method="post" target="__BLANK">
                        @METHOD('POST')
                        @csrf
                        
                        <input type="hidden" name="id" value=" {{$agent->id}} ">
                        <button class="btn btn-warning" type="submit" name="submit">Exercice</button>
                    </form>
                </div>
                <div class="col-2">
                    <form action="{{ url('/absence') }}" method="post" target="__BLANK">
                        @METHOD('POST')
                        @csrf
                        
                        <input type="hidden" name="id" value=" {{$agent->id}} ">
                        <button class="btn btn-warning" type="submit" name="submit">Absence</button>
                    </form>
                    
                </div>
                <div class="col-2">
                    <form action="{{ url('/absence') }}" method="post" target="__BLANK">
                        @METHOD('POST')
                        @csrf
                        
                        <input type="hidden" name="id" value=" {{$agent->id}} ">
                        <button class="btn btn-warning" type="submit" name="submit">Imputation</button>
                    </form>
                    
                </div>
                <div class="col-2">
                    <form action="{{ url('/consultation') }}" method="post" target="__BLANK">
                        @METHOD('POST')
                        @csrf
                        
                        <input type="hidden" name="id" value=" {{$agent->id}} ">
                        <button class="btn btn-warning" type="submit" name="submit">Conation</button>
                    </form>
                    
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
                                {{ Form::label('prenoms', $agent->prenoms, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('nom', 'Nom') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::label('nom', $agent->nom, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('datnais', 'né(e) le') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::label('datnais', $agent->datnais, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('lieunais', 'à') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::label('lieunais', $agent->lieunais, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('matricule', 'Matricule') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::label('matricule', $agent->matricule, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    
            </div>
            
            <div class="col-6">
                <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('corps', 'Corps') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::label('corps', $agent->corps, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('grade', 'Grade') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::label('grade', $agent->grade, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('fonction', 'Fonction') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::label('fonction', $agent->fonction, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('discipline', 'Discipline') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::label('discipline', $agent->discipline, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('phone', 'Téléphone') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::label('phone', $agent->phone, ['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-right">
                            {{ Form::label('email', 'Email') }}
                        </div>
                        <div class="col-md-8">
                                {{ Form::label('email', $agent->email, ['class' => 'form-control']) }}
                        </div>
                </div>
            </div>
        </div>
            
                
            </div>
            <div class="card-footer bg-secondary text-white">
                <div class="form-group row">
                        <div class="col-md-8 text-right">
                           120
                        </div>
                        <div class="col-md-2">
                            121
                        </div>
                        <div class="col-md-2">
                              122  
                        </div>
                </div>
               
            </div>
        </div>
    </div>
@stop