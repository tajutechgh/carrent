@extends('admin.layouts.master')

@section('show-header') 

<link rel="stylesheet" href="{{ asset('css/demo.css') }} "/>
<link rel="stylesheet" href="{{ asset('css/theme2.css') }} "/>

@endsection

@section('main-content')

@section('title','Dashboard')

<div class="row">
  <!-- ICON BG -->
  <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
      <div class="card-body text-center">
        <i class="i-Add-User"></i>
        <div class="content">
          <p class="text-muted mt-2 mb-0">Drivers</p>
          <p class="text-primary text-24 line-height-1 mb-2">{{ $countDrivers }}</p>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
      <div class="card-body text-center">
        <i class="i-Car"></i>
        <div class="content">
          <p class="text-muted mt-2 mb-0">Vehicles</p>
          <p class="text-primary text-24 line-height-1 mb-2">{{ $countVehicles }}</p>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
      <div class="card-body text-center">
        <i class="i-Book"></i>
        <div class="content">
          <p class="text-muted mt-2 mb-0">Bookings</p>
          <p class="text-primary text-24 line-height-1 mb-2">{{ $countBookings }}</p>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
      <div class="card-body text-center">
        <i class="i-Clock"></i>
        <div class="content">
          <p class="text-muted mt-2 mb-0">Time</p>
          <p class="text-primary text-24 line-height-1 mb-2">{{Carbon\carbon::now()->format('h:i:s')}}</p>
        </div>
      </div>
    </div>
  </div>

</div>

<div class="row">
  <div class="col-lg-7 col-md-12">
    <div class="card mb-4">
      <div class="card-body">
        <div class="card-title">Current Bookings</div>
        <table class="table table-striped">
          <thead>
            <th>Contact</th>
            <th>Dep. Date&Time</th>
            <th>Pickup Location</th>
            <th>Status</th>
          </thead>
          <tbody>
            @foreach ($currentBookings as $booking)
            <tr>
              <td>{{ $booking->phone }}</td>
              <td>{{ $booking->departure_dateTime }}</td>
              <td>{{ $booking->departure_pickup_location }}</td>
              <td>
                <button class="btn btn-danger btn-xs">Pending</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-lg-5 col-sm-12">
    <div class="card mb-4">
      <div class="card-body">
        <div id="caleandar"></div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('show-footer')
  
<script type="text/javascript" src="{{ asset('js/caleandar.js') }} "></script>
<script type="text/javascript" src="{{ asset('js/demo.js') }} "></script>

@endsection