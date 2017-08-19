@extends('layouts.app')

@section('content')

  <h1>This is the packages page</h1>

  @if ($packages)
  @foreach ($packages as $package)
    <ul>
      <li><a href="{{ route('packages.details', $package->id) }}">{{$package->name}}</a></li>
    </ul>
  @endforeach
  @endif

@stop
