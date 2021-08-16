<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class PermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $permissions=Permission::orderBy('name','ASC')
        ->with('roles')->get();

        $roles=Role::orderBy('name','ASC')->get();

        return view('backend.pages.permissions.permissions',['permissions'=>$permissions,'roles'=>$roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::orderBy('id','ASC')->get();

        return view('backend.pages.permissions.create',compact('roles'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255','unique:permissions'],
        ]);
        $roles= json_encode($request->roles);

        $role_collection=Role::WhereIn('id',  $request->roles)->get();

        $permission = Permission::create(['name' => $request->name]);
        $permission->syncRoles($role_collection);
    return  back()->with('message','Permission Created Successfully');


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
        $roles=Role::orderBy('id','ASC')->get();
        $permission = Permission::with('roles')->find($id);

        return view('backend.pages.permissions.edit',compact('permission','roles'));

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



        $permission = Permission::with('roles')->find($id);
        $permission->name = $request->name;
        $permission->save();
        $permission->roles()->sync($request->roles);
        return back()->with('message','Permission Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Permission::destroy($id);
        return back()->with('message','Permission Deleted Successfully');
    }
}
