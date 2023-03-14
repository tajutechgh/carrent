<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\Driver;
use App\Model\user\Booking;
use App\Model\admin\Vehicle;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $countDrivers = Driver::count();

        $countBookings = Booking::count();

        $countVehicles = Vehicle::count();

        $currentBookings = Booking::latest()->where('status','=',0)->limit(4)->get();

        return view('admin.home',compact('countDrivers','countBookings','countVehicles','currentBookings'));
    }
}
