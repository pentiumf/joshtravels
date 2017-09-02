@extends('layouts.app')

@section('content')

  <div class="our-team-wrapper">
    <div class="our-team-banner">
      <div class="our-team-banner-cap animated bounceInDown">
        <h2>{{$staff->name}}</h2>
        <span>{{$staff->profession}}</span>
      </div>

      <div class="staff-profile-pic animated swing">
        <img src="{{$staff->photo}}" alt="">
      </div>
    </div>

    <div class="out-team-members-deatils clearfix">
      <div class="staff-details animated bounceInUp">

        <div class="staff-detail">

          <div class="staff-detail-wrap">
            <h2><i class="fa fa-folder-open" aria-hidden="true"></i> Professional Profile</h2>
          </div>
          <div class="staff-detail-wrap">
            <b>Name of Staff <i class="fa fa-caret-right" aria-hidden="true"></i></b>  <span>{{$staff->name}}</span>
          </div>

          <div class="staff-detail-wrap">
            <b>Profession <i class="fa fa-caret-right" aria-hidden="true"></i></b>  <span>{{$staff->profession}}</span>
          </div>

          <div class="staff-detail-wrap">
            <b>Date of Birth <i class="fa fa-caret-right" aria-hidden="true"></i></b>  <span>{{$staff->date_of_birth}}</span>
          </div>

          <div class="staff-detail-wrap">
            <b>Years with Consultant/Entity <i class="fa fa-caret-right" aria-hidden="true"></i></b>  <span>{{$staff->years}}</span>
          </div>

          <div class="staff-detail-wrap">
            <b>Nationality <i class="fa fa-caret-right" aria-hidden="true"></i></b>  <span>{{$staff->nationality}}</span>
          </div>

          <div class="staff-detail-wrap">
            <b>Membership of Professional Body <i class="fa fa-caret-right" aria-hidden="true"></i></b>  <span>{{$staff->membership}}</span>
          </div>

          <div class="staff-detail-wrap">
            <b>Detailed Tasks Assigned <i class="fa fa-caret-right" aria-hidden="true"></i></b>  <span>{{$staff->task}}</span>
          </div>

          <div class="staff-detail-wrap">
            <b>Key Qualifications <i class="fa fa-caret-right" aria-hidden="true"></i></b>  <span>{{$staff->qualifications}}</span>
          </div>

          <div class="staff-detail-wrap">
            <b>Education <i class="fa fa-caret-right" aria-hidden="true"></i></b>  <span>{{$staff->education}}</span>
          </div>

          <div class="staff-detail-wrap">
            <b>Employment Record <i class="fa fa-caret-right" aria-hidden="true"></i></b>  <span>{{$staff->emp_record}}</span>
          </div>

          <div class="staff-detail-wrap">
            <b>Languages <i class="fa fa-caret-right" aria-hidden="true"></i></b>  <span>{{$staff->languages}}</span>
          </div>

          <div class="staff-detail-wrap">
            <b>Certification <i class="fa fa-caret-right" aria-hidden="true"></i></b>  <span>{{$staff->certification}}</span>
          </div>

          <div class="staff-detail-exit">
            <a href="{{ URL::previous() }}">Go Back</a>
          </div>

        </div>

      </div>
    </div>

  </div>

@stop
