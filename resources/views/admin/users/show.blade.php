@extends('layouts.admin')

@section('content')

  <div class="">

    <table class="table">
		    <thead>
		      <tr>
            <th>Id</th>
            <th>name</th>
            <th>Email</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Status</th>
            <th>Role</th>
		      </tr>
		    </thead>
		    <tbody>
		    		<tr>
              <td>{{$user->id}}</td>
              <td><a href="{{route('user.edit',  $user->id)}}">{{$user->name}}</a></td>
              <td>{{$user->email}}</td>
              <td>{{$user->created_at->diffForHumans()}}</td>
              <td>{{$user->updated_at->diffForHumans()}}</td>
              <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>

              <td>{{$user->role_id == NULL ? 'No Role' : $user->role->name}}</td>
				     </tr>


		    </tbody>
		  </table>

  </div>

@stop
