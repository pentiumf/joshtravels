@extends('layouts.app')

@section('content')

  <div class="our-pacakge-details-wrapper">

    <div class="our-pacakge-details-bg">
      <div class="our-pacakge-details-bg-cap">
        <div class="our-pacakge-details-bg-cap-left">
          <h2>{{$package->name}}</h2>
          <div class="pack-wrap clearfix">
            <div class="pack-left">
              <span><i class="fa fa-tag"></i></span>
              <p>$100</p>
            </div>
            <div id="packLeftLast" class="pack-left">
              <span><i class="fa fa-globe"></i></span>
              <p>Spain Barcalos</p>
            </div>
          </div>
        </div>
        <div class="our-pacakge-details-bg-cap-right">
          <div class="book-now-pack">
            <a href="{{ route('packages.book', $package->id) }}"><i class="fa fa-book"></i> Book This Tour Now</a>
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
          <h3>Package Includes</h3>
          <p>Visa fee</p>
          <p>Flight Tickets</p>
          <p>Secure Flight</p>
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
          <p>
            <i class="fa fa-tag"></i>
            <span>{{$package->price}}</span>
          </p>
        </div>
        <div class="our-pacakge-details-booker">
          <div class="">
            <a href="{{ route('packages.book', $package->id) }}"><i class="fa fa-book"></i> Book Now</a>
          </div>
        </div>
      </div>
      <div class="our-pacakge-details-bottom">
        <div class="our-pacakge-details-recommend">
          <div class="recommend-pack clearfix">
            <h2>Recommended Tours</h2>

            @if($recommendedPackages)
            @foreach($recommendedPackages as $recommendedPackage)
            <div class="rec-package-item">
                <img class="img-circle" src="{{$recommendedPackage->photo ? $recommendedPackage->photo : 'https://gitlab.kitware.com/assets/no_group_avatar-4a9d347a20d783caee8aaed4a37a65930cb8db965f61f3b72a2e954a0eaeb8ba.png'}}" alt="">
                <div class="package-caption clearfix">
                  <div class="package-caption-left">
                    <div class="package-caption-name">
                      <h2>{{$recommendedPackage->name}}</h2>
                    </div>
                    <div class="package-caption-rating">
                      <ul>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="package-caption-right">
                    <div class="package-caption-save">
                      <span><i class="fa fa-bookmark-o" aria-hidden="true"></i></span>
                    </div>
                    <div class="package-caption-price">
                      <span>{{$recommendedPackage->price}}</span>
                    </div>
                  </div>
                </div>
                <div class="package-day-night">
                  <span>{{$recommendedPackage->duration}}</span>
                </div>
                <a href="{{route('packages.details', $recommendedPackage->id)}}"></a>
            </div>
            @endforeach
            @endif
          </div>
        </div>
      </div>
    </div>

  </div>

@stop
