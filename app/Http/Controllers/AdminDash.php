<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
use App\Models\Blog;
use App\Models\Campaign;
use App\Models\Admin;
use App\Models\Client;
use App\Models\Organization;
use App\Models\contact_form;
use Illuminate\Support\Facades\Auth;

class AdminDash extends Controller
{
    public function index(){
        $user = auth::user()->user_type_id;
        if ($user == 1) {
            $blog = Blog::all()->count();
            $campaign = Campaign::all()->count();
        $blood_requests = Guest::all()->count();
        $organization = Organization::all()->count();
        $contact = contact_form::all()->count();
        $admin_no = Admin::all()->count();
        $requestBlood = Guest::all();
        $organizationList = Organization::all();
        $clientList = Client::all()->count();
        return view('adminDash',compact('campaign'))->with('blog',$blog)->with('blood_requests',$blood_requests)->with('organization',$organization)->with('contact',$contact)->with('requestBlood',$requestBlood)->with('organizationList',$organizationList)->with('admin_no',$admin_no)->with('clientList',$clientList);
    }else {
        return view('dashboard');
    }
        
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
