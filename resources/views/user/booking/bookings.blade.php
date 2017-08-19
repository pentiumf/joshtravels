@extends('layouts.app')

@section('content')

  <h1>This is the the users bookings</h1>

  @if ($packages)
  @foreach ($packages as $package)
      <h2><a href="{{route('user.bookingInfo', $package->id)}}">{{$package->name}}</a></h2>
  @endforeach
  @endif

@stop
