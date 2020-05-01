<!DOCTYPE html PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Liste</title>
  <link href="{{ base_path('public/css/style.css') }}" rel="stylesheet" type="text/css" />
  

 <style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  font-size: 15px;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 4px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 2px;
  padding-bottom: 2px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
  </head>
  <body>
    <div style="height: 100px">
        <table style="width:100%; margin: 10px">
            
              <tr>
                <td style="text-align: center;">
                    <h6>Ministère de l'Education nationale</h6>
                    <h6>Inspection d'Académie de {{ $parametres->academie }}</h6>
                    <h5>Inspection de l'Education et de la Formation de {{ $parametres->ief }}</h5>
                    <h3> {{ $parametres->etablissement }} </h3>
                    <hr>
                    <h6>Téléphone : {{ $parametres->phone }} - Email : {{ $parametres->email }}</h6>
                </td>
              </tr>
        </table>
    </div>
    <div style="padding-top: 10px; text-align: left; ">Liste {{ $laclasse }}   |  {{ get_ElevesFille($laclasse)}} et  {{ get_ElevesGarcon($laclasse)}}</div>

    <!-- {!! $laclasse !!} -->
    
    <hr>
      <table id="customers">
          <tr style="background-color: #ccc">
            <th style="text-align: left;">#</th>
            <th style="text-align: left;">Prénoms</th>
            <th style="text-align: left;">Nom</th>
            <th style="text-align: left;">Date et lieu de naissance</th>
             <th style="text-align: left;">Sexe</th>
          </tr>
          @foreach($users as $key => $user)
          <tr>
            <td>{{$key+1}}</td>
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{\Carbon\Carbon::createFromFormat('Y-m-d',$user->datnais)->format('m/d/Y')}} à {{ ucwords(strtolower($user->lieunais))}} </td>
            <td>{{$user->sexe}}</td>
          </tr>
          @endforeach
      </table>
    <hr>
    <div><p>Le surveillant général</p></div>

</body>
</html>
            
       
                
       
    
