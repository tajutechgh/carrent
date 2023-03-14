<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\Booking;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $bookings = Booking::latest()->get();

        return view('admin.booking.index',compact('bookings'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $booking = Booking::find($id);

        $booking->status = $request->status;

        $booking->save();

        return redirect()->back()->with('message','Booking updated successfully');
    }

    public function destroy($id)
    {
        //
    }
}
