<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Candidat;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CandidatExport;
use App\Imports\CandidatImport;



class CandidatController extends Controller
{
    public function index()
    {
     $data = DB::table('candidats')->orderBy('id', 'ASC')->paginate(15);
     return view('candidats.index', compact('data'));
    }

    public function export()
    {
        return Excel::download(new CandidatExport(), 'mescandidats.xlsx');
    }

    public function import(Request $request)
    {
    	$this->validate($request, [
          'select_file'  => 'required|mimes:xls,xlsx'
        ]);

        if($request->file('select_file')){
      
            $eleves = Excel::import(new CandidatImport(), request()->file('select_file'));
        return back()->with('success', 'All good!');

    	}
	}

     public function maj_candidats(Request $request)
    {
    	$this->validate($request, [
          'select_file'  => 'required|mimes:xls,xlsx'
        ]);

        if($request->file('select_file')){
      
            $candidats = Excel::toCollection(new CandidatImport(), request()->file('select_file'));
                foreach ($candidats[0] as $eleve) {
                Candidat::where('id', $eleve[0])->update([
                	'num'		=>	$eleve[1],
			    	'ano1'		=>	$eleve[2],
			    	'ano2'		=>	$eleve[3],
			    	'nom'		=>	$eleve[4],
			    	'prenom'	=>	$eleve[5],
			    	'ne'		=>	$eleve[6],
			    	'lieu'		=>	$eleve[7],
			    	'eps'		=>	$eleve[8],
			    	'lv1'		=>	$eleve[9],
			    	'lv2'		=>	$eleve[10],
			    	'Eo'		=>	$eleve[11],
			    	'Ep'		=>	$eleve[12],
			    	'Ef'		=>	$eleve[13],
			    	'sexe'		=>	$eleve[14]
			    	]);
                    
                }
                return back()->with('success', 'Données mises à jour');
        }
    }

}