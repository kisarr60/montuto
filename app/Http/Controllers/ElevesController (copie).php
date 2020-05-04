<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eleve;
use App\Parametre;
use Illuminate\Support\Facades\DB;



class ElevesController extends Controller
{
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
    public function show($id)
    {
       $eleve = Eleve::findOrFail($id);
       //return dd($eleve);
       return view('eleves.show', ['eleve'=>$eleve]);
    }

    public function certif(Request $request)
    {

//return dd($request);
        $parametres = Parametre::where('id', 1)->first();

       // $laclasse = $request['classe']; //$request['classe']
        $matricule = $request['var'];
     
        $user = Eleve::where('matricule', $matricule)->first();
         $view = View('eleves.certif', ['user' => $user, 'parametres' => $parametres ]);
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view->render());
            return $pdf->stream();
        /*    $pdf = PDF::loadView('users.report', ['user' => $user, 'parametres' => $parametres, 'laclasse' => $laclasse]);
            return $pdf->stream();*/
        
    }

    public function billetsortie(Request $request)
    {

//return dd($request);
        $parametres = Parametre::where('id', 1)->first();

       // $laclasse = $request['classe']; //$request['classe']
        $matricule = $request['var'];
        $customPaper = array(0,0,720,1440);
        $user = Eleve::where('matricule', $matricule)->first();
         $view = View('eleves.billetsortie', ['user' => $user, 'parametres' => $parametres, ]);
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view->render());
            return $pdf->stream();
        /*    $pdf = PDF::loadView('users.report', ['user' => $user, 'parametres' => $parametres, 'laclasse' => $laclasse]);
            return $pdf->stream();

$center_detail = Center::where('center_code','=',Auth::user()->code)->first();
$pdf = PDF::loadView('Center.View_downlad', compact('view','center_detail'))->setPaper('a4', 'landscape');
        */
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $eleve = Eleve::find($id); 
       //return dd($eleve);
       return view('eleves/edit', compact('eleve'));
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
        //
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
}
