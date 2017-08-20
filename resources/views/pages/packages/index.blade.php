@extends('layouts.app')

@section('content')



<div class="our-packages-wrapper">
  <div class="our-packages-header">
    <h1>Our Packages</h1>
  </div>

  <div class="our-packages-container clearfix">
    <div class="our-packages-sidebar">
      <h3>At Josh Travels</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <div class="our-packages-content clearfix">

      @if ($packages)
      @foreach ($packages as $package)

      <div class="our-package">
        <div class="our-package-img">
          <img src="{{$package->photo ? '/images/'.$package->photo : 'https://gitlab.kitware.com/assets/no_group_avatar-4a9d347a20d783caee8aaed4a37a65930cb8db965f61f3b72a2e954a0eaeb8ba.png'}}" alt="">
          <span>2 days</span>
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
            <p>{{$package->price}}</p>
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
