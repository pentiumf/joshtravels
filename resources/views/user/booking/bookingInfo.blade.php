@extends('layouts.app')

@section('content')

  <h1>This is the the users bookings</h1>

  <h1>Booking Details</h1>
  <p>Booked : {{$bookigDetail->created_at->diffForHumans()}}</p>


  <h2>Package Details</h2>
  <p>Name: {{$packakeDetail->name}}</p>
  <p>Price: {{$packakeDetail->price}}</p>
  <p>Destination {{$packakeDetail->destination}}</p>

@stop
