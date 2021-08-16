<?php

namespace App\Http\Controllers\Backend;

use DB;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    // function __construct()
    // {
    //      $this->middleware('permission:role-list');
    //      $this->middleware('permission:role-create', ['only' => ['create','store']]);
    //      $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:role-delete', ['only' => ['destroy']]);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q=request('query');

        $roles=Role::orderBy('name','ASC')
        ->with('users')
        ->get();



       return view('backend.pages.roles.roles',['roles'=>$roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();

        return view('backend.pages.roles.create',compact('users'));
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
            'name' => ['required', 'string', 'max:255','unique:roles'],
        ]);
        $users= json_encode($request->users);

        $user_collection=User::WhereIn('id',  $request->users)->get();

        $role = Role::create(['name' => $request->name]);
        $role->users()->attach($user_collection);

        return back()->with('message','Role Created Succefully');
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
        $role = Role::with('users')->find($id);

        $users = User::all();
        return view('backend.pages.roles.edit',compact('role','users'));
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

        $request->validate([
            'name' => ['required', 'string', 'max:255','unique:roles,name,'.$request->id],
        ]);


        $role = Role::find($id);

        $role->name=$request->name;
        $role->save();
        $role->users()->sync($request->users);
        return back()->with('message','Role Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {

      Role::destroy($id);
      return back()->with('message','Role Deleted Successfully');
    }
}
