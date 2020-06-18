@extends('layouts.app')
@section('content')
  <div class="container">

   @if($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
   @if(session('errors'))
        @foreach($errors as $error)
          <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $error }}</strong>
          </div>
        @endforeach
   @endif
   <br />
   <div class="panel panel-default">
      <div class="row">
          <div class="col-1">
              <a href="{{ url('/lescandidats/export')}}" class="btn btn-info">Modèle</a>
          </div>
          <div class="col-6">
              <form method="post" enctype="multipart/form-data" action="{{ url('/lescandidats') }}">
                {{ csrf_field() }}
                <div class="form-group">
                 <table class="table">
                  <tr>
                   <td width="40%" align="right"><label>Choisir le fichier</label></td>
                   <td width="30%">
                    <input type="file" name="select_file" />
                   </td>
                   <td width="30%" align="left">
                    <input type="submit" name="upload" class="btn btn-primary" value="Télécharger">
                   </td>
                  </tr>
                  <tr>
                   <td width="40%" align="right"></td>
                   <td width="30"><span class="text-muted">fichiers autorisés : .xls, .xslx</span></td>
                   <td width="30%" align="left"></td>
                  </tr>
                 </table>
                </div>
            </form>
          </div>
          <div class="col-5">
              <form method="post" enctype="multipart/form-data" action="{{ url('/lescandidats') }}">
                {{ csrf_field() }}
                <div class="form-group">
                 <table class="table">
                  <tr>
                   <td width="40%" align="right"><label>fichier refondu</label></td>
                   <td width="30%">
                    <input type="file" name="select_file" />
                   </td>
                   <td width="30%" align="left">
                    <input type="submit" name="upload" class="btn btn-primary" value="Envoyer">
                   </td>
                  </tr>
                  <tr>
                   <td width="40%" align="right"></td>
                   <td width="30"><span class="text-muted">fichier autorisé :modèle mis à jour</span></td>
                   <td width="30%" align="left"></td>
                  </tr>
                 </table>
                </div>
            </form>
          </div>
          
      </div>
      </div>
    <div>
    <div class="text-center"> {{ $data->links() }} </div>
    <div class="panel-heading">
     <h3 class="panel-title">Customer Data</h3>
    </div>
    <div class="panel-body">
     <div class="table-responsive">
      <table class="table table-bordered table-striped">
       <tr>
        <th>PRENOMS</th>
        <th>NOM</th>
        <th>NE</th>
        <th>A</th>
        <th>SEXE</th>
        <th>ANO</th>
       </tr>
       @forelse($data as $row)
       <tr>
        <td>{{ $row->prenom }}</td>
        <td>{{ $row->nom }}</td>
        <td>{{ $row->ne }}</td>
        <td>{{ $row->lieu }}</td>
        <td>{{ $row->sexe }}</td>
        <td>{{ $row->num }}</td>
       </tr>
       @empty
       <tr>
        <td colspan="6" class="text-center"><h1>Pas de données</h1></td>
        </tr>
       @endforelse
      </table>
     </div>
    </div>
   </div>
  </div>
 @stop
