
@extends('layouts.backend.master')
@section('content')
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                   Roles
                </div>
        </div>
    </div>
   <div class="col-12">
      <div class="card">
         <div class="card-header">
            <h2 class="card-title">
            <span >All Roles</span>

                  <div class="mt-2">
                       <input color="#7d33ff"  placeholder="Search Articles" />
                  </div>

              </h2>
                <a href="{{ route('roles.create') }}" size="large"    gradient   :active="true">
                      Add Roles
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
                     <th >Role Name</th>
                      <th >Created</th>
                      <th >Action</th>
                  </tr>
               </thead>
               <tbody>
                   @foreach($roles as $role)

                 <tr >
                        <th >{{ $role->id }}</th>
                        <td>{{ $role->name }}</td>

                        <td>{{ $role->created }}</td>

                        <td>
                         <a class="btn btn-warning" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                          |

                          <form action="{{ route('roles.destroy',$role->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <button type="submit"  class="btn btn-danger delButton"  data-id="{{ $role->id }}">

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
@section('scripts')
<script>
    // $(document).ready(function(){
    //   $('.delButton').on('click',function(){
    //       var id = $(this).data('id');
    //       $.ajax({
    //           'url':'/roles/update'+id,
    //           'type':'delete',
    //           'data':{_token:"{{ csrf_token() }}",
    //           id:id},
    //           success:function(msg){

    //             alert('Role Deleted Successfully')

    //           }
    //       })
    //   })
    // })
</script>
@endsection

