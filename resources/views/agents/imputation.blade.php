<!DOCTYPE html PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Autorisation |{{ $prof->prenoms }} {{ $prof->nom }}</title>
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
@page { margin: 20px 60px 10px 60px; }
    #header { position: fixed; left: 0px; top: -200px; right: 0px; height: 150px; background-color: orange; text-align: center; }
    #footer { position: fixed; left: 0px; bottom: -100px; right: 0px; height: 140px; background-color: white; }
    #footer .page:after { content: counter(page, upper-roman); }
</style>
  </head>
  <body>
   <div id="footer">
    <hr>
      <p style="text-align: center;">kis@rr - <?php echo date('d-m-Y H:i:s'); ?> </p>
  </div>
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
    <div style="background: #ccc"><h1 style="padding-top: 10px; text-align: center ">Bulletin de consultation</h1></div>
  <br>
    <div class="mt-4">
    <p>Je soussigné<b> {{ $parametres->cetab }}</b>, principal du {{ $parametres->etablissement }}, atteste que l'agent ci-dessous référencié : </p>
    </div>
    <hr>
        <table style="width: 90%; text-align: left; padding-left: 10%;">
            <tr class="certif">
                <th style="text-align: left;border-bottom: solid 1px;">Prénom</th>
                <td style="border-bottom: solid 1px;">{{ $prof->prenoms }}</td>

            </tr>
            <tr class="certif">
                <th style="border-bottom: solid 1px; width: 40%; text-align: left;">Nom</th>
                <td style="border-bottom: solid 1px;">{{ $prof->nom }}</td>
            </tr>
            <tr class="certif">
                <th style="border-bottom: solid 1px; text-align: left;">Date et lieu de naissance</th>
                <td style="border-bottom: solid 1px;">{{ $prof->datnais}} à {{ ucwords($prof->lieunais) }} </td>
            </tr>
           
            <tr class="certif">
                <th style="border-bottom: solid 1px; text-align: left;">Matricule</th>
                <td style="border-bottom: solid 1px;">{{ $prof->matricule }}</td>
            </tr>
            <tr class="certif">
                <th style="border-bottom: solid 1px;text-align: left;">Corps et Grade</th>
                <td style="border-bottom: solid 1px;">{{ $prof->corps }} {{ $prof->grade }}</td>
            </tr>
            <tr class="certif">
             
                <th style="text-align: left;">Numéro C.N.I</th>
                <td>{{ $prof->numCNI }}</td>
              
            </tr>
            
            
        </table>
            <hr>
      <p>est en exercice au collège durant l'année scolaire <b> {{ $parametres->anscolaire }}</b>{{ $prof->fonction === 'PROFESSEUR' ? ', comme professeur' : ', au service de la surveillance générale'}}.</p>
    
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
<script type="text/php">
    if ( isset($pdf) ) {
        // OLD 
        // $font = Font_Metrics::get_font("helvetica", "bold");
        // $pdf->page_text(72, 18, "{PAGE_NUM} of {PAGE_COUNT}", $font, 6, array(255,0,0));
        // v.0.7.0 and greater
        $x = 72;
        $y = 18;
        $text = "{PAGE_NUM} of {PAGE_COUNT}";
        $font = $fontMetrics->get_font("helvetica", "bold");
        $size = 16;
        $color = array(255,240,200);
        $word_space = 0.0;  //  default
        $char_space = 0.0;  //  default
        $angle = 0.0;   //  default
        $pdf->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);
    }
</script>
</body>
</html>
            
       
                
       
    
