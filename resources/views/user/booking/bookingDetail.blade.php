@extends('layouts.app')

@section('content')

  <h1>Users booking Details</h1>

  <ul>
    <li>Name: {{$bookingdetail->name}}</li>
    <li>Email: {{$bookingdetail->email}}</li>
    <li>Contact Number: {{$bookingdetail->contact_number}}</li>
    <li>Postal Address: {{$bookingdetail->postal_address}}</li>
    <li>Country: {{$bookingdetail->country->nicename}}</li>
    <li>Passport Info: {{$bookingdetail->passport_info}}</li>
  </ul>

  <p><a href="{{route('user.bookingDetailsEdit', $bookingdetail->id)}}">Edit Details</a></p>


@stop
