
<input type="hidden" name="id" value="{{$permission->id}}">

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

								<h6 class="card-title">Edit Permission</h6>

								<form class="forms-sample" method="post" action="{{route('update.permission')}}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$permission->id}}">

									<div class="mb-3">
										<label for="permission_name" class="form-label">Permission Name</label>
										<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$permission->name}}">
                                        @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
									</div>

									<div class="mb-3">
										<label for="group_name" class="form-label">Group Name</label>
										<input type="text" class="form-control @error('group_name') is-invalid @enderror" name="group_name" value="{{$permission->group_name}}">
                                        @error('group_name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
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