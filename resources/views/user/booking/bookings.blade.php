@extends('layouts.app')

@section('content')

  <div class="user-bookings-wrapper">
    <div class="user-bookings-container">

      <div class="user-bookings-header">
        <h1>Your Bookings</h1>
      </div>


      <div class="user-bookings clearfix">

        @if ($packages)
        @foreach ($packages as $package)

        <div class="admin-package">
          <div class="admin-package-image">
            <img src="{{$package->photo ? '/images/'.$package->photo : 'https://gitlab.kitware.com/assets/no_group_avatar-4a9d347a20d783caee8aaed4a37a65930cb8db965f61f3b72a2e954a0eaeb8ba.png'}}" alt="">
          </div>
          <div class="admin-package-cap">
            <div class="admin-package-cap-left">
              <h5>{{$package->name}}</h5>
              <span>view details</span>
            </div>
          </div>
          <a href="{{route('user.bookingInfo', $package->id)}}"></a>
        </div>

        @endforeach
        @endif

      </div>


    </div>
  </div>


@stop
