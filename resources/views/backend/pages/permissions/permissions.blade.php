@extends('layouts.backend.master')
@section('content')
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
               Permissions
                </div>
        </div>
    </div>
   <div class="col-12">
      <div class="card">
         <div class="card-header">
            <h2 class="card-title">
            <span >All Permissions</span>

                  <div class="mt-2">
                       <input color="#7d33ff"  placeholder="Search Articles" />
                  </div>

              </h2>
                <a href="{{ route('permissions.create') }}" size="large"    gradient   :active="true">
                      Add Permission
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
                      <th>#</th>
                     <th >Permission Name</th>
                      <th >Role</th>
                      <th >Action</th>
                  </tr>
               </thead>
               <tbody>
                   @foreach($permissions as $permission)

                 <tr >
                        <th >{{ $permission->id }}</th>
                        <td>{{ $permission->name }}</td>


                        <td>
                            @foreach($permission->roles as $role)
                            {{ $role->name }},
                            @endforeach
                        </td>

                        <td>
                         <a class="btn btn-warning" href="{{ route('permissions.edit',$permission->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                          |

                          <form action="{{ route('permissions.destroy',$permission->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit"  class="btn btn-danger delButton"  data-id="{{ $permission->id }}">

                                <i class="fa fa-trash" aria-hidden="true"></i>

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
