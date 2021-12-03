<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\UserType;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $user = \Auth::user();
        if (!app()->runningInConsole()) {
            $user_types = UserType::with('permissions')->get();
            //dd($roles);
            foreach ($user_types as $user_type) {
                foreach ($user_type->permissions as $permission) {
                    $permission_list[$permission->permission][] = $user_type->id;
                }
            }
             //dd($permissionArray); //return array with permission name as title and role associated with that permission
            foreach ($permission_list as $permission => $user_types) {
                //Defines the gate based on the user role
                Gate::define($permission, function ($user) use ($user_types) {
                    // dd($user->role); //return the authenticated user
                    // return count(array_intersect($user->role->pluck('id')->toArray(), $roles));
                    // dd($user->role->id); //returns authenticated user id

                    
                    foreach($user_types as $user_type){
                        if ($user->user_type->id == $user_type) {
                            return true;
                        }
                    }

                });
            }
        }
    }
}
