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

								<h6 class="card-title">Add New Amenity</h6>

								<form class="forms-sample" method="post" action="{{route('store.amenity')}}">
                                    @csrf

									<div class="mb-3">
										<label for="amenity_name" class="form-label">Amenity Name</label>
										<input type="text" class="form-control @error('amenity_name') is-invalid @enderror" name="amenity_name">
                                        @error('amenity_name')
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