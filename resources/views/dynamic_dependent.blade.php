@extends('layouts.app')

@section('content')
  <div class="container box">
   <h3 align="center">Ajax Dynamic Dependent Dropdown in Laravel</h3><br />
   <div class="form-group">
    <select name="local" id="local" class="form-control input-lg dynamic" data-dependent="name">
     <option value="">Select Country</option>
     @foreach($country_list as $country)
     <option value="{{ $country->local}}">{{ $country->local }}</option>
     @endforeach
    </select>
   </div>
   <br />
   <div class="form-group">
    <select name="name" id="name" class="form-control input-lg dynamic" data-dependent="nbBancs">
     <option value="">Select State</option>
    </select>
   </div>
   <br />
   <div class="form-group">
    <select name="nbBancs" id="nbBancs" class="form-control input-lg">
     <option value="">Select City</option>
    </select>
   </div>
   {{ csrf_field() }}
   <br />
   <br />
  </div>

  
 
@stop