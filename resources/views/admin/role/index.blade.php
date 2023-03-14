@extends('admin.layouts.master')

@section('show-header')

<link rel="stylesheet" href="{{ asset('admin/assets/styles/vendor/datatables.min.css') }}">

@endsection

@section('main-content')

@section('title','Manage Roles')

<div class="col-md-12 mb-4">
  <div class="card text-left">

    <div class="card-body">
      {{-- button to lunch modal --}}
      <button type="button" class="btn btn-info fa fa-plus-circle" data-toggle="modal" data-target="#exampleModal"> Add Role</button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form action="{{ route('role.store') }}" method="post">
              @csrf
              <div class="modal-header">
                <h5 align="center">Add Role</h5>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>Role Name:</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter permission name" required>
                </div>
                <label>Assign Permission:</label>
                <div class="row">
                  @foreach ($permissions as $permission)
                  <div class="col-lg-4">
                    <div class="fm-checkbox">
                      <label><input type="checkbox" name="permission[]" class="i-checks" 
                        value="{{$permission->id}}"><i></i> {{$permission->for}}</label>
                    </div>
                  </div>
                  @endforeach
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
              <th>Role</th>
              <th>Permission Assigned</th>
              <th width="10%">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($roles as $role)
            <tr>
              <td>{{ $role->name }}</td>
              <td>
                @foreach ($role->permissions as $permission)
                  {{$permission->for}},
                @endforeach
              </td>
              <td>
                {{-- button to lunch edit modal --}}
                <button type="button" class="btn btn-success fa fa-edit" data-toggle="modal" data-target="#a{{ $role->id }}"></button>

                <!-- Modal -->
                <div class="modal fade" id="a{{ $role->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <form action="{{ route('role.update', $role->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="modal-header">
                          <h5 align="center">Edit Role</h5>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Role Name:</label>
                            <input type="text" class="form-control" name="name" required 
                            value="{{ $role->name }}">
                          </div>
                          <label>Assign Permission:</label>
                          <div class="row">
                            @foreach ($permissions as $permission)
                            <div class="col-lg-4">
                              <div class="fm-checkbox">
                                <label><input type="checkbox" name="permission[]" class="i-checks" value="{{$permission->id}}"
                                  @foreach ($role->permissions as $role_permission)
                                    @if ($role_permission->id == $permission->id)
                                    checked
                                    @endif
                                  @endforeach
                                ><i></i> {{$permission->for}}</label>
                              </div>
                            </div>
                            @endforeach
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
                <form method="post" id="delete-form-{{$role->id}}" action="{{route('role.destroy', $role->id)}}" style="display: none;">

                  {{csrf_field()}}

                  {{method_field('DELETE')}}

                </form>

                <a href="" onclick="
                                    if(confirm('Are yoy sure, You want to delete this data?')){
                                      event.preventDefault();document.getElementById('delete-form-{{$role->id}}').submit();
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
              <th>Role</th>
              <th>Permission Assigned</th>
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