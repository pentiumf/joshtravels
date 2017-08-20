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

				@if ($errors->has('name'))
            <span>
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif

			</div>

			<div class="form-grup">

				{!! Form::label('email', 'Email') !!}
				{!! Form::email('email', null, ['class' => 'form-control', 'placeholder'=>'Email']) !!}

				@if ($errors->has('email'))
            <span>
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

			</div>

			<div class="form-grup">

				{!! Form::label('role_id', 'Role') !!}
				{!! Form::select('role_id', [''=>'Choose Role'] + $roles, null, ['class' => 'form-control']) !!}

				@if ($errors->has('role_id'))
            <span>
                <strong>{{ $errors->first('role_id') }}</strong>
            </span>
        @endif

			</div>

			<div class="form-grup">

				{!! Form::label('is_active', 'Status') !!}
				{!! Form::select('is_active',['' => 'Choose Status',1 => 'Active', 0 => 'Not Active' ],['class' => 'form-control']) !!}

				@if ($errors->has('is_active'))
            <span>
                <strong>{{ $errors->first('is_active') }}</strong>
            </span>
        @endif

			</div>


			<div class="form-grup">

				{!! Form::label('password', 'Password') !!}
				{!! Form::password('password', ['class' => 'form-control', 'placeholder'=>'Password']) !!}

				@if ($errors->has('password'))
            <span>
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif

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

@stop
