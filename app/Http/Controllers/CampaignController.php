<?php

namespace App\Http\Controllers;

use App\Models\campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Organization;
use DB;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_type = Auth::user()->user_type_id;
        if($user_type == 1){
            $campaign = Campaign::all();
        }else{
            $org = Auth::user()->organization->id;
            $campaign = DB::table('campaigns')->where('organization_id',$org)->get();
        }
        return view('admin.campaign.index',compact('campaign'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $campaign = Campaign::all();
        $organizations= '';
        if(Auth::user()->user_type_id == 1){
            $organizations = Organization::all();
        }
        
        return view('admin.campaign.create',compact('organizations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->all();
        if ($image = $request->file('photo')) {
            $path = 'images/';
            $campaignImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            
            $image->move($path, $campaignImage);
            $input['photo'] = $campaignImage;
            
        }

        if(Auth::user()->user_type_id == 1){
            $org = $input['organization_id'];
        }else{
            $org = Auth::user()->organization->id;
        }

        $campaign = Campaign::create([
            'title'=> $input['title'],
            'photo'=> $input['photo'],
            'date'=> $input['date'],
            'description'=> $input['description'],
            'organization_id' => $org,
        ]);
       
        

       

        return redirect()->route('campaign.index');
            
    
        


    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function show(campaign $campaign)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function edit(campaign $campaign)
    {
        // $campaign = Campaign::all();
        return view('admin.campaign.edit',compact('campaign'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, campaign $campaign)
    {
        $input = $request->all();
        if ($image = $request->file('photo')) {
            $path = 'images/';
            $campaignImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            
            $image->move($path, $campaignImage);
            $input['photo'] = $campaignImage;
            
        }


        $campaign->update([
            'title'=> $input['title'],
            'photo'=> $input['photo'],
            'date'=> $input['date'],
            'description'=> $input['description'],
            'organization_id' => 6,
        ]);
       
        // $campaign->update($request->all());
        return redirect()->route('campaign.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Campaign::find($id)->delete();
        return redirect()->route('campaign.index');
    }

    public function campaignView($id){
        $campaign = Campaign::find($id);
        return view('campaigndetails',compact('campaign'));
    }
}
