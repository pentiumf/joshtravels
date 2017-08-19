@extends('layouts.app')

@section('content')

  <h1>This is the guest book tour page {{$package_id}}</h1>


  {!! Form::open(['method' => 'POST', 'action' => 'PackageControllar@store']) !!}

  <div class="form-grup">

		{!! Form::label('name', 'Name') !!}
		{!! Form::text('name', null, ['class' => 'form-control']) !!}

	</div>

  <div class="form-grup">

		{!! Form::label('email', 'Email') !!}
		{!! Form::email('email', null, ['class' => 'form-control']) !!}

	</div>

  <div class="form-grup">

		{!! Form::label('contact_number', 'Contact Number') !!}
		{!! Form::text('contact_number', null, ['class' => 'form-control']) !!}

	</div>

  <div class="form-grup">

		{!! Form::label('postal_address', 'Postal Address') !!}
		{!! Form::text('postal_address', null, ['class' => 'form-control']) !!}

	</div>

  <div class="form-grup">

      {!! Form::label('country_id', 'Country') !!}
      {!! Form::select('country_id', [''=>'Choose Country'] + $countries, null, ['class' => 'form-control']) !!}

	</div>

  <div class="form-grup">

		{!! Form::label('passport_info', 'Passport Id') !!}
		{!! Form::text('passport_info', null, ['class' => 'form-control']) !!}

	</div>


 <div class="form-grup">

   {!! Form::hidden('package_id', $value = $package_id, ['class' => 'form-control']) !!}

 </div>


  <div class="form-group">

		{!! Form::submit('Book Tour', ['class' => 'btn btn-primary']) !!}

	</div>

	{!! Form::close() !!}

  @include('includes.inputErrors')


@stop
