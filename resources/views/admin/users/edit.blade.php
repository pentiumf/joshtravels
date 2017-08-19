@extends('layouts.admin')

@section('content')

<div class="admin-content-wrapper">
  <div class="admin-form-wrapper">
    <div class="admin-form-header">
       <h1>Edit Member</h1>
    </div>
    <div class="admin-form-content">

      {!! Form::model($user, ['method' => 'PATCH', 'action' => ['AdminUsersController@update', $user->id], 'files' => true]) !!}


      <div class="form-grup">

        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}

      </div>

      <div class="form-grup">

        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}

      </div>

      <div class="form-grup">

        {!! Form::label('role_id', 'Role') !!}
        {!! Form::select('role_id', [''=>'Choose Option'] + $roles, null, ['class' => 'form-control']) !!}

      </div>

      <div class="form-grup">

        {!! Form::label('is_active', 'Status') !!}
        {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), null, ['class' => 'form-control']) !!}

      </div>

      <div class="form-grup">

        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}

      </div>


      <div class="admin-form-content-bootom">
        <div class="form-group">

          {!! Form::submit('Edit Member', ['class' => 'btn btn-primary']) !!}

        </div>
      </div>

      {!! Form::close() !!}


      <div class="top-admin-delete-btn">
        {!! Form::open(['method' => 'DELETE', 'action' => ['AdminUsersController@destroy', $user->id]]) !!}

        <div class="form-group">

          {!! Form::submit('Delete Member', ['class' => 'btn btn-danger']) !!}

        </div>

        {!! Form::close() !!}
      </div>

    </div>
  </div>
</div>




 @include('includes.inputErrors')





@stop
