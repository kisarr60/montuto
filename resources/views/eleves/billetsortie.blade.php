<!DOCTYPE html PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Billet de sortie |{{ $user->prenoms }} {{ $user->nom }}</title>
  <link href="{{ base_path('public/css/style.css') }}" rel="stylesheet" type="text/css" />
  

  <style>

.box {
  float: left;
  width: 50%;
  padding: 1px;
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
   
        <div class="row"> 
                <div class="col-md-12" style="text-align: center;">
                  <img style="height: 40px" src="/home/ahoune/montuto/public/images/men2.jpg" alt="123">
                    <h6>Ministère de l'Education nationale</h6>
                    <h6>Inspection d'Académie de {{ $parametres->academie }}</h6>
                    <h6>I.E.F. {{ $parametres->ief }}</h6>
                    <h5>{{ $parametres->etablissement }}</h5>
                </div>
        </div>
        <!-- <div style="text-align: right;"> N° ____________/CEM-AS/B1/Z</div>-->
    <div style="background: #ccc"><h2 style="padding-top: 10px; text-align: center ">Billet de sortie</h2></div>
    <div>
    {{ $user->sexe == "M" ? 'Monsieur ' : 'Mademoiselle ' }}<b>{{ $user->prenoms }} {{ $user->nom }}</b>, {{ $user->sexe == "M" ? 'né ' : 'née ' }} le {{ changeDateFormate($user->datnais, 'd/m/Y') }} à {{ ucwords($user->lieunais) }}, élève en classe de {{ $user->Classe->libClasse }},
    </div>
  
      <p>{{ $user->sexe == "M" ? 'est autorisé' : 'est autorisée ' }} à s'absenter du _____/____/_____ à ____________ &nbsp &nbsp &nbsp &nbsp au _____/____/_____ à ____________</p>
    
     <table style="width: 100%; border: 1px solid black">
       <tr style="width: 100%; border: 1px solid black"><td>Motif :</td></tr>
      <tr><td>:</td></tr>
     </table>
<br>
<div class="clearfix">
  <div class="box" style="background-color:#fff">
  <p>Fait à Bignona le <?php echo date('d-m-Y'); ?></p>
  <b>Visa des parents :</b> <small>(Prénom, Nom et téléphone)</small>
  <p>_______________________________________________</p>
  Signature 

  </div>
  <div class="box" style="background-color:#fff; text-align: center; margin-left: 50px;">
  <p>Le Principal</p><br>
  <p>{{ EnvatoUser::get_principal() }}</p>
  </div>
 
</div>
<br><br><br><br><br><br>

<hr>
<br>
 <div class="row"> 
                <div class="col-md-12" style="text-align: center;">
                  <img style="height: 40px" src="/home/ahoune/montuto/public/images/men2.jpg" alt="123">
                    <h6>Ministère de l'Education nationale</h6>
                    <h6>Inspection d'Académie de {{ $parametres->academie }}</h6>
                    <h6>I.E.F. {{ $parametres->ief }}</h6>
                    <h5>{{ $parametres->etablissement }}</h5>
                </div>
        </div>
        <!-- <div style="text-align: right;"> N° ____________/CEM-AS/B1/Z</div>-->
    <div style="background: #ccc"><h2 style="padding-top: 10px; text-align: center ">Billet de sortie</h2></div>
    <div>
    {{ $user->sexe == "M" ? 'Monsieur ' : 'Mademoiselle ' }}<b>{{ $user->prenoms }} {{ $user->nom }}</b>, {{ $user->sexe == "M" ? 'né ' : 'née ' }} le {{ changeDateFormate($user->datnais, 'd/m/Y') }} à {{ ucwords($user->lieunais) }}, élève en classe de {{ $user->Classe->libClasse }},
    </div>
  
      <p>{{ $user->sexe == "M" ? 'est autorisé' : 'est autorisée ' }} à s'absenter du _____/____/_____ à ____________ &nbsp &nbsp &nbsp &nbsp au _____/____/_____ à ____________</p>
    
     <table style="width: 100%; border: 1px solid black">
      <tr><td>Motif :</td></tr>
      <tr><td>:</td></tr>
     </table>
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
            
       
                
       
    
