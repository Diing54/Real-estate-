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

								<h6 class="card-title">Edit Property State</h6>

								<form class="forms-sample" method="post" action="{{route('update.type')}}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$states->id}}">

									<div class="mb-3">
										<label for="state_name" class="form-label">State Name</label>
										<input type="text" class="form-control @error('state_name') is-invalid @enderror" name="state_name" value="{{$states->state_name}}">
                                        @error('state_name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
									</div>

                                    <div class="mb-3">
										<label for="state_description" class="form-label">State Description</label>
										<input type="text" class="form-control @error('state_description') is-invalid @enderror" name="state_description" value="{{$states->state_description}}">
                                        @error('state_description')
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