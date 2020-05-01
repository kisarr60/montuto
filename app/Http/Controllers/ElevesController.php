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

        $eleves = DB::table('eleves')
    
            ->orderBy('eleves.id', 'ASC')
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

       return view('eleves.show', ['eleve'=>$eleve]);
    }

    public function certif(Request $request)
    {

        $parametres = Parametre::where('id', 1)->first();

        $laclasse = $request['classe']; //$request['classe']
        $matricule = $request['var'];
     
        $user = DB::table('eleves')
            ->where('classe', '=', $laclasse)
            ->where('assurance', '=', $matricule)
            ->first();
         $view = View('eleves.certif', ['user' => $user, 'parametres' => $parametres , 'laclasse' => $laclasse]);
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view->render());
            return $pdf->stream();
        /*    $pdf = PDF::loadView('users.report', ['user' => $user, 'parametres' => $parametres, 'laclasse' => $laclasse]);
            return $pdf->stream();*/
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
