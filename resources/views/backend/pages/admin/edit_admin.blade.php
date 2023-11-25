@extends('admin.admin_dashboard')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<div class="page-content">

 
<div class="row profile-body">
  <!-- middle wrapper start -->
  <div class="col-md-8 col-xl-8 middle-wrapper">
    <div class="row">
    <div class="card">
              <div class="card-body">

								<h6 class="card-title">Edit Admin</h6>

								<form id="myForm" class="forms-sample" method="post" action="{{route('store.admin')}}">
                                    @csrf
                                     <div class="form-group mb-3">
										<label for="role_name" class="form-label">Admin User Name</label>
										<input type="text" class="form-control" name="username" value="{{$user->username}}">
									</div>
									<div class="form-group mb-3">
										<label for="role_name" class="form-label">Admin Name</label>
										<input type="text" class="form-control" name="name" value="{{$user->name}}">
									</div>
                                    <div class="form-group mb-3">
										<label for="role_name" class="form-label">Admin Email</label>
										<input type="email" class="form-control" name="email" value="{{$user->email}}">
									</div>
                                    <div class="form-group mb-3">
										<label for="role_name" class="form-label">Admin Phone</label>
										<input type="text" class="form-control" name="phone" value="{{$user->phone}}">
									</div>
                                    <div class="form-group mb-3">
										<label for="role_name" class="form-label">Admin Adress</label>
										<input type="text" class="form-control" name="address" value="{{$user->address}}">
									</div>
                                    <div class="form-group mb-3">
										<label for="role_name" class="form-label">Role Name</label>
                                        <select name="roles" class="form-select" id="exampleFormControlSelect1">
                                            <option selected="" disabled="">Select Role</option>
                                            @foreach($roles as $role)
                                            <option value="{{$role->id}}" {{$user -> hasRole($role->name) ? 'selected' : ''}}>{{$role->name}}</option>
                                            @endforeach
                                        </select>	
 									</div>
									<button type="submit" class="btn btn-primary me-2">Save Changes</button>
 								</form>

              </div>
            </div>
    </div>
  </div>
  <!-- middle wrapper end -->
  <!-- right wrapper start -->
 
  <!-- right wrapper end -->
</div>

</div>
 

@endsection