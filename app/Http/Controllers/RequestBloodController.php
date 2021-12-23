<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detail;

class RequestBloodController extends Controller
{
    public function index(){
        $detail = detail::all();
    return view('donorreq',compact('detail'));
    }

    public function store(Request $request){

        $input = $request->all();
        // dd($request->all());
        $detail = detail::create([
            'donor_name'=> $input['donor_name'],
            'description'=> $input['description'],
            // 'test_status'=> $input['test_status'],
            'donor_name'=> $input['donor_name'],
            // 'donor_nationality'=> $input['donor_nationality'],
            'donor_contact'=> $input['donor_contact'],
            // 'donor_location'=> $input['donor_location'],
            'blood_id'=> 7,
            
        ]);
        return redirect()->route('donorreq.index');
    }
}
