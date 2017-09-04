@extends('layouts.admin')

@section('content')

<div class="admin-content-header">
  <h2><i class="fa fa-list" aria-hidden="true"></i> Staff Details</h2>
</div>

@if(Session::has('adminStaff_created'))

<div class="admin-notification-panel animated shake">
  <span><i class="fa fa-bell" aria-hidden="true"></i> Staff Succesfully Created</span>
</div>

@endif

@if(Session::has('adminStaff_update'))

<div class="admin-notification-panel animated shake">
  <span><i class="fa fa-bell" aria-hidden="true"></i> Staff Succesfully Updated</span>
</div>

@endif

<div class="admin-content-wrapper">

  <div class="admin-package-wrapper">

    <div class="admin-package-info clearfix">

      <div class="admin-package-info-content-control">
        <a id="" href="{{route('staff.edit', $staff->id)}}">Edit</a>
        <a id="" href="#" onclick="event.preventDefault();
                 document.getElementById('delStaff').submit();">Delete</a>

        {!! Form::open(['method' => 'DELETE', 'action' => ['StaffController@destroy', $staff->id], 'id'=>'delStaff']) !!}

        {!! Form::close() !!}
      </div>

      <div class="admin-package-info-content-left">

        <div class="admin-package-info-content">
          <h2>Name of Consultancy/Entity</h2>
          <span>Josh Travel</span>
        </div>
        <div class="admin-package-info-content">
          <h2>Name of Staff</h2>
          <span>{{$staff->name}}</span>
        </div>
        <div class="admin-package-info-content">
          <h2>Date of Birth</h2>
          <span>{{$staff->date_of_birth}}</span>
        </div>
        <div class="admin-package-info-content">
          <h2>Nationality</h2>
          <span>{{$staff->nationality}}</span>
        </div>
        <div class="admin-package-info-content">
          <h2>Years with Consultant/Entity</h2>
          <span>{{$staff->years}}</span>
        </div>
        <div class="admin-package-info-content">
          <h2>Membership of Professional Body</h2>
          <span>{{$staff->membership}}</span>
        </div>
        <div class="admin-package-info-content">
          <h2>Detailed Tasks Assigned</h2>
          <span>{{$staff->task}}</span>
        </div>
        <div class="admin-package-info-content">
          <h2>Key Qualifications</h2>
          <span>{{$staff->qualifications}}</span>
        </div>
        <div class="admin-package-info-content">
          <h2>Education</h2>
          <span>{{$staff->education}}</span>
        </div>
        <div class="admin-package-info-content">
          <h2>Employment Record</h2>
          <span>{{$staff->emp_record}}</span>
        </div>
        <div class="admin-package-info-content">
          <h2>Languages</h2>
          <span>{{$staff->languages}}</span>
        </div>
        <div class="admin-package-info-content">
          <h2>Certification</h2>
          <span>{{$staff->certification}}</span>
        </div>

      </div>

      <div class="admin-package-info-content-right">
        <div class="admin-package-info-content-image">
          <img src="{{$staff->photo ? $staff->photo : 'https://gitlab.kitware.com/assets/no_group_avatar-4a9d347a20d783caee8aaed4a37a65930cb8db965f61f3b72a2e954a0eaeb8ba.png'}}" alt="">
        </div>
      </div>

    </div>

  </div>

</div>


@stop
