@extends('layouts.admin')

@section('content')

<div class="admin-content-header">
  <h2><i class="fa fa-list" aria-hidden="true"></i> Tour Package Details</h2>
</div>

<div class="admin-content-wrapper">

  <div class="admin-package-wrapper">

    <div class="admin-package-info clearfix">

      <div class="admin-package-info-content-control">
        <a id="adminPackageEditBtn" href="{{route('package.edit', $package->id)}}">Edit</a>
        <a id="adminPackageDelBtn" href="#" onclick="event.preventDefault();
                 document.getElementById('delPackage').submit();">Delete</a>

        {!! Form::open(['method' => 'DELETE', 'action' => ['AdminPackageContoller@destroy', $package->id], 'id'=>'delPackage']) !!}

				{!! Form::close() !!}
      </div>

      <div class="admin-package-info-content-left">
        <div class="admin-package-info-content">
          <h3>{{$package->name}}</h3>
        </div>
        <div class="admin-package-info-content">
          <h4><i class="fa fa-tag"></i> Price</h4>
          <h5>{{$package->price}}</h5>
        </div>
        <div class="admin-package-info-content">
          <h4><i class="fa fa-calendar"></i> Duration</h4>
          <h5>{{$package->duration}}</h5>
        </div>
        <div class="admin-package-info-content">
          <h4><i class="fa fa-circle"></i> Overview</h4>
          <p>{{$package->overview}}</p>
        </div>
        <div class="admin-package-info-content">
          <h4><i class="fa fa-circle"></i> Description</h4>
          <p>{{$package->description}}</p>
        </div>
        <div class="admin-package-info-content">
          <h4><i class="fa fa-plane"></i> Destination</h4>
          <h5>{{$package->destination}}</h5>
        </div>
        <div class="admin-package-info-content">
          <h4><i class="fa fa-clock-o"></i> Depature Date</h4>
          <h5>{{$package->depature_date}}</h5>
        </div>
        <div class="admin-package-info-content">
          <h4><i class="fa fa-clock-o"></i> End Date</h4>
          <h5>{{$package->end_date}}</h5>
        </div>
        <div class="admin-package-info-content">
          <h4><i class="fa fa-circle"></i> Category</h4>
          <h5>{{$package->category->name}}</h5>
        </div>
      </div>

      <div class="admin-package-info-content-right">
        <div class="admin-package-info-content-image">
          <img src="{{$package->photo ? $package->photo : 'https://gitlab.kitware.com/assets/no_group_avatar-4a9d347a20d783caee8aaed4a37a65930cb8db965f61f3b72a2e954a0eaeb8ba.png'}}" alt="">
        </div>
      </div>

    </div>

  </div>

</div>


@stop
