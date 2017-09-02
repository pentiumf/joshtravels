@extends('layouts.app')

@section('content')

  <div id="about-us" class="owl-carousel">
    <div class="item" style="background-image: url(http://res.cloudinary.com/hjp6lmmoa/image/upload/v1503758690/jT__99_ylbg3l.jpg);">

    </div>
    <div class="item" style="background-image: url(http://res.cloudinary.com/hjp6lmmoa/image/upload/v1503758672/jT__97_ha6ji7.jpg);">

    </div>
    <div class="item" style="background-image: url(http://res.cloudinary.com/hjp6lmmoa/image/upload/v1503758589/jT__71_ngmc4e.jpg);">

    </div>
    <div class="item" style="background-image: url(https://res.cloudinary.com/hjp6lmmoa/image/upload/v1503758671/jT__92_yekwl2.jpg);">

    </div>
    <div class="item" style="background-image: url(http://res.cloudinary.com/hjp6lmmoa/image/upload/v1503758685/jT__87_gq3oyv.jpg);">

    </div>
    <div class="item" style="background-image: url(http://res.cloudinary.com/hjp6lmmoa/image/upload/v1503758646/jT__80_m6na4t.jpg);">

    </div>
  </div>

  <div id="company-profile-wrapper">
    <div class="company-profile-header">
      <h2>Company Profile</h2>
    </div>

    <div class="company-profile">
      <div class="company-profile-text">
        <p>
          Founded in 2012, <b>Josh Travel & Tours Limited</b> is a LIMITED LIABILITY COMPANY INCORPORATED under the laws of Ghana. Being a fully integrated high performance travel and tours firm, JOSH Travels is dedicated to delivering quality, efficient and safe travel solutions to its customers.
        </p>
        <p>
          As a leading provider of global corporate travel management, JOSH Travels simplifies and streamlines the business of travel. This benefits our client’s organization on every level: from the bottom line to the business traveler.
        </p>
      </div>

      <div class="company-profile-text">
        <h5>Our Mission</h5>
        <p>
          Our Mission is to provide the most convenient and economical travel & Tour facilities to the Ghana and the rest of the world.
        </p>
      </div>

      <div class="company-profile-text">
        <h5>Our Vision</h5>
        <p>
          The Vision of Josh Travels is to become one of the top rated service provider in the travel industry around the globe.
        </p>
      </div>

      <div class="company-profile-text">
        <h5>Our Business Philosophy</h5>
        <p>
          One of the qualities that set JOSH Travels apart from most agencies is the belief that though corporate travel needs may be similar, there are never the same for any two (2) corporate clients. Care and time is taken to develop packages most complimentary to the specific needs and unique circumstances of every patron, and no effort is spared to execute these packages to perfection. This derives from our key objective of creating value for our clients delivering efficient, safe and quality services.
        </p>
      </div>

    </div>
  </div>

  <div class="about-us-team clearfix">

    <h2>Meet The Team</h2>

    @if($staffs)



    <div  class="out-team-members clearfix">

      @foreach($staffs as $staff)

      <figure class="snip1256">
      <img src="{{$staff->photo}}" alt="photo"/>
      <figcaption>
        <h3>{{$staff->name}}</h3>
        <p>{{$staff->position}}</p><a href="{{route('team', $staff->id)}}" class="read-more">Read More</a>
      </figcaption>
      </figure>

      @endforeach

    </div>

    @endif


  </div>
@stop
