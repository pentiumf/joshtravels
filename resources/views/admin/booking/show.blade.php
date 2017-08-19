@extends('layouts.admin')

@section('content')

<div class="admin-content-header">
  <h2><i class="fa fa-list" aria-hidden="true"></i> Customer Booking Information</h2>
</div>

<div class="admin-content-wrapper">

  <div class="admin-booking-info">

    <div class="admin-booking-info-Cdetails">
      <h2>Customer Detail</h2>
      <ul>
        <li><span>Name</span>  {{$bookingDetail->name}}</li>
        <li><span>Email</span>  {{$bookingDetail->email}}</li>
        <li><span>Contact Number</span>  {{$bookingDetail->contact_number}}</li>
        <li><span>Postal Address</span>  {{$bookingDetail->postal_address}}</li>
        <li><span>Country Of Origin</span>  {{$bookingDetail->country->nicename}}</li>
      </ul>
    </div>

    <div class="admin-booking-info-Cdetails">
      <h2>Package Detail</h2>
      <ul>
        <li><span>Package Name</span> {{$bookedPackage->name}}</li>
        <li><span>Price</span> {{$bookedPackage->price}}</li>
        <li><span>Destination</span> {{$bookedPackage->destination}}</li>
      </ul>
    </div>

  </div>

</div>

@stop
