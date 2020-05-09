@extends('layouts.master')
@section('content')
  <div class="container">

   @if($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
   <br />
   <div class="panel panel-default">
      <div class="row">
          <div class="col-3">
              <a href="{{ url('/import_excel/export')}}" class="btn btn-info">Export to XLSX</a>
          </div>
          <div class="col-9">
              <form method="post" enctype="multipart/form-data" action="{{ url('/import_excel') }}">
    {{ csrf_field() }}
    <div class="form-group">
     <table class="table">
      <tr>
       <td width="40%" align="right"><label>Choisir un fichier Excel à télécharger</label></td>
       <td width="30">
        <input type="file" name="select_file" />
       </td>
       <td width="30%" align="left">
        <input type="submit" name="upload" class="btn btn-primary" value="Upload">
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
        <th>MATRICULE</th>
       </tr>
       @foreach($data as $row)
       <tr>
        <td>{{ $row->prenoms }}</td>
        <td>{{ $row->nom }}</td>
        <td>{{ $row->datnais }}</td>
        <td>{{ $row->lieunais }}</td>
        <td>{{ $row->sexe }}</td>
        <td>{{ $row->matricule }}</td>
       </tr>
       @endforeach
      </table>
     </div>
    </div>
   </div>
  </div>
 @stop
