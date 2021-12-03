<?php

namespace App\Http\Controllers;

use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Permission;
use App\Models\Component;
class UserTypeController extends Controller
{
    
    public function index()
    {
        //dd('hello');
        return view('admin.user_types.index')->with('user_types', UserType::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(! Gate::allows('user_type-add')){
            return abort(401);
        }
        return view('admin.user_types.create')->with('permissions', Permission::all())
                                            ->with('components', Component::all());
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
        $user_type = UserType::create($request->all());
        $user_type->permissions()->sync($request->permission);

        return redirect()->route('user_type.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.user_types.edit')->with('user_type', UserType::findOrFail($id))
        ->with('permissions', Permission::all())
        ->with('components', Component::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user_type = UserType::findOrFail($id);
        $user_type->update($request->all());
        $user_type->permissions()->sync(array_filter((array) $request->permission));

        return redirect()->route('user_type.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        UserType::find($id)->delete();
        return redirect()->route('user_type.index');
    }
}
