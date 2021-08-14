@extends('layouts.backend.master')
@section('content')
<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="row">
                {{-- <div class="col-lg-3 col-sm-6 col-12">
                 Roles
                </div> --}}
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">
                    @if (Session::has('message'))
                    <p class="alert alert-success">{{ Session::get('message') }}</p>
                    @endif

                <span >Add Roles</span>


                  </h2>
                    <a href="{{ route('roles.index') }}" size="large"    gradient   :active="true">
                         Roles
                      </a>
             </div>
             <div class="card-body">
<form  action="{{ route('roles.store') }}"  method="post">

    {{ csrf_field() }}

    <div class="form-group">
      <label for="exampleInputEmail1">Role Name</label>
      <input type="type" name="name" class="form-control"  placeholder="Enter Role Name">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Users</label>
    <select class="form-control js-example-basic-multiple" name="users[]" multiple="multiple" >
        <option value="">Select User</option>
        @foreach ($users as $user)
        <option value="{{ $user->id }}">{{ $user->name }}</option>

        @endforeach

    </select>
    </div>

    <button type="submit" class="btn btn-primary">Add</button>
</form>
</div>
        </div>
    </div>
</div>
@endsection
@section('scripts')

        <script>
        $(document).ready(function() {

    $('.js-example-basic-multiple').select2();
});

</script>
@endsection