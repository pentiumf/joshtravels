


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Josh Travels</title>

    <!-- Styles -->
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker3.standalone.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css">
    <link href="{{ asset('css/libs.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <style media="screen">

    body {
      background: #fff;
    }

    .over-lay-bg-valiadte {
        display: none;
        background-color: rgba(0,0,0,0.6);
        height: 100%;
        left: 0;
        margin: auto;
        opacity: 0.6;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
        filter: alpha(opacity=50);
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 100001;
      }

      .loader {
          width: 1em;
          height: 1em;
          font-size: 100px;
          position: fixed;
          z-index: 4000000;
          display: none;
        }

        @media (max-width: 225px), (max-height: 225px) {
          .loader {
            font-size: 75px;
          }
        }
        .loader:before, .loader:after {
          content: "";
          top: 0;
          display: block;
          width: 1em;
          height: 1em;
          position: absolute;
          border-width: 0.5em;
          border-style: double;
          border-color: transparent;
          box-sizing: border-box;
          border-radius: 1em;
          -webkit-animation: spin 1s infinite;
          animation: spin 1s infinite;
        }
        .loader:after {
          left: 0;
          border-left-color: #fff;
        }
        .loader:before {
          right: 0;
          border-right-color: #fff;
          -webkit-animation-delay: -0.25s;
          animation-delay: -0.25s;
        }

        @-webkit-keyframes spin {
          from {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
          }
        }

        @keyframes spin {
          from {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
          }
        }




    </style>

</head>
  <body>

    <div class="auth-container animated bounceInDown">

    <div class="auth-wrap">

        <div class="auth-header">
            <h1>
                <a href="{{ url('/') }}">Josh Travels<span>Administrator</span></a>
            </h1>

            <h2>Login To Access</h2>
        </div>

        <div class="auth-body">

            <form id="loginForm" class="authForm" action="{{ route('login') }}" method="POST">
               {{ csrf_field() }}

                <div class="field-wrap{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-field" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                    @if ($errors->has('email'))
                        <br><br>
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="field-wrap{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                    @if ($errors->has('password'))
                        <br><br>
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="field-wrap">
                    <label>
                        <input type="checkbox" id="rememberMe" name="remember" {{ old('remember') ? 'checked' : '' }}> <span id="rememberMeText">Remember Me</span>
                    </label>
                </div>

                <div class="field-wrap">
                    <button type="submit" class="btn btn-primary">
                        Login
                    </button>
                </div>

            </form>

        </div>

    </div>

    <div class="auth-footer">
        <p>Copyright © 2016 - 2017 Josh Travels LTD. All rights reserved <a href="">Terms of Use</a> | <a href="">Privacy Policy</a></p>
    </div>

  </body>
</html>
