<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blood;

class donor extends Controller
{
   public function index(){

    $detail = blood::orderBy('created_at','DESC')->take(100)->get();
        return view('donorlist')->with('detail', $detail);
   }
}
