<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Imports\CustomersImport;

class ImportExcelController extends Controller
{
    function index()
    {
     $data = DB::table('customers')->orderBy('CustomerID', 'DESC')->paginate(15);
     return view('import_excel', compact('data'));
    }

    

    public function import(Request $request) 
    {
        if($request->file('select_file')){
      
    Excel::import(new CustomersImport,request()->file('select_file'));
}
        return back()->with('success', 'All good!');
        
    }

}