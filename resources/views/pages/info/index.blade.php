@extends('layouts.app')

@section('content')

<div class="tour-infos-wrapper clearfix">
  <div class="tour-infos-left">
    <div class="tour-infos-header">
      <h2>From Josh Travels</h2>
    </div>
    <div id="tourInfos" class="clearfix">

      <figure class="snip1527">
        <div class="image"><img src="https://res.cloudinary.com/hjp6lmmoa/image/upload/v1504186172/image-20150617-23337-1k5m9uq_vt2vue.jpg" alt="pr-sample23" /></div>
        <figcaption>
          <div class="date"><span class="day">31</span><span class="month">Aug</span></div>
          <h3>Malaria</h3>
          <p>
            Malaria is a serious, sometimes fatal, disease caused by a parasite
          </p>
        </figcaption>
        <a href="{{route('tourInfo.malaria')}}"></a>
      </figure>

      <figure class="snip1527">
        <div class="image"><img src="https://res.cloudinary.com/hjp6lmmoa/image/upload/v1504185156/Selection-of-District-Capitals-In-Ghana_uia3oy.jpg" alt="pr-sample23" /></div>
        <figcaption>
          <div class="date"><span class="day">30</span><span class="month">Aug</span></div>
          <h3>Recommended Items to Bring to Ghana</h3>
          <p>
            Everything you need to know
          </p>
        </figcaption>
        <a href="{{route('tourInfo.itemsToBringToGhana')}}"></a>
      </figure>

    </div>
  </div>

  <div class="blog-posts-right">
    <div class="blog-add-text">
      <span>ADVERTISEMENT</span>
    </div>
    <div class="blog-add-banner">
        <a href="#">
          <img src="https://s-media-cache-ak0.pinimg.com/originals/1c/9c/01/1c9c016b430887d8d135b665ebd62e9e.jpg" alt="">
          <!-- <img src="http://cdn.omgvoice.com/images/2017/05/OMG-Sidebar-2.png" alt=""> -->

        </a>
    </div>
  </div>


</div>

@stop
