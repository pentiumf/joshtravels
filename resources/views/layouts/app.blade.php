<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Josh Travel</title>

    <!-- Styles -->
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker3.standalone.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css">
    <link href="{{ asset('css/libs.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>


    <nav id="HomeNav">
        <div class="navbar-top clearfix nav-pad">
          <div class="brand">
            <a href="#">JoshTravels</a>
          </div>
          <div class="signup-control">
            @if (Auth::guest())
                <a id="SignIn" href="#">Sign Up / In</a>
            @else
                <div class="auth-control">
                    <a id="authName" href="javascript:void(0)">
                        {{ Auth::user()->name }} <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </a>

                    <div id="authDropDown" class="auth-dropdown">
                      <a href="{{route('user.bookings')}}">My Bookings</a>
                      <a href="{{route('user.bookingDetails')}}">Booking Details</a>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            @endif

          </div>
        </div>

        <div class="navbar-bottom clearfix nav-pad">
            <div class="nav-routes">
              <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('packages')}}">Tour Package</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
            <div class="nav-hotline">
              <a href="tel:+233244769950"><i class="fa fa-phone"></i> call: +233 244 769 950</a>
            </div>
        </div>
      </nav>

    <div id="AuthControl">

      <div class='login acces-control'>
      	  <form class="" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
              <span class='close' id='loginClose'><i class="fa fa-times" aria-hidden="true"></i></span>
          		 <div class='top'>
          		    <h2 class="signin-header">Login</h2>
          		 </div>

          		 <div class='user'>
          		    <input id="email" name='email' placeholder='E-mail' type='email' value="{{ old('email') }}" required autofocus>
                  @if ($errors->has('email'))
                      <span class="auth-error">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
          		 </div>

          		 <div class='pw'>
          		    <input id='password' name='password' placeholder='Password' type='password' required>
                  @if ($errors->has('password'))
                      <span class="auth-error">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
          		 </div>

          		 <div class='remlog'>
          		 	<div class="showpassword">
          		 	  <input id='loginShowpass' name='showpass' type='checkbox'>
          		      <label for='loginShowpass'></label>show password <br> <br> <br>
          		 	</div>
          		    <div class='remember'>
          		      <input checked='checked' id='loginRemember' name='remember' type='checkbox' {{ old('remember') ? 'checked' : '' }}>
          		      <label for='loginRemember'></label>remember me
          		    </div>
          		    <input type='submit' value='Log in'>
          		 </div>

          		 <div class='forgot'>
          		    <h3>
          		      Forgot your password?
          		    </h3>
          		    <a href="{{ route('password.request') }}">click here</a>
          		    to order a new password.
                  <h3>
                    Dont have an account ?
                    <a id="Resgiter" href="#">Register Now</a>
                  </h3>
            	 </div>

      	  </form>
      </div>
        <div class='signup acces-control'>

        	  <form class="" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <span class='close' id='signupClose'><i class="fa fa-times" aria-hidden="true"></i></span>

            		 <div class='top'>
            		    <h2 class="signin-header">Register</h2>
            		 </div>

                 <div class='user'>
            		    <input id="name" name='name' placeholder='Name' type='text' value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="auth-error">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
            		 </div>

            		 <div class='user'>
            		    <input id="email" name='email' placeholder='E-mail' type='email' value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="auth-error">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
            		 </div>

            		 <div class='pw'>
            		    <input id='password' name='password' placeholder='Password' type='password' required>
                    @if ($errors->has('password'))
                        <span class="auth-error">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
            		 </div>

                 <div class='pw'>
            		    <input id='password-confirm' name='password_confirmation' placeholder='Confirm Password' type='password' required>
            		 </div>

            		 <div class='remlog'>
            		     <input id="registerSubmit" type='submit' value='Register'>
            		 </div>

                 <div class="forgot">
                   <h3>
                     Already have an account ?
                     <a id="LoginDirect" href="#">Login</a>
                   </h3>
                 </div>
        	  </form>
        </div>
    </div>



        <div id="content">
          @yield('content')
        </div>

        <footer>

          <div class="footer-top">

            <div class="footer-top-content clearfix">

              <div class="footer-top-float">
                <h3>Contact Us</h3>
                <ul>
                  <li>132, My Street, Kingston, New York 12401</li>
                  <li><a href="tel:+233302432124">+233-302 432124</a></li>
                  <li><a href="tel:+233302432124">+233-302 432124</a></li>
                  <li><a href="mailto:info@joshtravelgh.com">info@joshtravelgh.com</a></li>
                </ul>
              </div>

              <div class="footer-top-float">
                <h3>Msg For Customers</h3>
                <p>Josh Travels and Tours Limited is
                headed by Frank Annin- Bonsu, a seasoned private
                practitioner in the travel and  tourism industry
                who previously served as the deputy  managing
                director of Star line Travel Group</p>
              </div>

              <div class="footer-top-float">
                <h3>Our Top Clients</h3>
                <ul>
                  <li>Ministry of Finance</li>
                  <li>Ministry of Environment</li>
                  <li>Technology and Innovation. GLICO Group</li>
                  <li>USICS Company</li>
                  <li>Forest Hotel</li>
                  <li>JINS Company</li>
                </ul>
              </div>

            </div>

          </div>


          <div class="footer-bottom">
            <div class="footer-bottom-adds">
              <div id="topFooterAdds" class="owl-carousel owl-theme">
                  <div class="item"><img src="http://res.cloudinary.com/hapiglsx2/image/upload/v1502838456/south_african_airways_bvjso1.png" alt=""></div>
                  <div class="item"><img src="http://res.cloudinary.com/hapiglsx2/image/upload/v1502838456/KLM-logo-219x286_a8zubo.png" alt=""></div>
                  <div class="item"><img src="http://res.cloudinary.com/hapiglsx2/image/upload/v1502838456/iata_egclbb.png" alt=""></div>
                  <div class="item"><img src="http://res.cloudinary.com/hapiglsx2/image/upload/v1502838456/emirates_logo_sn5own.png" alt=""></div>
                  <div class="item"><img src="http://res.cloudinary.com/hapiglsx2/image/upload/v1502838456/delta_airlines_iljxuo.png" alt=""></div>
              </div>
              <div id="footerSocial">
                <ul>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
                <br>
                <span>© Josh Travels 2017.</span>
              </div>
            </div>
          </div>
        </footer>

        <!-- <p>

        </p> -->



    <!-- Scripts -->
    <script src="{{ asset('js/libs.js') }}"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-dateFormat/1.0/jquery.dateFormat.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js'></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
