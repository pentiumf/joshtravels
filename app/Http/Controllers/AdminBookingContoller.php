<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Joshbooking;

class AdminBookingContoller extends Controller
{
    public function index() {
      $bookings = Joshbooking::orderBy('id', 'desc')->get();
      return view('admin.booking.index', compact('bookings'));
    }

    public function show($id) {
      $booking = Joshbooking::findOrFail($id);
      $bookingDetail = $booking->booker;
      $bookedPackage = $booking->package;
      $customerInfo = $booking->user;
      return view('admin.booking.show', compact('booking','bookingDetail','bookedPackage', 'customerInfo'));
    }

}
