@extends('layouts.admin')

@section('content')

<div class="admin-content-header">
  <h2><i class="fa fa-list" aria-hidden="true"></i> List Of All Employees</h2>
  <h2>Total {{$employees->count()}}</h2>
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

    @if ($employees)
    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
              @foreach ($employees as $employee)
                <tr>
                    <td class="cap">{{$employee->name}}</td>
                    <td class="cap">{{$employee->email}}</td>
                    <td class="cap">{{$employee->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                    <td class="duration">{{$employee->role_id == NULL ? 'No Role' : $employee->role->name}}</td>
                    <td class="cap">{{$employee->created_at->diffForHumans()}}</td>
                    <td class="cap">{{$employee->updated_at->diffForHumans()}}</td>
                    <td class="center"><a href="{{route('user.edit',  $employee->id)}}" class="homeUpdateBtn"><i class="fa fa-pencil"></i> Edit</a></td>                </tr>
            </tbody>
              @endforeach
              @endif
        </table>
    </div>
</div>

@stop
