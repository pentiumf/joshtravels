@extends('layouts.admin')

@section('content')

<div class="admin-content-wrapper">
	<div id="adminCreateUserForm" class="admin-form-wrapper">
		<div class="admin-form-header">
			<h1>Create New Member</h1>
		</div>
		<div class="admin-form-content">
			{!! Form::open(['method' => 'POST', 'action' => 'AdminUsersController@store']) !!}

			<div class="form-grup">

				{!! Form::label('name', 'Name') !!}
				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Full Name']) !!}

			</div>

			<div class="form-grup">

				{!! Form::label('email', 'Email') !!}
				{!! Form::email('email', null, ['class' => 'form-control', 'placeholder'=>'Email']) !!}

			</div>

			<div class="form-grup">

				{!! Form::label('role_id', 'Role') !!}
				{!! Form::select('role_id', [''=>'Choose Role'] + $roles, null, ['class' => 'form-control']) !!}

			</div>

			<div class="form-grup">

				{!! Form::label('is_active', 'Status') !!}
				{!! Form::select('is_active',['' => 'Choose Status',1 => 'Active', 0 => 'Not Active' ],['class' => 'form-control']) !!}

			</div>


			<div class="form-grup">

				{!! Form::label('password', 'Password') !!}
				{!! Form::password('password', ['class' => 'form-control', 'placeholder'=>'Password']) !!}

			</div>

			<div class="admin-form-content-bootom">
				<div class="form-group">

					{!! Form::submit('Create Member', ['class' => 'btn btn-primary']) !!}

				</div>
			</div>

			{!! Form::close() !!}

		</div>
	</div>
</div>

@include('includes.inputErrors')


@stop
