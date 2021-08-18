<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    public function index(){

        $users = User::all();

     $allusers = User::with('roles')->latest()->paginate(env('PER_PAGE'));
        return response()->json(['users'=>$users, 'allusers'=>$allusers]);
    }

    public function store(Request $request){


        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'roles' => 'required'
        ]);



        $input = $request->all();

        $input['password'] = Hash::make($input['password']);

$role = explode(',', $request->input('roles'));

        $user = User::create($input);
        $user->assignRole($role);

if($user){
    return response()->json('User created successfully');
}else{
    return response()->json('Failed To Create User');
}


    }

    public function delete($id){

        $user = User::find($id);
        if($user->delete()){
            return response()->json('User Deleted Successfully');
        }
        else{
            return response()->json('Failed To Delete User');
        }


    }
}
