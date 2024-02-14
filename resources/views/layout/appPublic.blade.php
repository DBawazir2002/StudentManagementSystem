<!doctype html>
<html>
<head>
<title>@yield('title')</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--bootstrap-->
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
<!--coustom css-->
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"/>
<!--script-->
<script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
<!-- js -->
<script src="{{asset('js/bootstrap.js')}}"></script>
<!-- /js -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--/fonts-->
<!--hover-girds-->
<link rel="stylesheet" type="text/css" href="{{asset('css/default.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('css/component.css')}}" />
<script src="{{asset('js/modernizr.custom.js')}}"></script>
<!--/hover-grids-->
<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
<!--script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!--/script-->
</head>
<body>
<!--header-->
<div class="header" id="home">
    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"> </span>
          <span class="icon-bar"> </span>
          <span class="icon-bar"> </span>
        </button>
        <h1><a class="navbar-brand" href="index.php">SMS</a></h1>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right margin-top cl-effect-2">
              <li><a href="/"><span data-hover="Home">Home</span></a></li>
              <li><a href="/about"><span data-hover="About">About</span></a></li>

              <li><a href="/contact"><span data-hover="Contact">Contact</span></a></li>
              <li><a href="/login"><span data-hover="Contact">Login</span></a></li>
              {{-- <li><a href="#"><span data-hover="Shortcodes">Student</span></a></li> --}}
            </ul>
            <div class="clearfix"> </div>
          </div><!-- /.navbar-collapse -->
      <!-- /.container-fluid -->

    </nav>
<!--/script-->
     <div class="clearfix"> </div>
</div>
<!-- Top Navigation -->

<!--header-->


@yield('content')


<!--footer-->
<div class="footer">
    <!-- container -->
    <div class="container">
      <div class="col-md-6 footer-left">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/contact">Contact</a></li>
          <li><a href="/login">Login</a></li>
          {{-- <li><a href="#">Student</a></li> --}}
        </ul>

      </div>
      <div class="col-md-3 footer-middle">
        <h3>Address</h3>
        <div class="address">
          <p>World</p>
        </div>
        <div class="phone">
          <p>+96*********************</p>
        </div>
         </div>
      <div class="col-md-3 footer-right">
        <h3>SMS</h3>
        <p>Proin eget ipsum ultrices, aliquet velit eget, tempus tortor. Phasellus non velit sit amet diam faucibus molestie tincidunt efficitur nisi.</p>
      </div>
      <div class="clearfix"> </div>
    </div>
    <!-- //container -->
  </div>
<!--/footer-->
<!--copy-rights-->
<div class="copyright">
    <!-- container -->
    <div class="container">
      <div class="copyright-left">
      <p>© <?php echo date('Y');?> Student Management System </p>
      </div>
      <div class="copyright-right">
        <ul>
          <li><a href="#" class="twitter"> </a></li>
          <li><a href="#" class="twitter facebook"> </a></li>
          <li><a href="#" class="twitter chrome"> </a></li>
          <li><a href="#" class="twitter pinterest"> </a></li>
          <li><a href="#" class="twitter linkedin"> </a></li>
          <li><a href="#" class="twitter dribbble"> </a></li>
        </ul>
      </div>
      <div class="clearfix"> </div>

    </div>
    <!-- //container -->
    <!---->
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear'
        };
        */
    $().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!---->
  </div>


</body>
</html>
