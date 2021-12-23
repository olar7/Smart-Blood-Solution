<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;

class CampaignDetailController extends Controller
{
    public function index(){
    $campaign = Campaign::orderBy('created_at','DESC')->take(1)->get();
    return view('campaigndetails')->with('campaign', $campaign);
    }
}
