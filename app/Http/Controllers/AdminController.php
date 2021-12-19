<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if(! Gate::allows('admin-view')){
        //     return abort(401);
        // }
        $admin = Admin::all();
        // dd($admin);
        // foreach($admin as $a){
        //     // dd($a->user->first_name);
        // }
        return view('admin.admin.index')->with('admins', $admin);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(! Gate::allows('admin-add')){
            return abort(401);
        }
        return view('admin.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(! Gate::allows('admin-add')){
            return abort(401);
        }
        // $request['user_type_id'] = 1;
        // dd($request->all());
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'email' => $request->email,
            'contact' => $request->contact,
            
            'password' => Hash::make($request->password),
            'user_type_id' => $request->user_type_id,
        ]);
        $admin = Admin::create([
            'user_id'=> $user->id,
            'alt_email' => $request->alt_email
        ]);
        return redirect()->route('admin.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        
        return view('admin.admin.edit',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $user = $admin->user;
        
        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'email' => $request->email,
            'contact' => $request->contact,
            
            'password' => Hash::make($request->password),
            'user_type_id' => $request->user_type_id,
        ]);
        $admin->update([
            'user_id'=> $user->id,
            'alt_email' => $request->alt_email
        ]);
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admin::find($id)->delete();
        return redirect()->route('admin.index');
    }
}
