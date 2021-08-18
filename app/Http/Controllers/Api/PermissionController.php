<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index(){
        $permissions=Permission::orderBy('name','ASC')
        ->with('roles')->get();
        return response()->json($permissions);
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255','unique:permissions'],
        ]);
        $roles= explode(',', $request->roles);

        $role_collection=Role::WhereIn('id',  $roles)->get();

        $permission = Permission::create(['name' => $request->name]);
        $permission->syncRoles($role_collection);
    return  response()->json('Permission Created Successfully');



    }

    public function delete($id){

        $permission = Permission::find($id);
        if($permission->delete()){
            return response()->json('Permission Deleted Successfully');
        }
        else{
            return response()->json('Failed To Delete Permission');
        }


    }
}
