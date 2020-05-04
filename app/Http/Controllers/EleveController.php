<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eleve;

class EleveController extends Controller
{

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
