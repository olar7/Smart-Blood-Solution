<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\detail;

class DonateBloodController extends Controller
{
    
        public function index(){
            // $detail = detail::all();
        return view('bedonor');
        }
    
    

    public function store(Request $request){
        
        $input = $request->all();
        $detail = Detail::create([
            'donor_name'=> $input['donor_name'],
            'donor_nationality'=> $input['donor_nationality'],
            'donor_contact'=> $input['donor_contact'],
            'donor_location'=> $input['donor_location'],
            // 'description'=> $input['description'],
            'test_status'=> $input['test_status'],
            'blood_id' => 7,
        ]);
        // $input['blood_id'] = Auth::user()->id;
        // Detail::create($input);
        // dd($request->all());

        return redirect()->route('bedonor.index');
    }

}
