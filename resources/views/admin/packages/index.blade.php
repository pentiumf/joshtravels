@extends('layouts.admin')

@section('content')



<div class="admin-content-header">
  <h2><i class="fa fa-list" aria-hidden="true"></i> List Of All Tour Package</h2>
  <h2>Total {{$packages->count()}}</h2>
</div>

@if(Session::has('adminPackage_created'))

<div class="admin-notification-panel animated shake">
  <span><i class="fa fa-bell" aria-hidden="true"></i> Package Succesfully Created</span>
</div>

@endif

@if(Session::has('adminPackage_updated'))

<div class="admin-notification-panel animated shake">
  <span><i class="fa fa-bell" aria-hidden="true"></i> Package Succesfully Updated</span>
</div>

@endif

@if(Session::has('adminPackage_deleted'))

<div class="admin-notification-panel animated shake">
  <span><i class="fa fa-bell" aria-hidden="true"></i> Package Succesfully Deleted</span>
</div>

@endif

<div class="admin-content-wrapper">

  <div class="admin-package-wrapper clearfix">
    @if ($packages)
    @foreach ($packages as $package)

    <div class="admin-package">
      <div class="admin-package-image">
        <img src="/storage/packages/{{$package->photo ? $package->photo : 'https://gitlab.kitware.com/assets/no_group_avatar-4a9d347a20d783caee8aaed4a37a65930cb8db965f61f3b72a2e954a0eaeb8ba.png'}}" alt="">
      </div>
      <div class="admin-package-cap">
        <div class="admin-package-cap-left">
          <h5>{{$package->name}}</h5>
          <span>{{$package->created_at->diffForHumans()}}</span>
        </div>
      </div>
      <a href="{{route('package.show',  $package->id)}}"></a>
    </div>

    @endforeach
    @endif

  </div>



@stop
