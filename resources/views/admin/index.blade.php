@extends('layouts.admin')

@section('content')

  <div class="admin-index-content-wrapper">

    <div class="admin-index-live-info clearfix">

      <div class="admin-live-info">
        <div class="admin-live-info-count">
          <span><i id="totalUser" class="fa fa-user"></i> {{$totalUsers}}</span>
        </div>
        <div class="admin-live-info-caption">
          <span>Total Users</span>
        </div>
      </div>



      <div class="admin-live-info">
        <div class="admin-live-info-count">
          <span><i id="totalBookings" class="fa fa-book"></i> {{$totalBookings}}</span>
        </div>
        <div class="admin-live-info-caption">
          <span>Total Bookings</span>
        </div>
      </div>


      <div class="admin-live-info">
        <div class="admin-live-info-count">
          <span><i id="totalPackages" class="fa fa-product-hunt"></i> {{$totalPackages}}</span>
        </div>
        <div class="admin-live-info-caption">
          <span>Total Packages</span>
        </div>
      </div>

      <div class="admin-live-info">
        <div class="admin-live-info-count">
          <span><i id="totalEmployees" class="fa fa-briefcase"></i> {{$totalEmployees}}</span>
        </div>
        <div class="admin-live-info-caption">
          <span>Total Employees</span>
        </div>
      </div>

      <div class="admin-live-info">
        <div class="admin-live-info-count">
          <span><i id="totalAdmins" class="fa fa-briefcase"></i> {{$totalAdmins}}</span>
        </div>
        <div class="admin-live-info-caption">
          <span>Total Administrators</span>
        </div>
      </div>

      <div class="admin-live-info">
        <div class="admin-live-info-count">
          <span><i id="totalSubscribers" class="fa fa-male"></i> {{$totalSubscribers}}</span>
        </div>
        <div class="admin-live-info-caption">
          <span>Total Subscribers</span>
        </div>
      </div>


    </div>


    <div class="admin-index-notification-pannel">
    </div>


  </div>

@stop
