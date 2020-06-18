<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Classe;
use App\Salle;
use App\Eleve;

use DB;
use Html;
use Form;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Classe::paginate(4);
        
        return view('back.classes.index', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $salles = Salle::pluck('name','id');

        $surveillants = DB::table('personnel')->select("*"

        ,DB::raw("CONCAT(prenoms,' ',nom) as full_name"))
        ->where('fonction', '!=', 'PROFESSEUR')
        ->get()
        ->pluck('full_name', 'id');

        $professeurs = DB::table('personnel')->select("*"

        ,DB::raw("CONCAT(prenoms,' ',nom) as full_name"))
        ->where('fonction', '=', 'PROFESSEUR')
        ->get()
        ->pluck('full_name', 'id');


        return view('back.classes.create', compact('salles','surveillants', 'professeurs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, [

            'refClasse' =>  'required|integer|min:31|max:69',
            'libClasse' =>  'required',
            
       ]);

       $classe = new Classe;
       $classe->refClasse = $request->input('refClasse');
       $classe->libClasse = $request->input('libClasse');
       $classe->responsable_id = $request->input('responsable_id');
       $classe->salle_id = $request->input('salle_id');
       $classe->surveillant_id = $request->input('surveillant_id');
       $classe->professeur_id = $request->input('professeur_id');
       $classe->save();

       return redirect('/classes')->with('success', 'Nouvelle classe ('.$classe->libClasse.') enregistrée avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $classe = Classe::find($id);
      
        $r = Eleve::where('id', $classe->responsable_id)->first();
        if(is_null($r)) {
            $respons = ['prenoms' => 'Aucun', 'nom' => 'resposable']; 
        }else{
            $respons = $r;
        }
        
       //dd($respons);
        $surv = DB::table('personnel')->find($classe->surveillant_id);
        $profprinc = DB::table('personnel')->find($classe->professeur_id);
        $salle = Salle::find($classe->salle_id);
        //dd($salle);
        return view('classes.show', compact('classe', 'respons', 'surv','profprinc', 'salle'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $classe = Classe::find($id);
        $salles = Salle::pluck('name','id');
        $surveillants = DB::table('personnel')->select("*"
        ,DB::raw("CONCAT(prenoms,' ',nom) as full_name"))
        ->where('fonction', '!=', 'PROFESSEUR')
        ->get()
        ->pluck('full_name', 'id');

        $responsables = Eleve::select("*", DB::raw("CONCAT(prenoms,' ',nom) as full_name"))
        ->where('classe_id', $classe->id)
        ->get()
        ->pluck('full_name', 'id');

//dd($responsables);

        $professeurs = DB::table('personnel')->select("*"
        ,DB::raw("CONCAT(prenoms,' ',nom) as full_name"))
        ->where('fonction', '=', 'PROFESSEUR')
        ->get()
        ->pluck('full_name', 'id');

        return view('classes.edit', compact('classe', 'salles','professeurs', 'surveillants', 'responsables'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $this->validate($request, [

            'refClasse' =>  'required|integer',
            'libClasse' =>  'required'
       ]);

       $classe = Classe::find($id);
       $classe->refClasse = $request->input('refClasse');
       $classe->libClasse = $request->input('libClasse');
       $classe->responsable_id = $request->input('responsable_id');
       $classe->salle_id = $request->input('salle_id');
       $classe->professeur_id = $request->input('professeur_id');
       $classe->surveillant_id = $request->input('surveillant_id');
       $classe->save();

       return redirect('/classes')->with('success', 'Données de la classe n° <span class="badge badge-secondary badge-pill">'. $classe->id .'</span> mises à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   

        $classe = Classe::find($id);
        $classe->delete();

        return redirect('/classes')->with('success', 'La classe n° <span class="badge badge-secondary badge-pill">'. $classe->id .'</span> a été supprimée avec succès.');
        
    }
    
}
