@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <ul class="pt-5">
               
                    <a class="btn btn-primary d-block" href="{{ url('users/report/download') }}">Download PDF</a>
                <hr>
                    <a class="btn btn-warning d-block" href="{{ url('users/report/view') }}">view PDF</a>
                 <hr>
                 <form method="GET" action="{{ url('users/report/view') }}">
                    @csrf
                        <input type="text" name="var2" value="">    

                      <select type="text" name="classe2">
                          <optgroup>
                              <option value="3è MA">3A</option>
                              <option value="3 MB">3B</option>
                              <option value="3 MC">3C</option>
                              <option value="3 MD">3D</option>
                              <option value="4 MA">4A</option>
                              <option value="4 MB">4B</option>
                          </optgroup>
                      </select>
                      <button type="submit" class="btn btn-info d-block">Voir la liste</button>
                 </form>
                 <form method="GET" action="{{ url('users/report/download') }}" target="__BLANK">
                    @csrf
                        <input type="text" name="var" value="">    

                      <select type="text" name="classe">
                          <optgroup>
                              <option value="3 MA">3A</option>
                              <option value="3 MB">3B</option>
                              <option value="3 MC">3C</option>
                              <option value="3 MD">3D</option>
                              <option value="4 MA">4A</option>
                              <option value="4 MB">4B</option>
                          </optgroup>
                      </select>
                      <button type="submit" class="btn btn-info d-block">Télécharger</button>
                 </form>
                   
                    
                
            </ul>
            
            
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-striped">
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                </tr>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                </tr>
                @endforeach
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection