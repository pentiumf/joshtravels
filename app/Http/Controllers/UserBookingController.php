<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserEditBookDetailsRequset;
use App\User;
use App\Package;
use App\Joshbooking;
use App\Bookingdetail;
use App\Country;

class UserBookingController extends Controller
{
    //This display all user bookings
    public function bookings() {
      $user = Auth::user();
      $userBookings = $user->joshbookings;

      if ($userBookings->count() > 0) {
        foreach ($userBookings as $userBooking) {
          $packages[] = Package::findOrFail($userBooking->package_id);

        }
      }

      return view('user.booking.bookings', compact('packages', 'userBookings'));
    }

    //This display a given booking Info
    public function bookingInfo($id) {
      $user = Auth::user();
      $userBookings = $user->joshbookings;
      $bookigDetail = $userBookings->where('package_id', $id)->first();
      $packakeDetail = Package::findOrFail($id);

      //return $bookigDetail;
      return view('user.booking.bookingInfo', compact('bookigDetail', 'packakeDetail'));

    }

    //This display users booking details
    public function bookingDetails() {
      $user = Auth::user();
      $bookingdetail = $user->bookingdetail;

      //return $bookingdetail;
      return view('user.booking.bookingdetail', compact('bookingdetail'));
    }

    //This is for editting the users booking details
    public function bookingDetailsEdit($id) {
      $detail = Bookingdetail::findOrFail($id);
      $countries = Country::pluck('nicename', 'id')->all();

      return view('user.booking.edtiBookingDetails', compact('detail', 'countries'));
    }

    //Store edit
    public function update(UserEditBookDetailsRequset $request, $id) {
      $bookingDetail = Bookingdetail::findOrFail($id);
      $input = $request->all();

      if (Auth::id() == $input['user_id']) {
        $bookingDetail->update($input);
        return redirect('user/booking-details');
      } else {
        return redirect('user/booking-details');
      }

    }

    //Delete userBookings
    // public function delete($id) {
    //
    // }



}
