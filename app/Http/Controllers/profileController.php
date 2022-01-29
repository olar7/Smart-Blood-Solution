<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Organization;
use App\Models\client;
use App\Models\admin;

class profileController extends Controller
{
    public function index(){
        $user = auth::user()->user_type_id;
        if ($user == 1) {
            $id = auth::user()->admin->id;
           $profile = admin::find($id);
        }elseif ($user == 2) {
            $id = auth::user()->client->id;
            $profile = client::find($id);
        }else {
            $id = auth::user()->organization->id;
            $profile = organization::find($id);
        }
        return view('userprofile',compact('profile'));
    }
}
