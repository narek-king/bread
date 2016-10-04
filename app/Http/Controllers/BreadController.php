<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Bread;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


use App\Http\Requests;

class BreadController extends Controller
{
    //
    public function index(){
//        if ($date == null)
//            $bread = DB::table('breads')->where('date', '=', '2016-09-09')->get();
//
//        else
//        $bread = DB::table('breads')->where('date', $date)->get();
//        $bread = Bread::get()->first();
//        $bread = DB::table('breads')->where('date', '=', '2016-09-09')->get();
        $date = Carbon::today();
        $breads = Bread::day($date)->get();
        return view('home', compact('breads'), compact('date'));

    }
}
