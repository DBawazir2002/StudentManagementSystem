@extends('layout.appPublic')
@section('title')
Home Page
@endsection

@section('content')
<div class="banner">
    <div class="container">
    <script src="js/responsiveslides.min.js"></script>
   <script>
      $(function () {
        $("#slider").responsiveSlides({
          auto: true,
          nav: true,
          speed: 500,
          namespace: "callbacks",
          pager: true,
        });
      });
    </script>
  <div class="slider">
         <div class="callbacks_container">
          <ul class="rslides" id="slider">
           <li>
            <h3>Student Management System</h3>
             <p>Registered Students can Login Here</p>
            <div class="readmore">
            <a href="{{url('login')}}">Student Login<i class="glyphicon glyphicon-menu-right"> </i></a>
            </div>
           </li>


          </ul>
        </div>
      </div>
  </div>
    </div>
  <div class="welcome">
      <div class="container">

    <h2>About Us</h2>
    <p>
        <div style="text-align: start;">
            <font color="#7b8898" face="Mercury SSm A, Mercury SSm B, Georgia, Times, Times New Roman, Microsoft YaHei New, Microsoft Yahei, ????, ??, SimSun, STXihei, ????, serif">
                <span style="font-size: 26px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </span>
            </font><br>
        </div>
    </p>

    </div>
    </div>
    <!--/welcome-->

    <!--testmonials-->
    <div class="testimonials">
        <div class="container">
                <div class="testimonial-nfo">
            <h3>Public Notices</h3>
            @isset($publicNotices)
                    @foreach ($publicNotices  as $publicNotice)
                        <marquee  style="height:350px;" direction ="up" onmouseover="this.stop();" onmouseout="this.start();">
                            <a href="{{url('/publicNotice/'.$publicNotice->id)}}" target="_blank" style="color:#fff;">{{$publicNotice->noticeTitle}}
                            <hr /><br />

                    @endforeach
                </marquee></div>
            @endisset
        </div>
    </div>
    <!--\testmonials-->
    <!--specfication-->

    <!--/specfication-->



@endsection
