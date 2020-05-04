<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dropboxFileUpload()

    {

        $Client = new Client(env('DROPBOX_TOKEN'), env('DROPBOX_SECRET'));
        $file = fopen(public_path('img/admin.png'), 'rb');
        $size = filesize(public_path('img/admin.png'));
        $dropboxFileName = '/myphoto4.png';
        $Client->uploadFile($dropboxFileName,WriteMode::add(),$file, $size);
        $links['share'] = $Client->createShareableLink($dropboxFileName);
        $links['view'] = $Client->createTemporaryDirectLink($dropboxFileName);

        print_r($links);

    }
}
