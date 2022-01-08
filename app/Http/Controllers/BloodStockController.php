<?php

namespace App\Http\Controllers;

use App\Models\blood_stock;
use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class BloodStockController extends Controller
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
        $bloodstock = blood_stock::all();
    }else{
        $blood = Auth::user()->organization->id;
        $bloodstock = DB::table('blood_stocks')->where('organization_id',$blood)->get();
    }
    {
        
        return view('bloodstock.index',compact('bloodstock'));
    }
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $organizations= '';
        if(Auth::user()->user_type_id == 1){
            $organizations = Organization::all();
        }
        return view('bloodstock.create',compact('organizations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $input = $request->all();
        if(Auth::user()->user_type_id == 1){
            $org = $input['organization_id'];
        }else{
            $org = Auth::user()->organization->id;
        }

        // $input['organization_id'] = Auth::user()->organization->id;
        // blood_stock::create($input);
        $blood_stock = blood_stock::create([
            'blood_type'=> $input['blood_type'],
            'blood_group'=> $input['blood_group'],
            'collected_date'=> $input['collected_date'],
            'blood_checkup_report'=> $input['blood_checkup_report'],
            'organization_id' => $org,
        ]);
        // dd($request->all());
        return redirect()->route('bloodstock.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blood_stock  $blood_stock
     * @return \Illuminate\Http\Response
     */
    public function show(blood_stock $blood_stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blood_stock  $blood_stock
     * @return \Illuminate\Http\Response
     */
    public function edit(blood_stock $bloodstock)
    {
        // $bloodstock = blood_stock::all();
         return view('bloodstock.edit',compact('bloodstock'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blood_stock  $blood_stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blood_stock $bloodstock)
    {

        $bloodstock->update($request->all());
        return redirect()->route('bloodstock.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blood_stock  $blood_stock
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        blood_stock::find($id)->delete();
        return redirect()->route('bloodstock.index');
    }
}
