<!DOCTYPE html PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Certificat de scolarité |{{ $user->prenoms }} {{ $user->nom }}</title>
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
.certif {
  padding-top: 10px;
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
                    <h5>Inspection de l'Education et de la Formation de {{ $parametres->ief }}</h5>
                    <h3> {{ $parametres->etablissement }} </h3>
                    <hr>
                    <h6>Téléphone : {{ $parametres->phone }} - Email : {{ $parametres->email }}</h6>
                </td>
                </tr>
         </table>
         <hr>

        <!-- <div style="text-align: right;"> N° ____________/CEM-AS/B1/Z</div>-->
    <div style="background: #ccc"><h1 style="padding-top: 10px; text-align: center ">Certificat de scolarité</h1></div>
  <br>
    <div class="mt-4">
    <p>Je soussigné<b> {{ $parametres->cetab }}</b>, principal du {{ $parametres->etablissement }}, atteste que l'élève : </p>
    </div>
    <hr>
        <table style="width: 90%; text-align: left; padding-left: 10%;">
            <tr class="certif">
                <th style="text-align: left;">Prénom</th>
                <td>{{ $user->prenoms }}</td>
            </tr>
            <tr class="certif">
                <th style="width: 40%; text-align: left;">Nom</th>
                <td style="width: 60%; text-align: left;">{{ $user->nom }}</td>
            </tr>
            <tr class="certif">
                <th style="text-align: left;">Date et lieu de naissance</th>
                <td>{{ changeDateFormate($user->datnais, 'd/m/Y') }} à {{ ucwords($user->lieunais) }} </td>
            </tr>
           
            <tr class="certif">
                <th style="text-align: left;">Sexe</th>
                <td>{{ $user->sexe == "M" ? 'Masculin' : 'Féminin' }}</td>
            </tr>
            
            <tr class="certif">
                <th style="text-align: left;">{{ $user->sexe == "M" ? 'Fils de ' : 'Fille de' }}</th>
                <td>{{ $user->prenomPere }} et de {{ $user->prenomNomMere }}</td>
            </tr>
        </table>
            <hr>
      <p>{{ $user->sexe == "M" ? 'est inscrit' : 'est inscrite' }} au collège durant l'année scolaire <b> {{ $parametres->anscolaire }}</b>, en classe de <b>{{ $user->Classe->libClasse }}</b>, sous le matricule <b>{{$user->matricule}}</b>  </p>
    
      <p>Le présent certificat de scolarité est délivré pour servir et valoir ce que de droit.</p>
<br>
<div class="clearfix">
  <div class="box" style="background-color:#fff">
  <p>Fait à Bignona le <?php echo date('d-m-Y'); ?></p>
 
  </div>
  <div class="box" style="background-color:#fff; text-align: center; margin-left: 50px;">
  <p>Le Principal</p><br>
  <p>{{ EnvatoUser::get_principal() }}</p>
  </div>
 
</div>

</body>
</html>
            
       
                
       
    
