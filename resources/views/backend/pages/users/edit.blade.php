@extends('layouts.backend.master')
@section('content')
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">

                </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">
                    <div class="mt-2">
                        @if(Session::has('message'))
                          {{ Session::get('message') }}
                        @endif



                    </div>
                <span >Edit Users</span>


                  </h2>
                    <a href="{{ route('users.index') }}" size="large"    gradient   :active="true">
                          All User
                      </a>
             </div>
             <div class="card-body">
                <form  action="{{ route('users.update',$user->id) }}"  method="post">

                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="type" name="name" class="form-control" value="{{ $user->name }}"  placeholder="Enter Full Name">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Email</label>
                      <input type="type" name="email" class="form-control" value="{{ $user->email }}"  placeholder="Enter Email Address">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" value=""  placeholder="Enter Password">

                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Role</label>

                      <select class="form-control" name="role">
                          <option value="">Select Role</option>
                          @foreach ($roles as $role)
                           @foreach( $userRole as $urole)
                           <option @if($role == $urole) selected @endif value="{{ $role}}">{{ $role }}</option>
                           @endforeach

                          @endforeach
                      </select>

                      </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                </form>

             </div>

        </div>
    </div>

</div>
@endsection
