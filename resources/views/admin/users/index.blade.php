@extends('layouts.admin')

@section('content')

<div class="admin-content-header">
  <h2><i class="fa fa-list" aria-hidden="true"></i> List Of All Users</h2>
  <h2>Total {{$users->count()}}</h2>
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

    @if ($users)
    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
              @foreach ($users as $user)
                <tr>
                    <td class="cap">{{$user->name}}</td>
                    <td class="cap">{{$user->email}}</td>
                    <td class="cap">{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                    <td id="" class="duration">{{$user->role_id == NULL ? 'No Role' : $user->role->name}}</td>
                    <td class="cap">{{$user->created_at->diffForHumans()}}</td>
                    <td class="cap">{{$user->updated_at->diffForHumans()}}</td>
                    <td class="center"><a href="{{route('user.edit',  $user->id)}}" class="homeUpdateBtn"><i class="fa fa-pencil"></i> Edit</a></td>                </tr>
            </tbody>
              @endforeach
              @endif
        </table>
    </div>
</div>

@stop
