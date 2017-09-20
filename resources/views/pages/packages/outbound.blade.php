@extends('layouts.app')

@section('content')

@if(Session::has('booking_made'))


<div class="flash-pop-message">
  <h2>Hello Customer</h2>
  <p>Your Booking Has Succesfully been submited, we will get back to you in a while. Thank You</p>
  <button id="bookingFlas">OK</button>
</div>

    <!-- <h1>{{session('booking_made')}}</h1> -->
@endif

@if(Session::has('already_booked'))


<div class="flash-pop-message">
  <h2>Hello Customer</h2>
  <p>Sorry, You have already booked this package.</p>
  <button id="already_bookedFlash">OK</button>
</div>

    <!-- <h1>{{session('booking_made')}}</h1> -->
@endif

<div class="our-packages-wrapper">
  <div class="our-packages-header">
    <h1>Outbound Packages</h1>
  </div>

  <div class="our-packages-container clearfix">
    <div class="our-packages-sidebar">
      <h3>Browse Categories</h3>
      <ul>
        <li><a href="{{route('packages')}}">All Packages</a></li>
        <li><a href="{{route('packages.outbound')}}">Out-Bound Packages</a></li>
        <li><a href="{{route('packages.inbound')}}">In-Bound Packages</a></li>
      </ul>
    </div>

    <div class="our-packages-content clearfix">

      @if ($packages)
      @foreach ($packages as $package)

      <div class="our-package">
        <div class="our-package-img">
          <img src="/images/{{$package->photo ? $package->photo : 'https://gitlab.kitware.com/assets/no_group_avatar-4a9d347a20d783caee8aaed4a37a65930cb8db965f61f3b72a2e954a0eaeb8ba.png'}}" alt="">
          <span>new</span>
        </div>
        <div class="our-package-cap clearfix">
          <div class="our-package-cap-left">
            <h4>{{$package->name}}</h4>
            <p>{{str_limit($package->overview, 70)}}</p>
            <ul>
              <li><i class="fa fa-plane"></i> <span>Destination:</span> {{$package->destination}}</li>
              <li><i class="fa fa-clock-o"></i> <span>Starting:</span> {{$package->depature_date}}</li>
              <li><i class="fa fa-clock-o"></i> <span>Ending:</span> {{$package->end_date}}</li>
            </ul>
          </div>
          <div class="our-package-cap-right">
            <span><i class="fa fa-tag"></i></span>
            <p>{{$package->duration}}</p>
            <!-- <p>{{$package->price}}</p> -->
            <p><a href="{{ route('packages.details', $package->id) }}">View Details</a></p>
          </div>
        </div>
      </div>

      @endforeach
      @endif

    </div>
  </div>
</div>

@stop
