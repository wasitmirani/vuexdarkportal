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
                    @if($errors->any())
                     {{ $errors->all() }}
                    @endif

                <span >Edit Permissions</span>


                  </h2>
                    <a href="{{ route('permissions.index') }}" size="large"    gradient   :active="true">
                         Permissions
                      </a>
             </div>
             <div class="card-body">
<form  action="{{ route('permissions.update',$permission->id) }}"  method="post">

    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <div class="form-group">
      <label for="exampleInputEmail1">Permission Name</label>
      <input type="type" name="name" class="form-control"  value="{{ $permission->name }}"  placeholder="Enter Role Name">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Roles</label>
    <select class="form-control js-example-basic-multiple" name="roles[]" multiple="multiple" >
        <option value="">Select Roles</option>
        @foreach ($roles as $role)
         @foreach($permission->roles as $prole)
        <option @if($prole->id == $role->id) selected @endif value="{{ $role->id }}">{{ $role->name }}</option>
         @endforeach

        @endforeach

    </select>
    </div>

    <button type="submit" class="btn btn-primary">Updated</button>
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
