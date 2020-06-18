<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\ViewComposers\MenuComposer;
use App\Eleve;

class AdminController extends Controller
{
   public function index()
    {
        return view('back.index');
    }

    public function user()
    {
    	$eleves = Eleve::paginate(15);
        return view('back.users', compact('eleves'));
    }
}
