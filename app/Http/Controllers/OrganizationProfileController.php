<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organization;
use App\Models\blood_Stock;
use App\Models\Campaign;

class OrganizationProfileController extends Controller
{
    public function index(){
        $organization = Organization::orderBy('created_at', 'DESC')->take(1)->get();
        $bloodstock = blood_stock::orderBy('created_at', 'DESC')->take(20)->get();
        $campaign = Campaign::orderBy('created_at', 'DESC')->take(5)->get();
        return view('organization/profile')->with('organization',$organization)->with('campaign',$campaign)->with('bloodstock',$bloodstock);
    }
}
