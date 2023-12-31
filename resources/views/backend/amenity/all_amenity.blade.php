@extends('admin.admin_dashboard')

@section('admin')

<div class="page-content">

				<nav class="page-breadcrumb">
        @if(Auth::user()->can('add.amenity'))
					<ol class="breadcrumb">
                    <a href="{{route('add.amenity')}}" class="btn btn-inverse-info">Add New Amenity</a>
					</ol>
          @endif
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">All Amenities</h6>
                 
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>S1</th>
                        <th>Amenity Name </th>
                        <th>Action </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($amenity as $key => $item)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$item->amenity_name}}</td>
                         <td> 
                         @if(Auth::user()->can('edit.amenity'))
                            <a href="{{route('edit.amenity', $item->id)}}" class="btn btn-inverse-warning">Edit</a>
                         @endif
                         @if(Auth::user()->can('delete.amenity'))  
                            <a href="{{route('delete.amenity', $item->id)}}" class="btn btn-inverse-danger" id="delete">Delete</a>
                        @endif
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