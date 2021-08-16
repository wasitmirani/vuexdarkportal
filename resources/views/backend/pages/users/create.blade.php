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
                <span >Add Users</span>


                  </h2>
                    <a href="{{ route('users.index') }}" size="large"    gradient   :active="true">
                          All User
                      </a>
             </div>
             <div class="card-body">
                <form  action="{{ route('users.store') }}"  method="post">

                    {{ csrf_field() }}

                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="type" name="name" class="form-control"  placeholder="Enter Full Name">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Email</label>
                      <input type="type" name="email" class="form-control"  placeholder="Enter Email Address">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control"  placeholder="Enter Password">

                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Role</label>
                      <select class="form-control js-example-basic-multiple" name="roles[]" multiple>
                          <option value="">Select Role</option>
                          @foreach ($roles as $role)
                           <option value="{{ $role}}">{{ $role }}</option>

                          @endforeach
                      </select>

                      </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                      </div>
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
