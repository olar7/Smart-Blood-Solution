<?php

namespace App\Http\Controllers;

use App\Models\contact_form;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = contact_form::orderBy('created_at', 'DESC')->take(5)->get();
        // return view('mailbox')->with('contact',$contact);
        return view('mailbox',compact('contact'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $input = $request->all();
        $contact = contact_form::create([
            'full_name'=> $input['full_name'],
            'subject'=> $input['subject'],
            'email'=> $input['email'],
            'message'=> $input['message']
        ]);
        return view('contactform');
    }

    public function show($id)
    {
        $contact = contact_form::find($id);
        return view('messageview',compact('contact'));
    }

    public function delete($id){
        contact_form::find($id)->delete();
        return redirect()->route('contactform.index');
    }

}
