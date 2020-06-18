<!DOCTYPE html PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Liste des professeurs</title>
  <link href="{{ base_path('public/css/style.css') }}" rel="stylesheet" type="text/css" />
  

  <style>

.box {
  float: left;
  width: 50%;
  padding: 5px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
.table {
  border: 1px solid black;
  width: 100%;
}
.table td{
border-bottom: 1px solid black;
border-left: 1px solid black;
padding-bottom: 1px;}

.table th{
border-bottom: 1px solid black;
border-left: 1px solid black;
padding-bottom: 1px;
}
</style>
  </head>
  <body>
    <table style="width:100%;">
              <tr>
                <td style="text-align: center;">
                    <img style="height: 70px" src="/home/ahoune/montuto/public/images/men1.png" alt="123">
                </td>
              </tr>
        </table>
        <table>
              <tr>
                <td style="width:80%; text-align: center;">
                  <img style="height: 40px" src="/home/ahoune/montuto/public/images/men2.jpg" alt="123">
                    <h6>Ministère de l'Education nationale</h6>
                    <h6>Inspection d'Académie de {{ $parametres->academie }}</h6>
                    <h6>Inspection de l'Education et de la Formation de {{ $parametres->ief }}</h6>
                    <h5 style="border-bottom: 1px solid black; font-size: 1.2em"> {{ $parametres->etablissement }} </h5>
                    
                    <h6>Téléphone : {{ $parametres->phone }} - Email : {{ $parametres->email }}</h6>
                </td>
                </tr>
         </table>
    </div>
    <h3 style="padding-top: 10px; text-align: center ">Liste du personnel</h3>
    <table class="table">
      <tr>
        <th>#</th>
        <th>Prénoms</th>
        <th>Nom</th>
        <th>Matricule</th>
        <th>Corps-Grade</th>
        <th>Fonction</th>
        <th>Téléphone</th>
      </tr>
      @foreach($profs as $key => $prof)
        <tr>
          <td>{{ $key + 1 }}</td>
          <td>{{ $prof->prenoms }}</td>
          <td>{{ $prof->nom }}</td>
          <td>{{ $prof->matricule }}</td>
          <td>{{ $prof->corps }}{{ $prof->grade }}</td>
          <td>{{ substr($prof->fonction,0,4) }}-{{ $prof->discipline }}</td>
          <td>{{ $prof->phone }}</td>
        </tr>
      @endforeach
    </table>

<div class="clearfix">
  <div class="box" style="background-color:#fff">
  <p>Fait à Bignona le {{date('d-m-Y')}}</p>

  </div>
  <div class="box" style="background-color:#fff; text-align: center; margin-left: 50px;">
  <p>Le Principal</p><br>
  <p>{{ EnvatoUser::get_principal() }}</p>
  </div>
 
</div>

</body>
</html>
            
       