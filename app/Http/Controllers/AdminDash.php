<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class AdminDash extends Controller
{
    public function index(){
        return view('adminDash');
    }
    
    
    public function show($id){
        $adminvalidation = Guest::find($id);
        return view('validation',compact('adminvalidation'));
    }

    public function destroy($id)
    {
        Guest::find($id)->delete();
        return redirect()->route('guest.show');
        
        
    }
}
