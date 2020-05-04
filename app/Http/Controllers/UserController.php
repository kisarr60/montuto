<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Parametre;
use App\User;
use App\Classe;
use PDF;
use DB;
use Auth;
use Image;

class UserController extends Controller
{

    protected $laclasse;

    public function index(Request $request) {

        $parametres = Parametre::where('id', 1)->first();

         $laclasse = $request['classe2'];

        $users = DB::table('eleves')
           
            
            ->select('eleves.*')
            ->where('classe', '=', $laclasse)
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
        $laclasse2 = $request['classe2']; //$request['classe']
        $matricule2 = $request['var2'];

        if($request->view_type === 'download') {

        $user = DB::table('eleves')
            ->where('classe', '=', $laclasse)
            ->orderBy('eleves.last_name', 'ASC')
            ->first();
         $view = View('users.report', ['user' => $user, 'parametres' => $parametres , 'laclasse' => $laclasse2]);
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view->render());
            return $pdf->stream();
        /*    $pdf = PDF::loadView('users.report', ['user' => $user, 'parametres' => $parametres, 'laclasse' => $laclasse]);
            return $pdf->stream();*/
        } else {

            $users = DB::table('eleves')
            ->where('classe', '=', $laclasse2)
            ->orderBy('eleves.last_name', 'ASC')
            ->get();

            $view = View('users.report2', ['users' => $users, 'parametres' => $parametres , 'laclasse' => $laclasse2]);
            $pdf = \App::make('dompdf.wrapper');
            $pdf->loadHTML($view->render());
            return $pdf->stream();
        }
    }

    public function profile(){
        return view('profile', array('user' => Auth::user()) );
    }

    public function update_avatar(Request $request){

        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('profile', array('user' => Auth::user()) );

    }
}