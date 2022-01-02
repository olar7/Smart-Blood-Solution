<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
use App\Models\client;

class EmailController extends Controller
{
    public function emailDispatch($requestId){
        $blood_request = Guest::findOrFail($requestId);
        $clients = client::where('blood_group', $blood_request->blood_group)->get();
        $client_emails = collect();
        foreach($clients as $client){
            $email = $client->user->email;
            $client_emails->push($email);
        }
        foreach($client_emails as $client_email){
            \Mail::to($client_email)->send(new \App\Mail\MyTestMail($blood_request));
        }
        return redirect()->back();
    }
}
