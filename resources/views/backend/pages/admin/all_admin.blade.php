@extends('admin.admin_dashboard')

@section('admin')

<div class="page-content">

				<nav class="page-breadcrumb">
					<ol class="breadcrumb">
                    <a href="{{route('add.admin')}}" class="btn btn-inverse-info">Add New Admin</a>
					</ol>
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">All Admins</h6>
                 
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>S1</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Action </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($all_admin as $key => $item)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>
                        <img id="showImage" class="wd-80 rounded-circle" src="{{ (!empty($item -> photo)) ? url('upload/admin_images/'.$item -> photo) : url('upload/no_image.jpg')}}" alt="profile" style="width: 70px; height:40px;">
                        </td>
                        <td>{{$item-> name}}</td>
                        <td>{{$item-> email}}</td>
                        <td>{{$item-> phone}}</td>
                        <td>Role</td>
                          <td> 
                            <a href="{{route('edit.amenity', $item->id)}}" class="btn btn-inverse-warning">Edit</a>
                            <a href="{{route('delete.amenity', $item->id)}}" class="btn btn-inverse-danger" id="delete">Delete</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
					</div>
				</div>

			</div>

@endsection