@extends('layouts.app')

@section('content')

  <h1>User Edit Booking Details</h1>
  {!! Form::model($detail, ['method' => 'PATCH', 'action' => ['UserBookingController@update', $detail->id], 'files' => true]) !!}


  <div class="form-grup">

		{!! Form::label('name', 'Name') !!}
		{!! Form::text('name', $value = Auth::user()->name, null, ['class' => 'form-control']) !!}

	</div>

  <div class="form-grup">

		{!! Form::label('email', 'Email') !!}
		{!! Form::email('email', $value = Auth::user()->email, null, ['class' => 'form-control']) !!}

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

   {!! Form::hidden('user_id', $value = Auth::id(), ['class' => 'form-control']) !!}

 </div>


  <div class="form-group">

		{!! Form::submit('Edit Detail', ['class' => 'btn btn-primary']) !!}

	</div>

  {!! Form::close() !!}

@stop
