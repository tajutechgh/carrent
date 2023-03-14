@extends('admin.layouts.master')

@section('show-header')

<link rel="stylesheet" href="{{ asset('admin/assets/styles/vendor/datatables.min.css') }}">

@endsection

@section('main-content')

@section('title','Manage Permissions')

<div class="col-md-12 mb-4">
  <div class="card text-left">

    <div class="card-body">
      {{-- button to lunch modal --}}
      <button type="button" class="btn btn-info fa fa-plus-circle" data-toggle="modal" data-target="#exampleModal"> Add Permission</button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form action="{{ route('permission.store') }}" method="post">
              @csrf
              <div class="modal-header">
                <h5 align="center">Add Permission</h5>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>Permission Name:</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter permission name" required>
                </div>
                <div class="form-group">
                  <label>Permission For:</label>
                  <input type="text" class="form-control" name="for" placeholder="Permission for" required>
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
              <th>Permission Name</th>
              <th>Permission For</th>
              <th width="10%">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($permissions as $permission)
            <tr>
              <td>{{ $permission->name }}</td>
              <td>{{ $permission->for }}</td>
              <td>
                {{-- button to lunch edit modal --}}
                <button type="button" class="btn btn-success fa fa-edit" data-toggle="modal" data-target="#a{{ $permission->id }}"></button>

                <!-- Modal -->
                <div class="modal fade" id="a{{ $permission->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <form action="{{ route('permission.update', $permission->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="modal-header">
                          <h5 align="center">Edit Permission</h5>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Permission Name:</label>
                            <input type="text" class="form-control" name="name" required 
                            value="{{ $permission->name }}">
                          </div>
                          <div class="form-group">
                            <label>Permission For:</label>
                            <input type="text" class="form-control" name="for" required
                            value="{{ $permission->for }}">
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
                <form method="post" id="delete-form-{{$permission->id}}" action="{{route('permission.destroy', $permission->id)}}" style="display: none;">

                  {{csrf_field()}}

                  {{method_field('DELETE')}}

                </form>

                <a href="" onclick="
                                    if(confirm('Are yoy sure, You want to delete this data?')){
                                      event.preventDefault();document.getElementById('delete-form-{{$permission->id}}').submit();
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
              <th>Permission Name</th>
              <th>Permission For</th>
              <th width="10%">Action</th>
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