@extends('admin.layouts.master')

@section('show-header')

<link rel="stylesheet" href="{{ asset('admin/assets/styles/vendor/datatables.min.css') }}">

@endsection

@section('main-content')

@section('title','Manage Drivers')

<div class="col-md-12 mb-4">
  <div class="card text-left">

    <div class="card-body">
      {{-- button to lunch modal --}}
      <button type="button" class="btn btn-info fa fa-plus-circle" data-toggle="modal" data-target="#exampleModal"> Add Driver</button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form action="{{ route('driver.store') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="modal-header">
                <h5 align="center">Add Driver</h5>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>Name:</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter driver's name" required>
                </div>
                <div class="form-group">
                  <label>Phone Number:</label>
                  <input type="text" class="form-control" name="phone" placeholder="Enter phone number" required>
                </div>
                <div class="form-group">
                  <label>Residential Address:</label>
                  <input type="text" class="form-control" name="address" placeholder="Enter residential address" required>
                </div>
                <div class="form-group">
                  <label>Date Of Birth:</label>
                  <input type="date" class="form-control" name="dob" placeholder="Enter date of birth" required>
                </div>
                <div class="form-group">
                  <label>License Number:</label>
                  <input type="text" class="form-control" name="license_number" placeholder="Enter license number" required>
                </div>
                <div class="form-group">
                  <label>License Type:</label>
                  <input type="text" class="form-control" name="license_type" placeholder="Enter license type" required>
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
              <th>Name</th>
              <th>Phone Number</th>
              <th>Address</th>
              <th>D.O.B</th>
              <th>License Number</th>
              <th>License Type</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($drivers as $driver)
            <tr>
              <td>
                <img src="{{Storage::disk('local')->url($driver->image)}}" width="100%" height="50cm">
              </td>
              <td>{{ $driver->name }}</td>
              <td>{{ $driver->phone }}</td>
              <td>{{ $driver->address }}</td>
              <td>{{ $driver->dob }}</td>
              <td>{{ $driver->license_number }}</td>
              <td>{{ $driver->license_type }}</td>
              <td>
                {{-- button to lunch edit modal --}}
                <button type="button" class="btn btn-success fa fa-edit" data-toggle="modal" data-target="#a{{ $driver->id }}"></button>

                <!-- Modal -->
                <div class="modal fade" id="a{{ $driver->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <form action="{{ route('driver.update', $driver->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="modal-header">
                          <h5 align="center">Edit Driver</h5>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Name:</label>
                            <input type="text" class="form-control" name="name" required 
                            value="{{ $driver->name }}">
                          </div>
                          <div class="form-group">
                            <label>Phone Number:</label>
                            <input type="text" class="form-control" name="phone" required
                            value="{{ $driver->phone }}">
                          </div>
                          <div class="form-group">
                            <label>Residential Address:</label>
                            <input type="text" class="form-control" name="address" required
                            value="{{ $driver->address }}">
                          </div>
                          <div class="form-group">
                            <label>Date Of Birth:</label>
                            <input type="date" class="form-control" name="dob" required
                            value="{{ $driver->dob }}">
                          </div>
                          <div class="form-group">
                            <label>License Number:</label>
                            <input type="text" class="form-control" name="license_number" required
                            value="{{ $driver->license_number }}">
                          </div>
                          <div class="form-group">
                            <label>License Type:</label>
                            <input type="text" class="form-control" name="license_type" required
                            value="{{ $driver->license_type }}">
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
                <form method="post" id="delete-form-{{$driver->id}}" action="{{route('driver.destroy', $driver->id)}}" style="display: none;">

                  {{csrf_field()}}

                  {{method_field('DELETE')}}

                </form>

                <a href="" onclick="
                                    if(confirm('Are yoy sure, You want to delete this data?')){
                                      event.preventDefault();document.getElementById('delete-form-{{$driver->id}}').submit();
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
              <th>Name</th>
              <th>Phone Number</th>
              <th>Address</th>
              <th>D.O.B</th>
              <th>License Number</th>
              <th>License Type</th>
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