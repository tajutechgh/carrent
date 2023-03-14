<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Model\user\Booking;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function bookingReport()
    {
        return view('admin.report');
    }

    public function searchBookingReport()
    {

        $startDate = Input::get('startdate');

        $endDate = Input::get('enddate');

        $booking = Booking::whereBetween('created_at', [$startDate,$endDate])->get();

        if (count($booking) > 0) {

            return view('admin.report')->withDetails($booking)->withQuery($startDate,$endDate);
        }

        return view('admin.report')->withMessage('No booking report available!');
    }
}
