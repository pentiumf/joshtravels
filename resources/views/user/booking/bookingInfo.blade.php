@extends('layouts.app')

@section('content')


<div class="user-bookings-wrapper">
  <div class="user-bookings-container">

    <div class="user-bookings-header">
      <h1>Booked <span>{{$bookigDetail->created_at->diffForHumans()}}</span></h1>
    </div>


    <div class="user-bookings clearfix">

      <div class="user-booking-details clearfix">
        <div class="user-booking-details-left">
          <ul>
            <li><i class="fa fa-check"></i> <strong>Package Name:</strong> {{$packakeDetail->name}}</li>
            <li><i class="fa fa-check"></i> <strong>Price:</strong> {{$packakeDetail->price}}</li>
            <li><i class="fa fa-check"></i> <strong>Destination:</strong> {{$packakeDetail->destination}}</li>
            <li><i class="fa fa-check"></i> <strong>Duration:</strong> {{$packakeDetail->duration}}</li>
            <li><i class="fa fa-check"></i> <strong>Starting:</strong> {{$packakeDetail->depature_date}}</li>
            <li><i class="fa fa-check"></i> <strong>Ending:</strong> {{$packakeDetail->end_date}}</li>
          </ul>
          <p> <strong>Overview: </strong> {{$packakeDetail->overview}}</p> <br>
          <p> <strong>Description: </strong> {{$packakeDetail->description}}</p>
        </div>

        <div class="user-booking-details-right">
          <div class="user-booking-detail-img">
            <img src="{{$packakeDetail->photo ? '/images/'.$packakeDetail->photo : 'https://gitlab.kitware.com/assets/no_group_avatar-4a9d347a20d783caee8aaed4a37a65930cb8db965f61f3b72a2e954a0eaeb8ba.png'}}" alt="">
            <img src="" alt="">
          </div>
        </div>
      </div>

    </div>


  </div>
</div>


@stop
