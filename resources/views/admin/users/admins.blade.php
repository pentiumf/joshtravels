@extends('layouts.admin')

@section('content')

<div class="admin-content-header">
  <h2><i class="fa fa-list" aria-hidden="true"></i> List Of All Administrators</h2>
  <h2>Total {{$admins->count()}}</h2>
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

    @if ($admins)
    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
              @foreach ($admins as $admin)
                <tr>
                    <td class="cap">{{$admin->name}}</td>
                    <td class="cap">{{$admin->email}}</td>
                    <td class="cap">{{$admin->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                    <td class="duration">{{$admin->role_id == NULL ? 'No Role' : $admin->role->name}}</td>
                    <td class="cap">{{$admin->created_at->diffForHumans()}}</td>
                    <td class="cap">{{$admin->updated_at->diffForHumans()}}</td>
                    <td class="center"><a href="{{route('user.edit',  $admin->id)}}" class="homeUpdateBtn"><i class="fa fa-pencil"></i> Edit</a></td>                </tr>
            </tbody>
              @endforeach
              @endif
        </table>
    </div>
</div>

@stop
