<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Parametre;
use App\User;
use App\Classe;
use PDF;
use DB;

class UserController extends Controller
{

    protected $laclasse;

    public function index(Request $request) {

        $parametres = Parametre::where('id', 1)->first();

         $laclasse = $request['classe'];

        $users = DB::table('eleves')
           
            
            ->select('eleves.*')
            ->where('classe', '=', '3 MA')
            ->orderBy('eleves.last_name', 'ASC')
            ->get();

                return view('users.index',['users' => $users]);
            
        //return view('users.index',['users' => $users]);

    }
    
    public function report(Request $request)
    {

        $parametres = Parametre::where('id', 1)->first();

        $laclasse = $request['classe']; //$request['classe']
        $matricule = $request['var'];

        $users = DB::table('eleves')
            ->where('assurance', '=', $matricule)
            ->orderBy('eleves.last_name', 'ASC')
            ->get();

         
        if($request->view_type === 'download') {
            $pdf = PDF::loadView('users.report', ['users' => $users, 'parametres' => $parametres, 'laclasse' => $laclasse]);
            return $pdf->download('users.pdf');
        } else {
            $view = View('users.report', ['users' => $users, 'parametres' => $parametres , 'laclasse' => $laclasse]);
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view->render());
            return $pdf->stream();
        }
    }
}