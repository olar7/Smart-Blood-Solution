<?php

namespace App\Http\Controllers;

use App\Models\organization;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\blood_stock;
use App\Models\Campaign;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use DB;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(! Gate::allows('organization-view')){
            return abort(401);
        }
        $organizations =  Organization::all();
        return view('admin.organization.index', compact('organizations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(! Gate::allows('organization-add')){
            return abort(401);
        }
        return view('admin.organization.create')->with('user_type', DB::table('user_types')
        ->where('user_type', 'organization')->first());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(! Gate::allows('organization-add')){
            return abort(401);
        }

        $input = $request->all();
        
        if ($image = $request->file('logo')) {
            $destinationPath = 'images/';
            $organizationImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $organizationImage);
            $input['logo'] = $organizationImage;
            
            // $organization = Organization::create($input);
            // return redirect()->route('organization.index');
        }
        // dd($request->all());
        $name = explode(' ', $input['org_name']);
        $user = User::create([
            'first_name'=> $name[0],
            'last_name'=>$name[1],
            'address' => $input['address'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'contact' => $input['contact'],
            'address' => $input['address'],
            'user_type_id'=>$input['user_type_id']
        ]);
        $organization = Organization::create([
            'user_id'=> $user->id,
            'description'=> $input['description'],
            'slogan'=> $input['slogan'],
            'logo'=> $input['logo']
        ]);
        return redirect()->route('organization.index');
    }
        
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(organization $organization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(organization $organization)
    {
       
        if(! Gate::allows('organization-edit')){
            return abort(401);
        }
        
        return view('admin.organization.edit',compact("organization"))->with('user_type', DB::table('user_types')
        ->where('user_type', 'organization')->first());

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, organization $organization)
    {
        if(! Gate::allows('organization-edit')){
            return abort(401);
        }
        // $organization = Organization::findOrFail($id);
        $user = $organization->user;
        $input = $request->all();
        $name = explode(' ', $input['org_name']);
        // dd($input);
        // $input = $request->all();
        if ($image = $request->file('logo')) {
            $destinationPath = 'images/';
            $organizationImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $organizationImage);
            $input['logo'] = $organizationImage;

        }
        // dd($request->all());
        $user->update([
            'first_name'=> $name[0],
            'last_name'=>$name[1],
            'address' => $input['address'],
            'email' => $input['email'],
            'password' => $input['password'],
            'contact' => $input['contact'],
            'address' => $input['address'],
            'user_type_id'=>$input['user_type_id']
        ]);
        $organization->update([
            'user_id'=> $user->id,
            'description'=> $input['description'],
            'slogan'=> $input['slogan'],
            'logo'=> $input['logo']
        ]);
        return redirect()->route('organization.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        if(! Gate::allows('organization-delete')){
            return abort(401);
        }
        Organization::find($id)->delete();
        return redirect()->route('organization.index');
    }
    public function orgProfile($id){

        $organization = Organization::find($id);
        $bloodstock = $organization->bloodstock;
        $campaign = $organization->campaigns;
        return view('organization.profile', compact('organization'))->with('campaign',$campaign)->with('bloodstock',$bloodstock);
    }
}
