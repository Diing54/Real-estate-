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

								<h6 class="card-title">Roles Name</h6>

								<form id="myForm" class="forms-sample" method="post" action="{{route('store.role')}}">
                                    @csrf
									<div class="form-group mb-3">
										<label for="role_name" class="form-label">Role Name</label>
                                        <select name="role_id" class="form-select" id="exampleFormControlSelect1">
                                            <option selected="" disabled="">Select Group</option>
                                            @foreach($roles as $role)
                                            <option value="{{$role->id}}">{{$role->name}}</option>
                                            @endforeach
                                        </select>									
                                    </div>
                                    <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="checkDefault">
											<label class="form-check-label" for="checkDefault">
												All Permissions
											</label>
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

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
               name: {
                    required : true,
                }, 
                
            },
            messages :{
               name: {
                    required : 'Please Enter Role Name',
                }, 
                 

            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>
 
@endsection