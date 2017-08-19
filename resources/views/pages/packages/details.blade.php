@extends('layouts.app')

@section('content')

  <h1>This is the packages details page</h1>

  <p>Name: {{$package->name}}</p>
  <p>Price: {{$package->price}}</p>
  <p>Destination: {{$package->destination}}</p>
  <p>Overview {{$package->overview}}</p>

  <a href="{{ route('packages.book', $package->id) }}" style="padding: 10px 20px; background: red; display: inline-block; margin: 50px;">Book This Tour</a>

@stop
