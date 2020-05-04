@extends('layouts.app')

@section('content')
<div class="container">
	<div class="card">
		{!! Form::model($classe, ['action' => ['ClasseController@update', $classe->id], 'method' => 'post']) !!}
  		<div class="card-header bg-secondary text-white">
			  <h1>Mise à jour de la classe : {{$classe->libClasse}}</h1>
		</div>
		<div class="card-body">
		<div class="row">
			<div class="col-6">
				
					<div class="form-group row">
						<div class="col-md-4 text-right">
				    		{{ Form::label('refClasse', 'Référence') }}
				    	</div>
					    <div class="col-md-8">
					     		{{ Form::text('refClasse', $classe->refClasse, ['class' => 'form-control']) }}
					    </div>
					</div>
					<div class="form-group row">
						<div class="col-md-4 text-right">
				    		{{ Form::label('libClasse', 'Dénomination') }}
				    	</div>
					    <div class="col-md-8">
					     		{{ Form::text('libClasse', $classe->libClasse, ['class' => 'form-control']) }}
					    </div>
					</div>
					<div class="form-group row">
						<div class="col-md-4 text-right">
				    		{{ Form::label('responsable_id', 'Responsable') }}
				    	</div>
					    <div class="col-md-8">
					     		{{ Form::select('responsable_id', $responsables, $classe->responsable_id, ['class' => 'form-control']) }}
					    </div>
					</div>
					
			</div>
			<div class="col-6">
				<div class="form-group row">
						<div class="col-md-4 text-right">
				    		{{ Form::label('salle_id', 'Salle') }}
				    	</div>
					    <div class="col-md-8">
					     		{{ Form::select('salle_id', $salles,  $classe->salle_id, ['class' => 'form-control']) }}
					    </div>
					</div>
					<div class="form-group row">
						<div class="col-md-4 text-right">
				    		{{ Form::label('professeur_id', 'Prof principal') }}
				    	</div>
					    <div class="col-md-8">
					     		{{ Form::select('professeur_id', $professeurs,  $classe->professeur_id, ['class' => 'form-control']) }}
					    </div>
					</div>
					<div class="form-group row">
						<div class="col-md-4 text-right">
				    		{{ Form::label('surveillant_id', 'Surveillant') }}
				    	</div>
					    <div class="col-md-8">
					     		{{ Form::select('surveillant_id', $surveillants, $classe->surveillant_id, ['class' => 'form-control']) }}
					    </div>
					</div>
			</div>
		</div>
			
				
			</div>
			<div class="card-footer bg-secondary text-white">
				<div class="form-group row">
						<div class="col-md-10 text-right">
				    		{{Form::hidden('_method', 'PUT')}}
				    	</div>
					    <div class="col-md-2">
					     		{{ Form::submit('Enregistrer', ['class' => 'form-control btn btn-primary']) }}
					    </div>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@stop