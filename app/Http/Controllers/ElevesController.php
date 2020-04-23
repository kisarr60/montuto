<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eleve;
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
            ->join('classes', 'student_grade_id', '=', 'ClassePK')
            
            ->select('eleves.*', 'classes.libclasse')
            ->where('classes.libclasse', '=', '3è A')
            ->orderBy('eleves.student_name', 'ASC')
            ->get();


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
