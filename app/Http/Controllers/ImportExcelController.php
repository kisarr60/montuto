<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Eleve;
use DB;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Imports\ElevesImport;
use App\Exports\EleveExport;


class ImportExcelController extends Controller
{
    function index()
    {
     $data = DB::table('eleves')->orderBy('matricule', 'ASC')->paginate(15);
     return view('import_excel', compact('data'));
    }

    

    public function import(Request $request) 
    {
        $this->validate($request, [
          'select_file'  => 'required|mimes:xls,xlsx'
        ]);

        if($request->file('select_file')){
      
            $eleves = Excel::import(new ElevesImport(), request()->file('select_file'));

            /* try{
                foreach ($eleves[0] as $eleve) {

                

                Eleve::where('id', $eleve[0])->update([

                    'prenoms'       => $eleve[1],
                    'nom'           => $eleve[2],
                    'datnais'       => $eleve[3],
                    'lieunais'      => $eleve[4],
                    'sexe'          => $eleve[5],
                    'matricule'     => $eleve[6],
                    'classe_id'     => $eleve[7],
                    'photo'         => $eleve[8],
                    'prenomPere'    => $eleve[9],
                    'prenomNomMere' => $eleve[10],
                    'tuteur'        => $eleve[11],
                    'contact'       => $eleve[12],
                    'adresse'       => $eleve[13],
                    ]);
                    return back()->with('success', 'All good!');
                }
                 
                }catch(\Exception $e){
                        return redirect()->back()
                        ->with(['errors'=>$e->getMessage()]);

                    }*/
                    return back()->with('success', 'All good!');
            }
        }
public function miseAjour(Request $request) {
        $this->validate($request, [
          'select_file'  => 'required|mimes:xls,xlsx'
        ]);

        if($request->file('select_file')){
      
            $eleves = Excel::toCollection(new ElevesImport(), request()->file('select_file'));
                foreach ($eleves[0] as $eleve) {
                Eleve::where('id', $eleve[0])->update([
                    'prenoms'       => $eleve[1],
                    'nom'           => $eleve[2],
                    'datnais'       => $eleve[3],
                    'lieunais'      => $eleve[4],
                    'sexe'          => $eleve[5],
                    'matricule'     => $eleve[6],
                    'classe_id'     => $eleve[7],
                    'photo'         => $eleve[8],
                    'prenomPere'    => $eleve[9],
                    'prenomNomMere' => $eleve[10],
                    'tuteur'        => $eleve[11],
                    'contact'       => $eleve[12],
                    'adresse'       => $eleve[13],
                    ]);
                    return back()->with('success', 'Données mises à jour');
                }
            }
        }


    public function export()
    {
        return Excel::download(new EleveExport(), 'meseleves.xlsx');
    }

}