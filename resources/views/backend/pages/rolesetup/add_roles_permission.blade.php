@extends('admin.admin_dashboard')

@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<style>
    .form-check{
        text-transform: capitalize;
    }
</style>

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
                                            <input type="checkbox" class="form-check-input" id="checkDefaultmain">
											<label class="form-check-label" for="checkDefaultmain">
												All Permissions
											</label>
									</div>

                                    <hr>
                                    @foreach($permission_groups as $group)
                                    <div class="row">
                                        <div class="col-3">

                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="checkDefault">
											<label class="form-check-label" for="checkDefault">
												{{$group -> group_name}}
											</label>
									    </div>
                                        </div>
                                        <div class="col-9">
                                            @php
                                            $permissions = App\Models\User::getPermissionByGroupName($group->group_name)
                                            @endphp

                                            @foreach($permissions as $permission)
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="checkDefault{{$permission->id}}" name="permission[]" value="{{$permission->id}}">
											<label class="form-check-label" for="checkDefault{{$permission->id}}">
												{{$permission -> name}}
											</label>
									    </div>
                                        @endforeach
                                        <br>

                                        </div>
                                    </div>
                                    @endforeach
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
 
<script>
    $('#checkDefaultmain').click(function(){
        if($(this).is(':checked')){
            $('input[type = checkbox]').prop('checked',true);
        }else{
            $('input[type = checkbox]').prop('checked',false);
        }
    })
</script>
 
@endsection