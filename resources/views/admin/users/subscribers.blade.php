@extends('layouts.admin')

@section('content')

<div class="admin-content-header">
  <h2><i class="fa fa-list" aria-hidden="true"></i> List Of All Subscribers</h2>
  <h2>Total {{$subscribers->count()}}</h2>
</div>

<div class="admin-content-wrapper">
  <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
                <tr>
                  <th><span><i class="fa fa-user"></i></span>Name</th>
                  <th><span><i class="fa fa-envelope"></i></span>Email</th>
                  <th><span><i class="fa fa-circle"></i></span>Status</th>
                  <th><span><i class="fa fa-certificate"></i></span>Role</th>
                  <th><span><i class="fa fa-clock-o"></i></span>Created</th>
                  <th><span><i class="fa fa-clock-o"></i></span>Updated</th>
                  <th></th>
                  </tr>
          </thead>
        </table>
    </div>

    @if ($subscribers)
    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
              @foreach ($subscribers as $subscriber)
                <tr>
                    <td class="cap">{{str_limit($subscriber->name, 18)}}</td>
                    <td class="cap">{{str_limit($subscriber->email, 18)}}</td>
                    <td class="cap">{{$subscriber->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                    <td class="duration">{{$subscriber->role_id == NULL ? 'No Role' : $subscriber->role->name}}</td>
                    <td class="cap">{{$subscriber->created_at->diffForHumans()}}</td>
                    <td class="cap">{{$subscriber->updated_at->diffForHumans()}}</td>
                    <td class="center"><a href="{{route('user.edit',  $subscriber->id)}}" class="homeUpdateBtn"><i class="fa fa-pencil"></i> Edit</a></td>                </tr>
            </tbody>
              @endforeach
              @endif
        </table>
    </div>
</div>

@stop
