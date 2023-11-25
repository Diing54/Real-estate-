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

								<h6 class="card-title">Add New Admin</h6>

								<form id="myForm" class="forms-sample" method="post" action="{{route('store.admin')}}">
                                    @csrf
                                    <div class="form-group mb-3">
										<label for="role_name" class="form-label">Admin User Name</label>
										<input type="text" class="form-control" name="username">
									</div>
									<div class="form-group mb-3">
										<label for="role_name" class="form-label">Admin Name</label>
										<input type="text" class="form-control" name="name">
									</div>
                                    <div class="form-group mb-3">
										<label for="role_name" class="form-label">Admin Email</label>
										<input type="email" class="form-control" name="email">
									</div>
                                    <div class="form-group mb-3">
										<label for="role_name" class="form-label">Admin Phone</label>
										<input type="text" class="form-control" name="phone">
									</div>
                                    <div class="form-group mb-3">
										<label for="role_name" class="form-label">Admin Adress</label>
										<input type="text" class="form-control" name="address">
									</div>
                                    <div class="form-group mb-3">
										<label for="role_name" class="form-label">Admin Password</label>
										<input type="password" class="form-control" name="password">
									</div>
                                    <div class="form-group mb-3">
										<label for="role_name" class="form-label">Role Name</label>
                                        <select name="roles" class="form-select" id="exampleFormControlSelect1">
                                            <option selected="" disabled="">Select Role</option>
                                            @foreach($roles as $role)
                                            <option value="{{$role->id}}">{{$role->name}}</option>
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


<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                username: {
                    required : true,
                }, 
                name: {
                    required : true,
                }, 
                email: {
                    required : true,
                }, 
                phone: {
                    required : true,
                }, 
                address: {
                    required : true,
                }, 
                password: {
                    required : true,
                }, 
                roles: {
                    required : true,
                }, 
                
            },
            messages :{
               username: {
                    required : 'Please Enter User Name',
                }, 
                name: {
                    required : 'Please Enter Name',
                }, 
                email: {
                    required : 'Please Enter Email',
                }, 
                phone: {
                    required : 'Please Enter Phone',
                }, 
                address: {
                    required : 'Please Enter Address',
                }, 
                password: {
                    required : 'Please Enter Password',
                }, 
                roles: {
                    required : 'Please Enter Name',
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