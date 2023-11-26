@extends('admin.admin_dashboard')

@section('admin')

<div class="page-content">

				<nav class="page-breadcrumb">
        @if(Auth::user()->can('add.type'))
					<ol class="breadcrumb">
                    <a href="{{route('add.state')}}" class="btn btn-inverse-info">Add Property State</a>
					</ol>
          @endif
				</nav>

				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">All Property State</h6>
                 
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>S1</th>
                        <th>State Name </th>
                        <th>Description </th>
                        <th>Action </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($states as $key => $item)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$item->state_name}}</td>
                        <td>{{$item->state_description}}</td>
                        <td>  
                          @if(Auth::user()->can('edit.type'))
                            <a href="{{route('edit.type', $item->id)}}" class="btn btn-inverse-warning">Edit</a>
                          @endif
                          @if(Auth::user()->can('delete.type'))
                            <a href="{{route('delete.type', $item->id)}}" class="btn btn-inverse-danger" id="delete">Delete</a>
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