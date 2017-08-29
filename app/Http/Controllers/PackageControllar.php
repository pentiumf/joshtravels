<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\BookTourRequest;
use Illuminate\Support\Facades\Session;
use App\Package;
use App\Country;
use App\User;
use App\Bookingdetail;
use App\Joshbooking;


class PackageControllar extends Controller
{
    public function index() {

      $packages = Package::orderBy('id', 'desc')->get();
      return view('pages.packages.index', compact('packages'));
    }

    public function details($id) {
      $package = Package::findOrFail($id);
      $recommendedPackages = Package::limit(3)->get();
      return view('pages.packages.details', compact('package', 'recommendedPackages'));
    }

    public function inbound() {
      $packages = Package::orderBy('id', 'desc')->where('package_category_id', '1')->get();
      //$packages = Package::orderBy('id', 'desc')->get();
      //return "Nick";
      return view('pages.packages.inbound', compact('packages'));
    }

    public function outbound() {
      $packages = Package::orderBy('id', 'desc')->where('package_category_id', '2')->get();
      //return "Freda";
      return view('pages.packages.outbound', compact('packages'));
    }

    public function book($id) {
      $package_id = $id;

      if (Auth::guest()) {
        $countries = Country::pluck('nicename', 'id')->all();
        return view('pages.packages.guestBooking', compact('package_id', 'countries'));
      }
      elseif (Auth::User()) {
        $user = Auth::user();
        $userBookingInfo = $user->bookingdetail;
        $countries = Country::pluck('nicename', 'id')->all();
        return view('pages.packages.userBooking', compact('package_id', 'countries', 'userBookingInfo', 'user'));
      }

    }

    public function store(BookTourRequest $request) {
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
          Session::flash('booking_made', 'Your Booking Has Been Succesfully Recievied');
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
        Session::flash('booking_made', 'Your Booking Has Been Succesfully Recievied');
        //return view('pages.packages.bookingMsg');
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
        Session::flash('booking_made', 'Your Booking Has Been Succesfully Recievied');
        return redirect('packages');
      } else {
        Session::flash('already_booked', 'Sorry You Already Booked This Package');
        return redirect('packages');
      }

    }

}
