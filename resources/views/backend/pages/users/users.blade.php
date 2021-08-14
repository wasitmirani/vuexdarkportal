
@extends('layouts.backend.master')
@section('content')
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                   Users
                </div>
        </div>
    </div>
   <div class="col-12">
      <div class="card">
         <div class="card-header">
            <h2 class="card-title">
            <span >All Users</span>
                  <div class="mt-2">
                       <input color="#7d33ff"  placeholder="Search Articles" />
                  </div>

              </h2>
                <a href="{{ route('users.create') }}" size="large"    gradient   :active="true">
                      Add User
                  </a>
         </div>
         <div class="card-body">
            <p class="card-text">

            </p>
         </div>
         <div class="table-responsive">
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th >#</th>
                      <th >Name</th>
                      <th >Email</th>
                      <th>Role</th>
                      <th >Action</th>
                  </tr>
               </thead>
               <tbody>
                   @foreach($users as $user)
                 <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        @if(!empty($user->getRoleNames()))
                        @foreach($user->getRoleNames() as $v)
                           <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                      @endif

                        <td>
                            <a class="btn btn-warning" href="{{ route('users.edit',$user->id) }}">Edit</a>
                             |
                             <form action="{{ route('users.destroy',$user->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <button type="submit"  class="btn btn-danger delButton"  data-id="{{ $user->id }}">

                                    Delete

                                     </button>
                            </form>


                           </td>
                     </tr>
                     @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection