<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Josh Travels Administrator</title>

    <!-- Styles -->
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker3.standalone.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css">
    <link href="{{ asset('css/libs.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color: #eee;">

      <nav id="AdminNav">
        <div id="adminNavLeft" class="clearfix">
          <div class="admin-nav-routes">
            <ul>
              <li><a href="{{route('admin')}}">Home</a></li>
              <li><a href="{{route('home')}}">Public Website</a></li>
            </ul>
          </div>
        </div>

        <div id="adminNavRight" class="clearfix">
          <div class="admin-username">
            <ul>
              <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                       document.getElementById('admin-logout-form').submit();">Logout</a></li>
            </ul>
            <form id="admin-logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          </div>
        </div>
      </nav>

      <aside id="AdminSidebar">
        <div class="admin-side-logo">
          <div class="admin-side-logo-img">
            <img src="http://res.cloudinary.com/hapiglsx2/image/upload/v1502641847/joshtravel_axxiqy.jpg" alt="">
          </div>
          <div class="admin-side-name">
            <h4>{{Auth::user()->name}}</h4>
            <h5>{{Auth::user()->role->name}}</h5>
          </div>
        </div>

        <div class="admin-aside-routes">
          <ul id="accordion" class="accordion">
            @if(Auth::user()->role->name == "Admin")

            <li class="default open">
        			<div class="link"><i class="fa fa-plus"></i> <span>Add Member</span>  <i class="fa fa-chevron-down"></i></div>
        			<ul class="submenu">
        				<li><a href="{{route('user.create')}}">Create New Member</a></li>
        			</ul>
        		</li>

            @endif
            <li>
        			<div class="link"><i class="fa fa-book"></i> <span>Bookings</span> <i class="fa fa-chevron-down"></i></div>
        			<ul class="submenu">
        				<li><a href="{{route('bookings.index')}}">All Bookings</a></li>
        			</ul>
        		</li>
        		<li>
        			<div class="link"><i class="fa fa-product-hunt"></i> <span>Packages</span>  <i class="fa fa-chevron-down"></i></div>
        			<ul class="submenu">
        				<li><a href="{{route('package.index')}}">All Packages</a></li>
        				<li><a href="{{route('package.create')}}">Create New Package</a></li>
        			</ul>
        		</li>

            @if(Auth::user()->role->name == "Admin")
              <li>
                <div class="link"><i class="fa fa-briefcase"></i> <span>Staffs</span>  <i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                  <li><a href="{{route('staff.index')}}">All Staffs</a></li>
                  <li><a href="{{route('staff.create')}}">Create New Staff</a></li>
                </ul>
              </li>
            @endif

            <li>
        			<div class="link"><i class="fa fa-user"></i> <span>Admin</span> <i class="fa fa-chevron-down"></i></div>
        			<ul class="submenu">
        				<li><a href="{{route('allAdmins')}}">All Admin</a></li>
        			</ul>
        		</li>

            <li>
        			<div class="link"><i class="fa fa-user"></i> <span>Employees</span> <i class="fa fa-chevron-down"></i></div>
        			<ul class="submenu">
        				<li><a href="{{route('allEmployees')}}">All Employees</a></li>
        			</ul>
        		</li>
            <li>
        			<div class="link"><i class="fa fa-user"></i> <span>Subscribers</span> <i class="fa fa-chevron-down"></i></div>
        			<ul class="submenu">
        				<li><a href="{{route('allSubscribers')}}">All Subscribers</a></li>
        			</ul>
        		</li>
            <li>
              <div class="link"><i class="fa fa-user"></i> <span>Users</span> <i class="fa fa-chevron-down"></i></div>
              <ul class="submenu">
                <li><a href="{{route('user.index')}}">All Users</a></li>
              </ul>
            </li>
        	</ul>
        </div>
      </aside>

      <div id="adminPageContent" class="clearfix">
        @if(Session::has('deleted_user'))

            <h1>{{session('deleted_user')}}</h1>

        @endif
        @yield('content')
      </div>


    <!-- Scripts -->
    <script src="{{ asset('js/libs.js') }}"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-dateFormat/1.0/jquery.dateFormat.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js'></script>
    <script src="{{ asset('js/app.js') }}"></script>




    <script type="text/javascript">

    </script>
</body>
</html>
