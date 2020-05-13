<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Parametre;
use App\Eleve;
use App\Classe;
use Image;

class EleveController extends Controller
{
    public function pdfeleves(Request $request)
    {

        $parametres = Parametre::where('id', 1)->first();

        $profs = DB::table('liste3')
            ->orderBy('Prenom', 'ASC')
            ->orderBy('Nom', 'ASC')
            ->get();
         $view = View('eleves.infocandidats', ['profs' => $profs, 'parametres' => $parametres]);
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view->render());
            return $pdf->stream(); 
    }

    public function voir(Request $request)
    {
        $eleves = Eleve::where('classe_id', $request['classe'])
            ->paginate(25);
        return view('eleves.index', compact('eleves'));
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $eleves = Eleve::orderBy('eleves.id', 'ASC')
            ->paginate(25);


        //$eleves = Eleve::orderBy('student_name', 'ASC')->paginate(20);

        return view('eleves.index', compact('eleves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Eleve $eleve)
    {
        //$classe = Classe::find($eleve->classe_id);
       //return dd($eleve);
       return view('eleves.show', compact('eleve'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Eleve $eleve)
    {
        $classes = Classe::pluck('libClasse','id');
       //return dd($eleve);
       return view('eleves/edit', compact('eleve', 'classes'));
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

            'prenoms' =>  'required',
            'nom' =>  'required'
       ]);

        $eleve = Eleve::find($id);

        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $filename = time().'_'. $eleve->id.'_'. '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->resize(300, 300)->save( public_path('/uploads/eleves/' . $filename ) );
        
        $eleve->prenoms = $request->input('prenoms');
        $eleve->nom = $request->input('nom');
        $eleve->datnais = $request->input('datnais');
        $eleve->lieunais = $request->input('lieunais');
        $eleve->matricule = $request->input('matricule');
        $eleve->classe_id = $request->input('classe_id');
        $eleve->prenomPere = $request->input('prenomPere');
        $eleve->prenomNomMere = $request->input('prenomNomMere');
        $eleve->tuteur = $request->input('tuteur');
        $eleve->contact = $request->input('contact');
        $eleve->adresse = $request->input('adresse');
        $eleve->photo = $filename;
        $eleve->save();
        }
        $eleve->prenoms = $request->input('prenoms');
        $eleve->nom = $request->input('nom');
        $eleve->datnais = $request->input('datnais');
        $eleve->lieunais = $request->input('lieunais');
        $eleve->matricule = $request->input('matricule');
        $eleve->classe_id = $request->input('classe_id');
        $eleve->prenomPere = $request->input('prenomPere');
        $eleve->prenomNomMere = $request->input('prenomNomMere');
        $eleve->tuteur = $request->input('tuteur');
        $eleve->contact = $request->input('contact');
        $eleve->adresse = $request->input('adresse');
        
        $eleve->save();


        return redirect('/eleve')->with('success', 'Données de  <span class="badge badge-secondary badge-pill">'. $eleve->prenoms . ' ' . $eleve->nom .'</span> ont été mises à jour avec succès.');
    
    
    
    
    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function export()
    {
        return 'Export';
    }

    public function import()
    {
        return 'import';
    }
}
