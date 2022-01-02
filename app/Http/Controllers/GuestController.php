<?php

namespace App\Http\Controllers;

use App\Models\guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('donorreq');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if ($image = $request->file('validation')) {
            $destinationPath = 'images/';
            $requestImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $requestImage);
            $input['validation'] = $requestImage;
            
            // $organization = Organization::create($input);
            // return redirect()->route('organization.index');
        }
        $detail = Guest::create([
            'first_name'=> $input['first_name'],
            'contact'=> $input['contact'],
            'location'=> $input['location'],
            'blood_group'=> $input['blood_group'],
            'validation'=> $input['validation'],
            'note'=> $input['note'],
            
        ]);
        
        return redirect()->route('guest.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function show(guest $guest)
    {
        $guest = Guest::orderBy('created_at','DESC')->take(100)->get();
        return view('adminvalidation')->with('guest', $guest);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function edit(guest $guest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, guest $guest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function destroy(guest $guest)
    {
        //
    }

   
}
