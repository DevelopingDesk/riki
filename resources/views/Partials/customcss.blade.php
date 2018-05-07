<link rel="shortcut icon" type="image/png" href="{{ asset('assets/frontend/logo.png')}}" />
<link href="{{asset('smart/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('smart/js/jquery-1.11.0.min.js')}}"></script>
<!-- Custom Theme files -->
<link href="{{asset('smart/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="wackado" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Hind:400,500,300,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('smart/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('smart/js/easing.js')}}"></script>
    <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){     
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
    </script>
<!-- //end-smoth-scrolling -->
<script src="{{asset('smart/js/simpleCart.min.js')}}"> </script>
<script src="{{asset('smart/js/bootstrap.min.js')}}"></script>