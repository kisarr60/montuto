<!DOCTYPE html PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Certificat de scolarité |{{ $user->first_name }} {{ $user->last_name }}</title>
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
</style>
  </head>
  <body>
    <div style="height: 100px">
        <table style="width:100%; margin: 10px">
            
              <tr>
                <td>
                    <img style="height: 70px" src="/home/ahoune/essai/storage/app/public/images/tva.png" alt="123">
                </td>
                <td style="text-align: center;">
                    <h6>Ministère de l'Education nationale</h6>
                    <h6>Inspection d'Académie de {{ $parametres->academie }}</h6>
                    <h5>Inspection de l'Education et de la Formation de {{ $parametres->ief }}</h5>
                    <h3> {{ $parametres->etablissement }} </h3>
                    <hr>
                    <h6>Téléphone : {{ $parametres->phone }} - Email : {{ $parametres->email }}</h6>
                </td>
                <td style="text-align: right;"><h5>N° _______/CEM-AS/B1/Z</h5></td>
              </tr>
              <tr>
                  <td></td><td></td><td></td>
              </tr>
        </table>
    </div>
    <h1 style="padding-top: 30px; text-align: center ">Certificat de scolarité</h1>

    <!-- {!! $laclasse !!} -->
    <p>Je soussigné<b> {{ $parametres->cetab }}</b>, principal du {{ $parametres->etablissement }}, atteste que l'élève : </p>
    
    <hr>
                
                
                <table style="width: 90%; text-align: left; padding-left: 10%;">
                <tr>
                    <th style="text-align: left;">Prénom</th>
                    <td>{{ $user->first_name }}</td>
                </tr>
                <tr>
                    <th style="width: 40%; text-align: left;">Nom</th>
                    <td style="width: 60%; text-align: left;">{{ $user->last_name }}</td>
                </tr>
                <tr>
                    <th style="text-align: left;">Date et lieu de naissance</th>
                    <td>{{ $user->datnais }} à {{ $user->lieunais }} </td>
                </tr>
                <tr>
                    <th style="text-align: left;">Matricule</th>
                    <td>{{ $user->assurance }}</td>
                </tr>
                <tr>
                    <th style="text-align: left;">Sexe</th>
                    <td>{{ $user->sexe == "M" ? 'Masculin' : 'Féminin' }}</td>
                </tr>
                <tr>
                    <th style="text-align: left;">Classe</th>
                    <td>{{ $user->classe }}</td>
                </tr>
              
              

            </table>
            <hr>
      <p>{{ $user->sexe == "M" ? 'est inscrit' : 'est inscrite' }} au collège durant l'année scolaire <b> {{ $parametres->anscolaire }}</b></p>
    
      <p>Le prrésent certificat de scolarité est délivré pour servir et valoir ce que de droit.</p>
<br>
<div class="clearfix">
  <div class="box" style="background-color:#fff">
  <p>Fait à Bignona le <?php echo date('d-m-Y'); ?></p>
 <img style="width: 60%" src="{{ public_path('/images/ibousarr.png')}}" alt="123">
  </div>
  <div class="box" style="background-color:#fff; text-align: center; margin-left: 50px;">
  <p>Le Principal</p><br>
  <p>{{ EnvatoUser::get_principal() }}</p>
  </div>
 
</div>

</body>
</html>
            
       
                
       
    
