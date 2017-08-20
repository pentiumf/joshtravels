@extends('layouts.app')

@section('content')

  <!-- This is for already booked users  -->
  @if ($userBookingInfo)

      <div id="bookUserLogin" class="book-tour-form-wrapper">
        <div id="bookUserLoginHead" class="book-tour-form-header">
          <h2>Hello {{Auth::user()->name}}</h2>
          <p>We already have your booking details saved
            form your previous bookings. You can go
            back to your accout and edit details
            any time. Please click the button below to proceed booking</p>
          <p></p>
        </div>

        <div class="book-tour-form">
          {!! Form::open(['method' => 'POST', 'action' => 'PackageControllar@userBookStore']) !!}

          {!! Form::hidden('package_id', $value = $package_id, ['class' => 'form-control']) !!}

          <div class="form-grup">
            {!! Form::submit('Book This Tour', ['class' => 'btn']) !!}

          </div>

          {!! Form::close() !!}
        </div>

      </div>

  @else


  <!-- This is for new users whom havnt booked yet -->

  <div class="book-tour-form-wrapper">
    <div class="book-tour-form-header">
      <h2>Please Fill The Form Below To Book Tour</h2>
    </div>
    <div id="userBookTour" class="book-tour-form">
      {!! Form::open(['method' => 'POST', 'action' => 'PackageControllar@store']) !!}

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

       {!! Form::hidden('package_id', $value = $package_id, ['class' => 'form-control']) !!}

     </div>

     <div class="form-grup">

       {!! Form::hidden('user_id', $value = Auth::id(), ['class' => 'form-control']) !!}

     </div>


      <div class="form-grup">

    		{!! Form::submit('Book Tour', ['class' => 'btn']) !!}

    	</div>

      {!! Form::close() !!}

    </div>
  </div>


  @endif



@stop
