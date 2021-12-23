<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;

class donor extends Controller
{
   public function index(){

    $detail = Detail::orderBy('created_at','DESC')->take(100)->get();
        // dd($detail);
        return view('donorlist')->with('detail', $detail);
   }
}
