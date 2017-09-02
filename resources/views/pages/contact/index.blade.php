@extends('layouts.app')

@section('content')

  <div id="contact-map">
    <iframe width="100%" height="450" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=Dome%20Pillar%202&key=AIzaSyDNlYCkOWpsvawAUtwrZA5tLH8G97eDkPI" allowfullscreen></iframe>

  <div id="contactUsWrap" class="clearfix">

    @if(Session::has('message_sent'))

    <div class="flash-pop-message" style="margin-bottom: 40px;">
      <h2>Hello Customer</h2>
      <p>Your Message Has Succesfully Been Sent, We Will Get Back To You In A While. Thank You</p>
      <button id="bookingFlas">OK</button>
    </div>

    @endif


    <div class="contacts-us-left">

      <h2>Contact Us</h2>
      <div class="contacts-us-left-info clearfix">
        <div class="contacts-us-left-logo">
          <i class="fa fa-home"></i>
        </div>
        <div class="contacts-us-left-cap">
          <h3>Address</h3>
          <ul>
            <li>Sika Plaza House No. 58 <br>
               Paradise Children Street - West Legon <br>
               Opposite Paradise Children Academy<br>
               Dome Pillar 2 Accra</li>
          </ul>
        </div>
      </div>
      <div class="contacts-us-left-info clearfix">
        <div class="contacts-us-left-logo">
          <span><i class="fa fa-phone"></i></span>
        </div>
        <div class="contacts-us-left-cap">
          <h3>Contact Numbers</h3>
          <ul>
            <li><a href="tel:+233 540 124713">+233 540 124713</a></li>
            <li><a href="tel:+233 302 432124">+233 302 432124</a></li>
          </ul>
        </div>
      </div>
      <div class="contacts-us-left-info clearfix">
        <div class="contacts-us-left-logo">
          <span><i class="fa fa-envelope"></i></span>
        </div>
        <div class="contacts-us-left-cap">
          <h3>Email</h3>
          <ul>
            <li><a href="mailto:info@joshtravelsltd.com">info@joshtravelsltd.com</a></li>
          </ul>
        </div>
      </div>
      <div class="contact-left-us-social">
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-google"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="contacts-us-right">
      <div class="contacts-us-form">

    			{!! Form::open(['method' => 'POST', 'action' => 'ContatController@sendMessage', 'files' => true]) !!}

    				<div class="form-grup">

    					{!! Form::label('name', 'Full Name') !!}
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

    					{!! Form::label('contact', 'Contact') !!}
    					{!! Form::text('contact', null, ['class' => 'form-control', 'placeholder'=>'Contact Number']) !!}

    					@if ($errors->has('contact'))
    	            <span>
    	                <strong>{{ $errors->first('contact') }}</strong>
    	            </span>
    	        @endif

    				</div>

    			  <div class="form-grup">

    					{!! Form::label('message', 'Your Messsage') !!}
    					{!! Form::textarea('message', null, ['class' => 'form-control', 'placeholder'=>'Your Message']) !!}

    					@if ($errors->has('message'))
    	            <span>
    	                <strong>{{ $errors->first('message') }}</strong>
    	            </span>
    	        @endif

    				</div>


    				<div class="form-group">

    					{!! Form::submit('Send Message', ['class' => 'btn']) !!}

    				</div>

    			{!! Form::close() !!}



      </div>
    </div>
  </div>


@stop
