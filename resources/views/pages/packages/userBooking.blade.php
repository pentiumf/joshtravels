@extends('layouts.app')

@section('content')

  <!-- This is for already booked users  -->
  @if ($userBookingInfo)

      <h1>This user has booking details</h1>

      {!! Form::open(['method' => 'POST', 'action' => 'PackageControllar@userBookStore']) !!}

      {!! Form::hidden('package_id', $value = $package_id, ['class' => 'form-control']) !!}

      {!! Form::submit('Book This Tour', ['class' => 'btn btn-primary']) !!}

      {!! Form::close() !!}

  @else


  <!-- This is for new users whom havnt booked yet -->
  <h1>This is the has no bookind details {{$package_id}}</h1>

  {!! Form::open(['method' => 'POST', 'action' => 'PackageControllar@store']) !!}

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

   {!! Form::hidden('package_id', $value = $package_id, ['class' => 'form-control']) !!}

 </div>

 <div class="form-grup">

   {!! Form::hidden('user_id', $value = Auth::id(), ['class' => 'form-control']) !!}

 </div>


  <div class="form-group">

		{!! Form::submit('Book Tour', ['class' => 'btn btn-primary']) !!}

	</div>

  {!! Form::close() !!}



  @endif



  @include('includes.inputErrors')


@stop
