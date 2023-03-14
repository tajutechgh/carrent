@extends('admin.layouts.master')

@section('show-header')

<link rel="stylesheet" href="{{ asset('admin/assets/styles/vendor/datatables.min.css') }}">

@endsection

@section('main-content')

@section('title','Manage Users')

<div class="col-md-12 mb-4">
  <div class="card text-left">

    <div class="card-body">
      {{-- button to lunch modal --}}
      <button type="button" class="btn btn-info fa fa-plus-circle" data-toggle="modal" data-target="#exampleModal"> Add User</button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form action="{{ route('user.store') }}" method="post">
              @csrf
              <div class="modal-header">
                <h5 align="center">Add User</h5>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>Name:</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter name" required>
                </div>
                <div class="form-group">
                  <label>Username:</label>
                  <input type="text" class="form-control" name="username" placeholder="Enter username" required>
                </div>
                <div class="form-group">
                  <label>Password:</label>
                  <input type="password" class="form-control" name="password" placeholder="Enter password" required>
                </div>
                <div class="form-group">
                  <label>Confirm Password:</label>
                  <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required>
                </div>
                <label>Assign Role:</label>
                <div class="row">
                  @foreach ($roles as $role)
                  <div class="col-lg-4">
                    <div class="fm-checkbox">
                      <label><input type="checkbox" name="role[]" class="i-checks" value="{{$role->id}}"><i></i> {{$role->name}}</label>
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
              <th>Name</th>
              <th>Username</th>
              <th>Assigned Role</th>
              <th width="10%">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
            <tr>
              <td>{{ $user->name }}</td>
              <td>{{ $user->username }}</td>
              <td>
                @foreach($user->roles as $role)
                {{$role->name}},
                @endforeach
              </td>
              <td>
                {{-- button to lunch edit modal --}}
                <button type="button" class="btn btn-success fa fa-edit" data-toggle="modal" data-target="#a{{ $user->id }}"></button>

                <!-- Modal -->
                <div class="modal fade" id="a{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <form action="{{ route('user.update', $user->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="modal-header">
                          <h5 align="center">Edit User</h5>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label>Name:</label>
                            <input type="text" class="form-control" name="name" required 
                            value="{{ $user->name }}">
                          </div>
                          <div class="form-group">
                            <label>Username:</label>
                            <input type="text" class="form-control" name="username" required
                            value="{{ $user->username }}">
                          </div>
                          <label>Assign Role:</label>
                          <div class="row">
                            @foreach ($roles as $role)
                            <div class="col-lg-4">
                              <div class="fm-checkbox">
                                <label><input type="checkbox" name="role[]" class="i-checks" 
                                  value="{{$role->id}}"
                                  @foreach ($user->roles as $user_role)
                                    @if ($user_role->id == $role->id)
                                      checked
                                    @endif
                                  @endforeach
                                  ><i></i> {{$role->name}}</label>
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
                <form method="post" id="delete-form-{{$user->id}}" action="{{route('user.destroy', $user->id)}}" style="display: none;">

                  {{csrf_field()}}

                  {{method_field('DELETE')}}

                </form>

                <a href="" onclick="
                                    if(confirm('Are yoy sure, You want to delete this data?')){
                                      event.preventDefault();document.getElementById('delete-form-{{$user->id}}').submit();
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
              <th>Name</th>
              <th>Username</th>
              <th>Assigned Role</th>
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