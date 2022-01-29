<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\blood;

class DonateBloodController extends Controller
{
    
        public function index(){
            
        return view('bedonor');
        }
    
    

    public function store(Request $request){
        
        $input = $request->all();
        if ($image = $request->file('validation')) {
            $destinationPath = 'images/';
            $validationImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $validationImage);
            $input['validation'] = $validationImage;
        }

        $blood = blood::create([
            'blood_group' => $input['blood_group'],
            // 'blood_type' => $input['blood_type'],
            'volume' => $input['volume'],
            'validation' => $input['validation'],
            'note' => $input['note'],
            'client_id' => auth::user()->client->id,
        ]);
        

        return redirect()->route('bedonor.index');
    }

}
