@extends('admin.layouts.master')

@section('show-header')

<link rel="stylesheet" href="{{ asset('admin/assets/styles/vendor/datatables.min.css') }}">

@endsection

@section('main-content')

@section('title','Manage Bookings')

<div class="col-md-12 mb-4">
  <div class="card text-left">

    <div class="card-body">
      @include('include.message')
      <div class="table-responsive">
        <table id="deafult_ordering_table" class="display table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th>Phone Number</th>
              <th>Departure Date&Time</th>
              <th>Pickup Location</th>
              <th>Drop Off Location</th>
              <th>Quantity</th>
              <th>Status</th>
              <th>Return Date&Time</th>
              <th>Pickup Location</th>
              <th>Drop Off Location</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($bookings as $booking)
            <tr>
              <td>{{ $booking->phone }}</td>
              <td>{{ $booking->departure_dateTime }}</td>
              <td>{{ $booking->departure_pickup_location }}</td>
              <td>{{ $booking->departure_dropOff_location }}</td>
              <td>{{ $booking->quantity }}</td>
              <td>
                @if ($booking->status==1)
                  <button class="btn btn-success btn-xs">Approved</button>
                @else
                  <button class="btn btn-danger btn-xs">Pending</button>
                @endif
              </td>
              <td>
                @if ($booking->return_dateTime==NULL)
                  Not Available
                @else
                  {{ $booking->return_dateTime }}
                @endif
              </td>
              <td>
                @if ($booking->return_pickup_location==NULL)
                  Not Available
                @else
                  {{ $booking->return_pickup_location }}
                @endif
              </td>
              <td>
                @if ($booking->return_dropOff_location==NULL)
                  Not Available
                @else
                  {{ $booking->return_dropOff_location }}
                @endif
              </td>
              <td>
                @if ($booking->status==0)
                  <form action="{{ route('booking.update', $booking->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="status" value="1">
                    <button type="submit" class="btn btn-success fa fa-check"></button>
                  </form>
                @else 
                  <form action="{{ route('booking.update', $booking->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="status" value="0">
                    <button type="submit" class="btn btn-danger fa fa-close"></button>
                  </form>   
                @endif
              </td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>Phone Number</th>
              <th>Departure Date&Time</th>
              <th>Pickup Location</th>
              <th>Drop Off Location</th>
              <th>Quantity</th>
              <th>Status</th>
              <th>Return Date&Time</th>
              <th>Pickup Location</th>
              <th>Drop Off Location</th>
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