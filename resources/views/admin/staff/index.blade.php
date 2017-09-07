@extends('layouts.admin')

@section('content')



<div class="admin-content-header">
  <h2><i class="fa fa-list" aria-hidden="true"></i> List Of All Staffs</h2>
  <h2>Total {{$staffs->count()}}</h2>
</div>

@if(Session::has('adminStaff_delete'))

<div class="admin-notification-panel animated shake">
  <span><i class="fa fa-bell" aria-hidden="true"></i> Staff Succesfully Deleted</span>
</div>

@endif

<div class="admin-content-wrapper">

  <div class="admin-package-wrapper clearfix">
    @if ($staffs)
    @foreach ($staffs as $staff)

    <div class="admin-package">
      <div class="admin-package-image">
        <img src="/storage/staff/{{$staff->photo ? $staff->photo : 'https://gitlab.kitware.com/assets/no_group_avatar-4a9d347a20d783caee8aaed4a37a65930cb8db965f61f3b72a2e954a0eaeb8ba.png'}}" alt="">
      </div>
      <div class="admin-package-cap">
        <div class="admin-package-cap-left">
          <h5>{{str_limit($staff->name, 25)}}</h5>
          <span>{{str_limit($staff->position, 25)}}</span>
        </div>
      </div>
      <a href="{{route('staff.show',  $staff->id)}}"></a>
    </div>

    @endforeach
    @endif

  </div>



@stop
