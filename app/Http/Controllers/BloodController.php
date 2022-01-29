<?php

namespace App\Http\Controllers;

use App\Models\blood;
use Illuminate\Http\Request;

class BloodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blood = Blood::all();
        return view('admin.blood.index',compact('blood'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blood = Blood::all();
        return view('admin.blood.create',compact('blood'));
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
            $validationImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $validationImage);
            $input['validation'] = $validationImage;

       

        $blood = Blood::create([
            'blood_group'=> $input['blood_group'],
            'blood_type'=> $input['blood_type'],
            'volume'=> $input['volume'],
            'validation'=> $input['validation'],
            'note'=> $input['note'],
            'client_id' => 2,
        ]);
        return redirect()->route('blood.index');
    }
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blood  $blood
     * @return \Illuminate\Http\Response
     */
    public function show(blood $blood)
    {
       return view('services',compact('blood'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blood  $blood
     * @return \Illuminate\Http\Response
     */
    public function edit(blood $blood)
    {
        return view('admin.blood.edit',compact('blood'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blood  $blood
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blood $blood)
    {
        $blood->update($request->all());
        return redirect()->route('blood.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blood  $blood
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blood::find($id)->delete();
        return redirect()->route('blood.index');
    }
}
