@extends('layouts.app')

@section('content')


<div class="book-tour-form-wrapper">
  <div class="book-tour-form-header">
    <h2>Edit Booking Details</h2>
  </div>


  <div id="userEditBookingDetailsForm" class="book-tour-form">

    {!! Form::model($detail, ['method' => 'PATCH', 'action' => ['UserBookingController@update', $detail->id], 'files' => true]) !!}


    <div class="form-grup">

  		{!! Form::label('name', 'Name') !!}
  		{!! Form::text('name', $value = Auth::user()->name, null, ['class' => 'form-control']) !!}

      @if ($errors->has('name'))
          <span>
              <strong>{{ $errors->first('name') }}</strong>
          </span>
      @endif

  	</div>

    <div class="form-grup">

  		{!! Form::label('email', 'Email') !!}
  		{!! Form::email('email', $value = Auth::user()->email, null, ['class' => 'form-control']) !!}

      @if ($errors->has('email'))
          <span>
              <strong>{{ $errors->first('email') }}</strong>
          </span>
      @endif

  	</div>

    <div class="form-grup">

  		{!! Form::label('contact_number', 'Contact Number') !!}
  		{!! Form::text('contact_number', null, ['class' => 'form-control']) !!}

      @if ($errors->has('contact_number'))
          <span>
              <strong>{{ $errors->first('contact_number') }}</strong>
          </span>
      @endif

  	</div>

    <div class="form-grup">

  		{!! Form::label('postal_address', 'Postal Address') !!}
  		{!! Form::text('postal_address', null, ['class' => 'form-control']) !!}

      @if ($errors->has('postal_address'))
          <span>
              <strong>{{ $errors->first('postal_address') }}</strong>
          </span>
      @endif

  	</div>

    <div class="form-grup">

          {!! Form::label('country_id', 'Country') !!}
          {!! Form::select('country_id', [''=>'Choose Country'] + $countries, null, ['class' => 'form-control']) !!}

          @if ($errors->has('country_id'))
              <span>
                  <strong>{{ $errors->first('country_id') }}</strong>
              </span>
          @endif

  	</div>

    <div class="form-grup">

  		{!! Form::label('passport_info', 'Passport Id') !!}
  		{!! Form::text('passport_info', null, ['class' => 'form-control']) !!}

      @if ($errors->has('passport_info'))
          <span>
              <strong>{{ $errors->first('passport_info') }}</strong>
          </span>
      @endif

  	</div>


   <div class="form-grup">

     {!! Form::hidden('user_id', $value = Auth::id(), ['class' => 'form-control']) !!}

   </div>


    <div class="form-grup">

  		{!! Form::submit('Edit Detail', ['class' => 'btn btn-primary']) !!}

  	</div>

    {!! Form::close() !!}

  </div>
</div>


@stop
