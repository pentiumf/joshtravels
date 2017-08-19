<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Package;
use App\Country;
use App\User;
use App\Bookingdetail;
use App\Joshbooking;


class PackageControllar extends Controller
{
    public function index() {
      $packages = Package::all();
      return view('pages.packages.index', compact('packages'));
    }

    public function details($id) {
      $package = Package::findOrFail($id);
      return view('pages.packages.details', compact('package'));
    }

    public function book($id) {
      $package_id = $id;

      if (Auth::guest()) {
        $countries = Country::pluck('name', 'id')->all();
        return view('pages.packages.guestBooking', compact('package_id', 'countries'));
      }
      elseif (Auth::User()) {
        $user = Auth::user();
        $userBookingInfo = $user->bookingdetail;
        $countries = Country::pluck('name', 'id')->all();
        return view('pages.packages.userBooking', compact('package_id', 'countries', 'userBookingInfo', 'user'));
      }

    }

    public function store(Request $request) {
      //return $request->all();
      if (Auth::user()) {
        $input = $request->except('package_id');
        $packageId = $request['package_id'];
        $userId = $input['user_id'];
        $userRealId = Auth::id();

        if ($userId == Auth::id()){
          $booking = Bookingdetail::create($input);
          $insertedId = $booking->id;

          $joshGet = new Joshbooking;
          $joshGet->package_id = $packageId;
          $joshGet->bookingdetail_id = $insertedId;
          $joshGet->user_id = $userId;
          $joshGet->save();
          return redirect('packages');

        } else {
           return redirect('packages');
        }
      }

      elseif (Auth::guest()) {
        $guestInput = $request->except('package_id', 'user_id');
        $guestPackageId = $request['package_id'];

        $guestBooking = Bookingdetail::create($guestInput);
        $guestInsertedId = $guestBooking->id;

        $joshGetGuest = new Joshbooking;
        $joshGetGuest->package_id = $guestPackageId;
        $joshGetGuest->bookingdetail_id = $guestInsertedId;
        $joshGetGuest->save();
        return redirect('packages');
      }

    }

    public function userBookStore(Request $request) {

      //Booking Requsets
      $input = $request->all();
      $user = Auth::user();
      $packageId = $input['package_id'];
      $userId = Auth::id();
      $bookingDetailsId = $user->bookingdetail->id;

      //Booking Validation
      $userBookings = $user->joshbookings;
      $shouldBookUser = true;
      foreach ($userBookings as $userBooking) {
        $packageIDs[] = $userBooking->package_id;

        foreach ($packageIDs as $packageID) {
          if ($packageID == $packageId) {
            //echo "You already booked this package";
            $shouldBookUser = false;
            break;
          }
        }
      }

      //Check If User Should Be Booked
      if ($shouldBookUser === true) {
        //Book User
        $joshBookUser = new Joshbooking;
        $joshBookUser->package_id = $packageId;
        $joshBookUser->user_id = $userId;
        $joshBookUser->bookingdetail_id = $bookingDetailsId;
        $joshBookUser->save();
        echo "Booking Saved";
      } else {
        //Should not book user
        echo "You already booked this package";
      }

    }

}
