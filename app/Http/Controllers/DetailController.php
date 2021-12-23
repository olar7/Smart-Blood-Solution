<?php

namespace App\Http\Controllers;

use App\Models\detail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail = Detail::all();
        return view('admin.detail.index',compact('detail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detail = Detail::all();
        return view('admin.detail.create',compact('detail'));
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

        $detail = Detail::create([
            'description'=> $input['description'],
            'donor_name'=> $input['donor_name'],
            'donor_nationality'=> $input['donor_nationality'],
            'donor_contact'=> $input['donor_contact'],
            'donor_location'=> $input['donor_location'],
            'test_status'=> $input['test_status'],
            'blood_id' => 7,
        ]);
        // $input['blood_id'] = Auth::user()->id;
        // Detail::create($input);
        // dd($input);
        return redirect()->route('detail.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function show(detail $detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function edit(detail $detail)
    {
        return view('admin.detail.edit',compact('detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, detail $detail)
    {
        $detail->update($request->all());
        return redirect()->route('detail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Detail::find($id)->delete();
        return redirect()->route('detail.index');
    }
}
