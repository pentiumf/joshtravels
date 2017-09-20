@extends('layouts.app')

@section('content')

  <div class="our-pacakge-details-wrapper">

    <div class="our-pacakge-details-bg" style="background-image: url(/images/{{$package->photo}});">
      <div class="our-pacakge-details-bg-cap">
        <div class="our-pacakge-details-bg-cap-left">
          <h2>{{$package->name}}</h2>
          <div class="pack-wrap clearfix">
            <!-- <div class="pack-left">
              <span><i class="fa fa-tag"></i></span>
              <p>$100</p>
            </div> -->
            <div id="packLeftLast" class="pack-left">
              <span><i class="fa fa-globe"></i></span>
              <p>{{$package->destination}}</p>
            </div>
          </div>
        </div>
        <div class="our-pacakge-details-bg-cap-right">
          <div class="book-now-pack">
            <a href="{{ route('packages.book', $package->id) }}"><i class="fa fa-book"></i> Book This Tour</a>
          </div>
        </div>
      </div>
    </div>


    <div class="our-pacakge-details-container clearfix">
      <div class="our-pacakge-details-left">
        <div class="our-pacakge-details-content">
          <h3>Overview</h3>
          <p>{{$package->overview}}</p>
        </div>
        <div class="our-pacakge-details-content">
          <h3>Description</h3>
          <p>{{$package->description}}</p>
        </div>
        <div class="our-pacakge-details-content">
          <h3>Starting</h3>
          <p>{{$package->depature_date}}</p>
        </div>
        <div class="our-pacakge-details-content">
          <h3>Ending</h3>
          <p>{{$package->end_date}}</p>
        </div>
        <div class="our-pacakge-details-content">
          <!-- <h3>Package Includes</h3>
          <p>Visa fee</p>
          <p>Flight Tickets</p>
          <p>Secure Flight</p> -->
        </div>
      </div>
      <div class="our-pacakge-details-right">
        <div class="our-pacakge-details-box">
          <p>
            <i class="fa fa-globe"></i>
            <span>{{$package->destination}}</span>
          </p>
          <p>
            <i class="fa fa-clock-o"></i>
            <span>{{$package->duration}}</span>
          </p>
          <!-- <p>
            <i class="fa fa-tag"></i>
            <span>{{$package->price}}</span>
          </p> -->
          <p>
            <i class="fa fa-circle"></i>
            <span>{{$package->category->name}}</span>
          </p>
        </div>
        <div class="our-pacakge-details-booker">
          <div class="">
            <a href="{{ route('packages.book', $package->id) }}"><i class="fa fa-book"></i> Book Now</a>
          </div>
        </div>
      </div>
      <div class="our-pacakge-details-bottom">
        <!-- <div class="our-pacakge-details-recommend">
          <div class="recommend-pack clearfix">
            <h2>Recommended Tours</h2>


          </div>
        </div> -->
      </div>
    </div>

  </div>

@stop
