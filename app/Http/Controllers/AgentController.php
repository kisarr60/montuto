<?php

namespace App\Http\Controllers;

use App\Agent;
use Illuminate\Http\Request;
use App\Parametre;
use DB;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profs = Agent::paginate(5);
       //dd($profs);
       
        return view('agents.index')->with('profs', $profs);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function show(Agent $agent)
    {
       return view('agents.show', compact('agent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit(Agent $agent)
    {

        return view('agents.edit', compact('agent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agent $agent)
    {
        dd($request);/*
         Agent::update()->where('id', $agent);
         return view('agents.show', compact('agent'));*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agent $agent)
    {
        //
    }

    public function pdfprofs(Request $request)
    {
        //dd($request);

        $parametres = Parametre::where('id', 1)->first();

        $profs = DB::table('agents')
            ->orderBy('discipline', 'ASC')
            ->orderBy('nom', 'ASC')
            ->orderBy('prenoms', 'ASC')
            ->get();
         $view = View('agents.pdfprofs', ['profs' => $profs, 'parametres' => $parametres]);
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view->render());
            return $pdf->stream(); 
    }


    public function pdf(Request $request)
    {

        $id=$request['id'];
        $parametres = Parametre::where('id', 1)->first();

        $prof = DB::table('personnel')->where('id',$id)->first();
        //dd($request);
         $view = View('agents.pdf', ['prof' => $prof, 'parametres' => $parametres]);
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view->render());
            return $pdf->stream(); 
    }

    public function absence(Request $request)
    {
        $id=$request['id'];
        $parametres = Parametre::where('id', 1)->first();

        $prof = DB::table('personnel')->where('id',$id)->first();
        //dd($request);
         $view = View('agents.absence', ['prof' => $prof, 'parametres' => $parametres]);
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view->render());
            return $pdf->stream(); 
    }

    public function consultation(Request $request)
    {
        $id=$request['id'];
        $parametres = Parametre::where('id', 1)->first();

        $prof = DB::table('personnel')->where('id',$id)->first();
        //dd($request);
         $view = View('agents.consultation', ['prof' => $prof, 'parametres' => $parametres]);
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view->render());
            return $pdf->stream(); 
    }

    public function imputation(Request $request)
    {
        $id=$request['id'];
        $parametres = Parametre::where('id', 1)->first();

        $prof = DB::table('personnel')->where('id',$id)->first();
        //dd($request);
         $view = View('agents.imputation', ['prof' => $prof, 'parametres' => $parametres]);
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view->render());
            return $pdf->stream(); 
    }

}
