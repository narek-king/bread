<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Input;
use Illuminate\Support\Facades\Storage;


class adminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('administrator');
    }

public function uploadFiles(){

    $files = request()->allFiles();
    foreach ($files as $file)
    foreach ($file as $oneFile){
        $name = $oneFile->getClientOriginalName();
        $oneFile->storeAs('new', $name);
    }
//    $this->analyzeFile();
    return back();
}

private function analyzeFile(){
    $next = 1;
    while (Storage::exists("new/.{$next}.htm"))
    {
        $next++;
    }
    return view('welcome', compact($next));
   /* foreach ($files as $file)
    {

    }*/
}




}
