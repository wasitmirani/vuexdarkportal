<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;


class RoleController extends Controller
{
    public function index(){
        $roles = Role::all();

        return response()->json(['roles'=>$roles]);

    }

    public function show($id){


      $role =  Role::with('users')->find($id);
      return response()->json($role);

    }

    public function store(Request $request){


        $request->validate([
            'name' => ['required', 'string', 'max:255','unique:roles'],
        ]);

        $users = explode(", ", $request->users);

        $user_collection=User::WhereIn('id',  $users)->get();

        $role = Role::create(['name' => $request->name]);
        $role->users()->attach($user_collection);

        return response()->json('Role Created Succefully');




    }

    public function update(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:255','unique:roles,name,'.$request->id],
        ]);


        $role = Role::find($request->id);

        $role->name=$request->name;
        $role->save();
        $user = explode(',', $request->users);
        $role->users()->sync($user);
        return response()->json('Role Updated');
    }

    public function delete($id){

    $role = Role::find($id);
    if($role->delete()){
        return response()->json('Role Deleted Sucessfully');
    }else{
        return response()->json('Something Went Wrong');
    }
    }
}
