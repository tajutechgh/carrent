@extends('admin.layouts.master')

@section('show-header')

<link rel="stylesheet" href="{{ asset('admin/assets/styles/vendor/datatables.min.css') }}">

@endsection

@section('main-content')

@section('title','Manage Vehicles')

<div class="col-md-12 mb-4">
  <div class="card text-left">

    <div class="card-body">
      {{-- button to lunch modal --}}
      <button type="button" class="btn btn-info fa fa-plus-circle" data-toggle="modal" data-target="#exampleModal"> Add Vehicle</button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form action="{{ route('vehicle.store') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="modal-header">
                <h5 align="center">Add Vehicle</h5>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>Vehicle Vendor:</label>
                  <input type="text" class="form-control" name="car_vendor" placeholder="Enter vehicle vendor" required>
                </div>
                <div class="form-group">
                  <label>Vehicle Model:</label>
                  <input type="text" class="form-control" name="car_model" placeholder="Enter vehicle model" required>
                </div>
                <div class="form-group">
                  <label>Vehicle Number:</label>
                  <input type="text" class="form-control" name="car_number" placeholder="Enter vehicle number" required>
                </div>
                <div class="form-group">
                  <label>Fuel Type:</label>
                  <input type="text" class="form-control" name="fuel_type" placeholder="Enter fuel type" required>
                </div>
                <div class="form-group">
                  <label>Doors Number:</label>
                  <input type="text" class="form-control" name="doors_number" placeholder="Enter doors number" required>
                </div>
                <div class="form-group">
                  <label>Seats Number:</label>
                  <input type="text" class="form-control" name="seats_number" placeholder="Enter seats number" required>
                </div>
                <div class="form-group">
                  <label>Quantity:</label>
                  <input type="number" class="form-control" name="quantity" placeholder="Enter quantity" required>
                </div>
                <div class="form-group">
                  <input type="file" name="image" required>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <br><br><br>
      @include('include.message')
      <div class="table-responsive">
        <table id="deafult_ordering_table" class="display table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th width="10%">Image</th>
              <th>Vehicle Vendor</th>
              <th>Vehicle Model</th>
              <th>Vehicle Number</th>
              <th>Fuel Type</th>
              <th>Doors Number</th>
              <th>Seats Number</th>
              <th>Quantity</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($vehicles as $vehicle)
            <tr>
              <td>
                <img src="{{Storage::disk('local')->url($vehicle->image)}}" width="100%" height="50cm">
              </td>
              <td>{{ $vehicle->car_vendor }}</td>
              <td>{{ $vehicle->car_model }}</td>
              <td>{{ $vehicle->car_number }}</td>
              <td>{{ $vehicle->fuel_type }}</td>
              <td>{{ $vehicle->doors_number }}</td>
              <td>{{ $vehicle->seats_number }}</td>
              <td>{{ $vehicle->quantity }}</td>
              <td>
                {{-- button to lunch edit modal --}}
                <button type="button" class="btn btn-success fa fa-edit" data-toggle="modal" data-target="#a{{ $vehicle->id }}"></button>

                <!-- Modal -->
                <div class="modal fade" id="a{{ $vehicle->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <form action="{{ route('vehicle.update', $vehicle->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="modal-header">
                          <h5 align="center">Edit Vehicle</h5>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Vehicle Vendor:</label>
                            <input type="text" class="form-control" name="car_vendor" required 
                            value="{{ $vehicle->car_vendor }}">
                          </div>
                          <div class="form-group">
                            <label>Vehicle Model:</label>
                            <input type="text" class="form-control" name="car_model" required
                            value="{{ $vehicle->car_model }}">
                          </div>
                          <div class="form-group">
                            <label>Vehicle Number:</label>
                            <input type="text" class="form-control" name="car_number" required
                            value="{{ $vehicle->car_number }}">
                          </div>
                          <div class="form-group">
                            <label>Fuel Type:</label>
                            <input type="text" class="form-control" name="fuel_type" required
                            value="{{ $vehicle->fuel_type }}">
                          </div>
                          <div class="form-group">
                            <label>Doors Number:</label>
                            <input type="text" class="form-control" name="doors_number" required
                            value="{{ $vehicle->doors_number }}">
                          </div>
                          <div class="form-group">
                            <label>Seats Number:</label>
                            <input type="text" class="form-control" name="seats_number" required
                            value="{{ $vehicle->seats_number }}">
                          </div>
                          <div class="form-group">
                            <label>Quantity:</label>
                            <input type="number" class="form-control" name="quantity" required
                            value="{{ $vehicle->quantity }}">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success">Save</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                {{-- delete button --}}
                <form method="post" id="delete-form-{{$vehicle->id}}" action="{{route('vehicle.destroy', $vehicle->id)}}"
                  style="display: none;">

                  {{csrf_field()}}

                  {{method_field('DELETE')}}

                </form>

                <a href="" onclick="
                                    if(confirm('Are yoy sure, You want to delete this data?')){
                                      event.preventDefault();document.getElementById('delete-form-{{$vehicle->id}}').submit();
                                    }else{
                                      event.preventDefault();
                                    }"
                  class="fa fa-trash-o btn btn-danger">
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th width="10%">Image</th>
              <th>Vehicle Vendor</th>
              <th>Vehicle Model</th>
              <th>Vehicle Number</th>
              <th>Fuel Type</th>
              <th>Doors Number</th>
              <th>Seats Number</th>
              <th>Quantity</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>

    </div>
  </div>
</div>
<!-- end of col -->

@endsection

@section('show-footer')

<script src="{{ asset('admin/assets/js/vendor/datatables.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/datatables.script.js') }}"></script>

@endsection