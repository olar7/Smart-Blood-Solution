<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;
use App\Models\Organization;

class Landing extends Controller
{
    public function index(){
        $campaign = Campaign::orderBy('created_at', 'DESC')->take(3)->get();
        $organization = Organization::orderBy('created_at','DESC')->take(5)->get();
        // dd($organization);
        return view('index')->with('campaign', $campaign)->with('organization',$organization);


    }
}
