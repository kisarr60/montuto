@extends('back.layout')

@section('main')
<div class="container">
	<div class="card">
		{!! Form::open(['action' => 'Back\ClassesController@store', 'method' => 'post']) !!}
  		<div class="card-header bg-secondary text-white">
			  <h1>Ajouter une classe</h1>
		</div>
		<div class="card-body">
		<div class="row">
			<div class="col-6">
				
					<div class="form-group row">
						<div class="col-md-4 text-right">
				    		{{ Form::label('refClasse', 'Référence') }}
				    	</div>
					    <div class="col-md-8">
					     		{{ Form::text('refClasse', null, ['class' => 'form-control']) }}
					    </div>
					</div>
					<div class="form-group row">
						<div class="col-md-4 text-right">
				    		{{ Form::label('libClasse', 'Dénomination') }}
				    	</div>
					    <div class="col-md-8">
					     		{{ Form::text('libClasse', null, ['class' => 'form-control']) }}
					    </div>
					</div>
					<div class="form-group row">
						<div class="col-md-4 text-right">
				    		{{ Form::label('local', 'Emplacement') }}
				    	</div>
					    <div class="col-md-8">
					     		{{ Form::text('local', null, ['class' => 'form-control']) }}
					    </div>
					</div>
					
			</div>
			<div class="col-6">
				<div class="form-group row">
						<div class="col-md-4 text-right">
				    		{{ Form::label('salle_id', 'Salle') }}
				    	</div>
					    <div class="col-md-8">
					     		{{ Form::select('salle_id', $salles, null, ['class' => 'form-control']) }}
					    </div>
					</div>
					<div class="form-group row">
						<div class="col-md-4 text-right">
				    		{{ Form::label('professeur_id', 'Prof principal') }}
				    	</div>
					    <div class="col-md-8">
					     		{{ Form::select('professeur_id', $professeurs, null, ['class' => 'form-control']) }}
					    </div>
					</div>
					<div class="form-group row">
						<div class="col-md-4 text-right">
				    		{{ Form::label('surveillant_id', 'Surveillant') }}
				    	</div>
					    <div class="col-md-8">
					     		{{ Form::select('surveillant_id', $surveillants, null, ['class' => 'form-control']) }}
					    </div>
					</div>
			</div>
		</div>
			
				
			</div>
			<div class="card-footer bg-secondary text-white">
				<div class="form-group row">
						<div class="col-md-10 text-right">
				    		{{Form::hidden('_method', 'POST')}}
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