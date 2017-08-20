@extends('layouts.app')

@section('content')

  <div class="book-tour-form-wrapper">
    <div class="book-tour-form-header">
      <h2>Please Fill The Form Below To Book Tour</h2>
    </div>


    <div class="book-tour-form">

      {!! Form::open(['method' => 'POST', 'action' => 'PackageControllar@store']) !!}

      <div class="form-grup">

        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Full Name']) !!}

        @if ($errors->has('name'))
            <span>
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif

      </div>

      <div class="form-grup">

        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Email Address']) !!}

        @if ($errors->has('email'))
            <span>
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>

      <div class="form-grup">

        {!! Form::label('contact_number', 'Contact Number') !!}
        {!! Form::text('contact_number', null, ['class' => 'form-control', 'placeholder' => 'Enter Contact Number']) !!}

        @if ($errors->has('contact_number'))
            <span>
                <strong>{{ $errors->first('contact_number') }}</strong>
            </span>
        @endif
      </div>

      <div class="form-grup">

        {!! Form::label('postal_address', 'Postal Address') !!}
        {!! Form::text('postal_address', null, ['class' => 'form-control', 'placeholder' => 'Enter Postal Address']) !!}

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
        {!! Form::text('passport_info', null, ['class' => 'form-control', 'placeholder' => 'Enter Passport Number']) !!}

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

        {!! Form::submit('Book Tour', ['class' => 'btn', 'id' => 'bookTourBtn']) !!}

      </div>

      {!! Form::close() !!}

    </div>
  </div>



@stop
