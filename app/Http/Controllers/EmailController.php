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
    public function smsDispatch($requestId){
        $blood_request = Guest::findOrFail($requestId);
        $clients = client::where('blood_group', $blood_request->blood_group)->get();
        $client_contact = collect();
        foreach($clients as $client){
            $contact = $client->user->contact;
            $client_contact->push($contact);
        }
        // dd('Need this blood type:'.$blood_request->blood_group.'%0aPlease contact at: '.$blood_request->contact.' at '.$blood_request->location);
        $args = http_build_query(array(
            'auth_token'=> 'ba5269e1d80f5b7d6dce40da9ea270209609c5910c43a432467897536c021773',
            'to'    => $client_contact->first(),
            'text'  => 'Need this blood type:'.$blood_request->blood_group.'. Please contact at: '.$blood_request->contact.' at '.$blood_request->location.'.',
        ));
        $url = "https://sms.aakashsms.com/sms/v3/send";

        # Make the call using API.
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1); ///
        curl_setopt($ch, CURLOPT_POSTFIELDS,$args);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        // Response
        $response = curl_exec($ch);
        curl_close($ch);
        return redirect()->back();
    }
}
