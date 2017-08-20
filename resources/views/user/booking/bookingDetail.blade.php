@extends('layouts.app')

@section('content')

<div class="user-bookings-wrapper">
  <div class="user-bookings-container">

    <div class="user-bookings-header">
      <h1>Your Booking Details</h1>
      <p>We use this details to process all your bookings</p>
    </div>


    <div class="user-bookings clearfix">

      <div class="user-booking-access-info">
        <ul>
          <li><strong>Name:</strong> {{$bookingdetail->name}}</li>
          <li><strong>Email:</strong> {{$bookingdetail->email}}</li>
          <li><strong>Contact Number:</strong> {{$bookingdetail->contact_number}}</li>
          <li><strong>Postal Address:</strong> {{$bookingdetail->postal_address}}</li>
          <li><strong>Country:</strong> {{$bookingdetail->country->nicename}}</li>
          <li><strong>Passport Info:</strong> {{$bookingdetail->passport_info}}</li>
        </ul>
        <a href="{{route('user.bookingDetailsEdit', $bookingdetail->id)}}">Edit Details</a>
      </div>

    </div>


  </div>
</div>


@stop
