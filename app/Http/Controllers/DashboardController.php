<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $booking = Booking::all()->sortByDesc('id');;
        return view('dashboard.dashboard')->with('bookings', $booking);
    }
}
