@extends('layouts.admin')

@section('content')


<div class="admin-content-header">
  <h2><i class="fa fa-list" aria-hidden="true"></i> List Of All Bookins</h2>
  <h2>Total {{$bookings->count()}}</h2>
</div>

<div class="admin-content-wrapper">
  <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
                <tr>
                  <th><span><i class="fa fa-user"></i></span>Package</th>
                  <th><span><i class="fa fa-envelope"></i></span>Sent</th>
                  <th><span><i class="fa fa-envelope"></i></span>Staus</th>
                  <th></th>
                  </tr>
          </thead>
        </table>
    </div>

    @if ($bookings)
    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
              @foreach ($bookings as $booking)
                <tr>
                    <td class="cap">{{str_limit($booking->package->name, 20)}}</td>
                    <td class="cap">{{$booking->created_at->diffForHumans()}}</td>
                    <td class="cap">New</td>
                    <td class="center"><a href="{{route('bookings.show',  $booking->id)}}" class="homeUpdateBtn">View Details</a></td></tr>
            </tbody>
              @endforeach
              @endif
        </table>
    </div>
</div>

@stop
