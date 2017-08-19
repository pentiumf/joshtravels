@extends('layouts.app')

@section('content')


<!-- @if(Auth::user())
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

@else

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are not logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endif -->

<div class="home-banner-bg">
  <div class="home-banner-cap">
    <h1>Tour With Josh Travel</h1>
    <p>Visit Europe, America, Asia, Africa or beyond!</p>
  </div>

  <div class="home-tab-pannel">
    <ul class="clearfix">
      <li class="find-tab current-flight-tab" data-find="find-1"> <img src="http://res.cloudinary.com/hvwqgvdi9/image/upload/v1502377271/hotel_fscxg3.png">Hotel</li>
      <li class="find-tab" data-find="find-2"><img src="http://res.cloudinary.com/hvwqgvdi9/image/upload/v1502377271/plane_a4cysr.png">Flight</li>
      <li class="find-tab" data-find="find-3"><img src="http://res.cloudinary.com/hvwqgvdi9/image/upload/v1502377271/earth-pictures_na3dqc.png">Tour</li>
    </ul>
  </div>
</div>

<div class="finder-wrapper">

  <div id="find-1" class="finder current-finder clearfix">

    <div class="find-hotel-destination">
      <span>Destination</span>
      <input type="text" name="destination" placeholder="Enter Destination">
    </div>

      <div class="find-hotel-group-date">

        <div class="input-daterange input-group all-datepicker" id="hotel-datepicker">
          <div class="form-item">
            <label>Check In</label><span class="fontawesome-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></span>
            <input class="input-sm form-control" type="text" id="hotel-start-date" name="start" placeholder="Select check in date" data-date-format="DD, MM d"/><span id="hotel-date-depart" class="date-text date-depart"></span>
          </div>
          <div class="form-item">
            <label>Check Out</label><span class="fontawesome-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></span>
            <input class="input-sm form-control" type="text" id="hotel-end-date" name="end" placeholder="Select check out date" data-date-format="DD, MM d"/><span id="hotel-date-return" class="date-text date-return"></span>
          </div>
        </div>

      </div>

      <div class="find-hotel-group-select">

        <div class="selectholder">
          <label for="projectcompletion">Rooms</label>
          <select name="rooms" id="rooms">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="2">3</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">No rush</option>
          </select>
        </div>


          <div class="selectholder">
            <label for="projectcompletion">Adult</label>
            <select name="adult" id="adult">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="2">3</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">No rush</option>
            </select>
          </div>

          <div class="selectholder">
            <label for="projectcompletion">Child</label>
            <select name="adult" id="child">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="2">3</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">No rush</option>
            </select>
          </div>

          <div class="searchholder">
              <button type="button">Search</button>
          </div>

      </div>

  </div>

  <div id="find-2" class="finder clearfix">

    <div class="find-hotel-destination">
      <span>Flying From</span>
      <input type="text" name="destination" placeholder="Enter Destination">
    </div>

    <div class="find-hotel-destination">
      <span>Flying To</span>
      <input type="text" name="destination" placeholder="Enter Destination">
    </div>

      <div class="find-hotel-group-date">

        <div class="input-daterange input-group all-datepicker" id="flight-datepicker">
          <div class="form-item">
            <label>Departing</label><span class="fontawesome-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></span>
            <input class="input-sm form-control" type="text" id="flight-start-date" name="start" placeholder="Select departing date" data-date-format="DD, MM d"/><span id="flight-date-depart" class="date-text date-depart"></span>
          </div>
          <div class="form-item">
            <label>Returning</label><span class="fontawesome-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></span>
            <input class="input-sm form-control" type="text" id="flight-end-date" name="end" placeholder="Select returning date" data-date-format="DD, MM d"/><span id="flight-date-return" class="date-text date-return"></span>
          </div>
        </div>

      </div>

      <div class="find-hotel-group-select ofFlight">


          <div class="selectholder">
            <label for="projectcompletion">Adult</label>
            <select name="adult" id="adult">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="2">3</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">No rush</option>
            </select>
          </div>

          <div class="selectholder">
            <label for="projectcompletion">Child</label>
            <select name="adult" id="child">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="2">3</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">No rush</option>
            </select>
          </div>

          <div class="searchholder">
              <button type="button">Search</button>
          </div>

      </div>

  </div>

  <div id="find-3" class="finder clearfix">

    <div class="find-hotel-destination">
      <span>Flying From</span>
      <input type="text" name="destination" placeholder="Enter Destination">
    </div>

      <div class="find-hotel-group-date">

        <div class="input-daterange input-group all-datepicker" id="tour-datepicker">
          <div class="form-item">
            <label>Departing</label><span class="fontawesome-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></span>
            <input class="input-sm form-control" type="text" id="tour-start-date" name="start" placeholder="Select departing date" data-date-format="DD, MM d"/><span id="tour-date-depart" class="date-text date-depart"></span>
          </div>
          <div class="form-item">
            <label>Returning</label><span class="fontawesome-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></span>
            <input class="input-sm form-control" type="text" id="tour-end-date" name="end" placeholder="Select returning date" data-date-format="DD, MM d"/><span id="tour-date-return" class="date-text date-return"></span>
          </div>
        </div>

      </div>

      <div class="find-hotel-group-select ofTour">


          <div class="selectholder">
            <label for="projectcompletion">Type</label>
            <select name="adult" id="adult">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="2">3</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">No rush</option>
            </select>
          </div>

          <div class="selectholder">
            <label for="projectcompletion">Budget</label>
            <select name="adult" id="child">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="2">3</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">No rush</option>
            </select>
          </div>

          <div class="searchholder">
              <button type="button">Search</button>
          </div>

      </div>
  </div>

</div>

<div class="customer-addinfo-wrapper">
  <div class="customer-addinfo-container clearfix">

    <div class="customer-addinfo clearfix">
      <div class="customer-addinfoicon">
        <i class="fa fa-map-marker" aria-hidden="true"></i>
      </div>
      <div class="customer-addinfocap">
        <h2>3000+ Destinations</h2>
        <p>We can take you anywhere you wanna go</p>
      </div>
    </div>

    <div class="customer-addinfo clearfix">
      <div class="customer-addinfoicon">
        <i class="fa fa-user" aria-hidden="true"></i>
      </div>
      <div class="customer-addinfocap">
        <h2>Customer care</h2>
        <p>24/7 customer care and support for your need</p>
      </div>
    </div>

    <div class="customer-addinfo clearfix">
      <div class="customer-addinfoicon">
        <i class="fa fa-book" aria-hidden="true"></i>
      </div>
      <div class="customer-addinfocap">
        <h2>Travel Guide</h2>
        <p>Your number one travel guide</p>
      </div>
    </div>


  </div>
</div>

<div class="top-destinations-wrapper">

  <div class="top-destinations-container">

    <div class="top-destination-header">
      <h1>Our Top Destinations</h1>
    </div>

    <div class="top-destinations clearfix">

      <figure class="top-destination"><img src="http://res.cloudinary.com/hapiglsx2/image/upload/v1502613928/shutterstock_70631242_estambul_jzgori.jpg" alt="sample87"/>
        <div class="top-des-add">
          <h2>Turkey</h2>
          <h4>Ankara</h4>
          <p>64 Days</p>
        </div>
        <figcaption>
          <h3>Josh Travels</h3>
          <h5>Book Now</h5>
        </figcaption>
        <a href="#"></a>
      </figure>

      <figure class="top-destination"><img src="http://res.cloudinary.com/hapiglsx2/image/upload/v1502614788/swizzarland_xcdbeo.jpg" alt="sample87"/>
        <div class="top-des-add">
          <h2>Swizz Alps Trip</h2>
          <h4>Austria, Switzerland</h4>
          <p>13 Days</p>
        </div>
        <figcaption>
          <h3>Josh Travels</h3>
          <h5>Book Now</h5>
        </figcaption>
        <a href="#"></a>
      </figure>

      <figure class="top-destination"><img src="http://res.cloudinary.com/hapiglsx2/image/upload/v1502614788/italy_qsaser.jpg" alt="sample87"/>
        <div class="top-des-add">
          <h2>Italy</h2>
          <h4>Rome</h4>
          <p>69 Days</p>
        </div>
        <figcaption>
          <h3>Josh Travels</h3>
          <h5>Book Now</h5>
        </figcaption>
        <a href="#"></a>
      </figure>

      <figure class="top-destination"><img src="http://res.cloudinary.com/hapiglsx2/image/upload/v1502614789/spain_bw4xhi.jpg" alt="sample87"/>
        <div class="top-des-add">
          <h2>Spain</h2>
          <h4>Madrid</h4>
          <p>248 Days</p>
        </div>
        <figcaption>
          <h3>Josh Travels</h3>
          <h5>Book Now</h5>
        </figcaption>
        <a href="#"></a>
      </figure>

      <figure class="top-destination"><img src="http://res.cloudinary.com/hapiglsx2/image/upload/v1502614783/london_avlfle.jpg" alt="sample87"/>
        <div class="top-des-add">
          <h2>UK</h2>
          <h4>London, Scotland, Wales</h4>
          <p>364 Days</p>
        </div>
        <figcaption>
          <h3>Josh Travels</h3>
          <h5>Book Now</h5>
        </figcaption>
        <a href="#"></a>
      </figure>

      <figure class="top-destination"><img src="http://res.cloudinary.com/hapiglsx2/image/upload/v1502580691/05_cjxqjv.jpg" alt="sample87"/>
        <div class="top-des-add">
          <h2>East Europe</h2>
          <h4>Solvania, Hungary, Czech</h4>
          <p>10 Days</p>
        </div>
        <figcaption>
          <h3>Josh Travels</h3>
          <h5>Book Now</h5>
        </figcaption>
        <a href="#"></a>
      </figure>


    </div>

  </div>


</div>

<div class="special-tourpackages-wrappers">

  <div class="special-tourpackages-header">
    <h2>Special Packages</h2>
    <p>Below are some of our special packages you choose from</p>
  </div>

  <div id="special-packages" class="owl-carousel">

            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="http://res.cloudinary.com/hapiglsx2/image/upload/v1502613928/shutterstock_70631242_estambul_jzgori.jpg" alt="">
                <div class="package-caption clearfix">
                  <div class="package-caption-left">
                    <div class="package-caption-name">
                      <h2>Tour Name</h2>
                    </div>
                    <div class="package-caption-rating">
                      <ul>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="package-caption-right">
                    <div class="package-caption-save">
                      <span><i class="fa fa-bookmark-o" aria-hidden="true"></i></span>
                    </div>
                    <div class="package-caption-price">
                      <span>$1000</span>
                    </div>
                  </div>
                </div>
                <a href="#"></a>
                <div class="package-day-night">
                  <span>3 days 3 nights</span>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="http://res.cloudinary.com/hapiglsx2/image/upload/v1502613928/shutterstock_70631242_estambul_jzgori.jpg" alt="">
                <div class="package-caption clearfix">
                  <div class="package-caption-left">
                    <div class="package-caption-name">
                      <h2>Tour Name</h2>
                    </div>
                    <div class="package-caption-rating">
                      <ul>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="package-caption-right">
                    <div class="package-caption-save">
                      <span><i class="fa fa-bookmark-o" aria-hidden="true"></i></span>
                    </div>
                    <div class="package-caption-price">
                      <span>$1000</span>
                    </div>
                  </div>
                </div>
                <a href="#"></a>
                <div class="package-day-night">
                  <span>3 days 3 nights</span>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="http://res.cloudinary.com/hapiglsx2/image/upload/v1502613928/shutterstock_70631242_estambul_jzgori.jpg" alt="">
                <div class="package-caption clearfix">
                  <div class="package-caption-left">
                    <div class="package-caption-name">
                      <h2>Tour Name</h2>
                    </div>
                    <div class="package-caption-rating">
                      <ul>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="package-caption-right">
                    <div class="package-caption-save">
                      <span><i class="fa fa-bookmark-o" aria-hidden="true"></i></span>
                    </div>
                    <div class="package-caption-price">
                      <span>$1000</span>
                    </div>
                  </div>
                </div>
                <a href="#"></a>
                <div class="package-day-night">
                  <span>3 days 3 nights</span>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="http://res.cloudinary.com/hapiglsx2/image/upload/v1502613928/shutterstock_70631242_estambul_jzgori.jpg" alt="">
                <div class="package-caption clearfix">
                  <div class="package-caption-left">
                    <div class="package-caption-name">
                      <h2>Tour Name</h2>
                    </div>
                    <div class="package-caption-rating">
                      <ul>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="package-caption-right">
                    <div class="package-caption-save">
                      <span><i class="fa fa-bookmark-o" aria-hidden="true"></i></span>
                    </div>
                    <div class="package-caption-price">
                      <span>$1000</span>
                    </div>
                  </div>
                </div>
                <a href="#"></a>
                <div class="package-day-night">
                  <span>3 days 3 nights</span>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="http://res.cloudinary.com/hapiglsx2/image/upload/v1502613928/shutterstock_70631242_estambul_jzgori.jpg" alt="">
                <div class="package-caption clearfix">
                  <div class="package-caption-left">
                    <div class="package-caption-name">
                      <h2>Tour Name</h2>
                    </div>
                    <div class="package-caption-rating">
                      <ul>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="package-caption-right">
                    <div class="package-caption-save">
                      <span><i class="fa fa-bookmark-o" aria-hidden="true"></i></span>
                    </div>
                    <div class="package-caption-price">
                      <span>$1000</span>
                    </div>
                  </div>
                </div>
                <a href="#"></a>
                <div class="package-day-night">
                  <span>3 days 3 nights</span>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="http://res.cloudinary.com/hapiglsx2/image/upload/v1502613928/shutterstock_70631242_estambul_jzgori.jpg" alt="">
                <div class="package-caption clearfix">
                  <div class="package-caption-left">
                    <div class="package-caption-name">
                      <h2>Tour Name</h2>
                    </div>
                    <div class="package-caption-rating">
                      <ul>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="package-caption-right">
                    <div class="package-caption-save">
                      <span><i class="fa fa-bookmark-o" aria-hidden="true"></i></span>
                    </div>
                    <div class="package-caption-price">
                      <span>$1000</span>
                    </div>
                  </div>
                </div>
                <a href="#"></a>
                <div class="package-day-night">
                  <span>3 days 3 nights</span>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="http://res.cloudinary.com/hapiglsx2/image/upload/v1502613928/shutterstock_70631242_estambul_jzgori.jpg" alt="">
                <div class="package-caption clearfix">
                  <div class="package-caption-left">
                    <div class="package-caption-name">
                      <h2>Tour Name</h2>
                    </div>
                    <div class="package-caption-rating">
                      <ul>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="package-caption-right">
                    <div class="package-caption-save">
                      <span><i class="fa fa-bookmark-o" aria-hidden="true"></i></span>
                    </div>
                    <div class="package-caption-price">
                      <span>$1000</span>
                    </div>
                  </div>
                </div>
                <a href="#"></a>
                <div class="package-day-night">
                  <span>3 days 3 nights</span>
                </div>
              </div>
            </div>





    </div>

</div>


<div class="customer-interets-wrapper">

  <div class="customer-interets clearfix">

    <div class="customer-interets-left">
      <h2>Josh Travels</h2>
    </div>
    <div class="customer-interets-right">
      <h2>The Quality that Distinguishes us Among other Travel Agencies</h2>
      <p>
        One of the qualities that set JOSH Travels apart
        from most agencies is the belief that though corporate
        travel needs may be similar, there are never the same
        for any two (2) corporate clients. Care and time is
        taken to develop packages most complimentary to the
        specific needs and unique circumstances of every
        patron, and no effort is spared to execute these
        packages to perfection.
        This derives from our key
        objective of creating value for our clients delivering
        efficient, safe and quality services.We offer our
        competitive prices and rates based upon
        submitted requests for services such as individual/ corporate
        travel tickets, tour packages, car rentals, etc.
        and also provide our clients with three different
        price quotations.
      </p>
    </div>

  </div>

</div>






<!--
<div class="" style="margin-top: 1000px;">

</div> -->

@endsection
