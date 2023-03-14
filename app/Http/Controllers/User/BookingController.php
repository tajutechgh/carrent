<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\Booking;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[

            'departure_dateTime'=>'required',
            'departure_pickup_location'=>'required',
            'departure_dropOff_location'=>'required',
            'phone'=>'required',
            'quantity'=>'required',
        ]);

        $booking = new Booking;

        $booking->departure_dateTime=$request->departure_dateTime;
        $booking->departure_pickup_location=$request->departure_pickup_location;
        $booking->departure_dropOff_location=$request->departure_dropOff_location;
        $booking->return_dateTime=$request->return_dateTime;
        $booking->return_pickup_location=$request->return_pickup_location;
        $booking->return_dropOff_location=$request->return_dropOff_location;
        $booking->phone=$request->phone;
        $booking->quantity=$request->quantity;
        $booking->status=$request->status;

        $booking->save();

        return redirect(route('home'))->with('message','Your booking was successful you will hear from us soon. Thank you!!!');
    }
}
