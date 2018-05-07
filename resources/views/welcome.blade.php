
<!DOCTYPE html>
<html>
<head>
<title>Rick-finn</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="welcome to rikfin" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{asset('smart/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('smart/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="{{asset('smart/css/font-awesome.css')}}" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="{{asset('smart/js/jquery-1.11.1.min.js')}}"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
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
<!-- start-smoth-scrolling -->
</head>
  
<body>
<!-- header -->
 @include('Partials.header')
<!-- //header -->
<!-- banner -->
  <div class="banner">
   
   @include('Partials.navbar')
   @include('Partials.slider')
      <!-- flexSlider -->
        <link rel="stylesheet" href="{{asset('smart/css/flexslider.css')}}" type="text/css" media="screen" property="" />
        <script defer src="{{asset('smart/js/jquery.flexslider.js')}}"></script>
        <script type="text/javascript">
        $(window).load(function(){
          $('.flexslider').flexslider({
          animation: "slide",
          start: function(slider){
            $('body').removeClass('loading');
          }
          });
        });
        </script>
      <!-- //flexSlider -->
    </div>
    <div class="clearfix"></div>
  </div>
<!-- banner -->
  <div class="banner_bottom">
      <div class="wthree_banner_bottom_left_grid_sub">
      </div>
      <div class="wthree_banner_bottom_left_grid_sub1">
        
        <div class="col-md-6 wthree_banner_bottom_left">
@if($lat!=null)
          <div class="wthree_banner_bottom_left_grid">
            <img src="{{asset($lat->image)}}" alt=" " class="img-responsive" />
            <div class="wthree_banner_btm_pos">
             
            </div>
          </div>
          @endif
        </div>
@if($fe!=null)
       
        <div class="col-md-6 wthree_banner_bottom_left">
          <div class="wthree_banner_bottom_left_grid">
            <img src="{{asset($fe->image)}}" alt=" " class="img-responsive" />
            <div class="wthree_banner_btm_pos1">
              
            </div>
          </div>
        </div>
        @endif
        <div class="clearfix"> </div>
      </div>
      <div class="clearfix"> </div>
  </div>
<!-- top-brands -->
  <div class="top-brands">
    <div class="container">
      <h3>Hot Offers</h3>
      <div class="agile_top_brands_grids">
       @if($pro!=null)
       
     @foreach($pro as $pr)
        <div class="col-md-3 top_brand_left">
          <div class="hover14 column">
            <div class="agile_top_brand_left_grid">
              <div class="agile_top_brand_left_grid_pos">
                <img src="{{asset($pr->image)}}" alt=" " class="img-responsive" />
              </div>
              <div class="agile_top_brand_left_grid1">
                <figure>
                  <div class="snipcart-item block">
                    <div class="snipcart-thumb">
                      <a href="{{route('single.product',$pr->id)}}"><img src="{{asset($pr->image)}}" alt=" " class="img-responsive" /></a>
                      <p>{{$pr->name}}</p>
                      <h4>${{$pr->price}} <span>${{$pr->price}}</span></h4>
                    </div>
                    <div class="snipcart-details top_brand_home_details">
                      
                    </div>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div>
@endforeach
@endif

        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
<!-- //top-brands -->
<!-- fresh-vegetables -->
  <div class="fresh-vegetables">
    <div class="container">
      <h3>New Products</h3>
      <div class="w3l_fresh_vegetables_grids">
        <div class="col-md-3 w3l_fresh_vegetables_grid w3l_fresh_vegetables_grid_left">
          
        </div>
        <div class="col-md-12 w3l_fresh_vegetables_grid_right">
         @if($latproduct!=null)
          
           @foreach($latproduct as $pr)
        <div class="col-md-3 top_brand_left">
          <div class="hover14 column">
            <div class="agile_top_brand_left_grid">
              <div class="agile_top_brand_left_grid_pos">
                <img src="smart/images/offer.png" alt=" " class="img-responsive" />
              </div>
              <div class="agile_top_brand_left_grid1">
                <figure>
                  <div class="snipcart-item block">
                    <div class="snipcart-thumb">
                      <a href="{{route('single.product',$pr->id)}}"><img src="{{asset($pr->image)}}" alt=" " class="img-responsive" /></a>
                      <p>{{$pr->name}}</p>
                      <h4>${{$pr->price}} <span>${{$pr->price}}</span></h4>
                    </div>
                    <div class="snipcart-details top_brand_home_details">
                     <a href="{{route('Cart.edit',$pr->id)}}"><input type="submit" name="submit" value="Add to cart" class="btn btn-danger" /></a>
                    </div>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div>
@endforeach
@endif

        
          
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
<!-- //fresh-vegetables -->
<!-- newsletter -->
  <div class="newsletter">
    <div class="container">
      <div class="w3agile_newsletter_left">
        <h3>sign up for our newsletter</h3>
      </div>
      <div class="w3agile_newsletter_right">
        <form action="#" method="post">
          <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
          <input type="submit" value="subscribe now">
        </form>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
<!-- //newsletter -->
<!-- footer -->
@include('Partials.footer')
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('smart/js/bootstrap.min.js')}}"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
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
<!-- //here ends scrolling icon -->
<script src="{{asset('smart/js/minicart.js')}}"></script>
<script>
    paypal.minicart.render();

    paypal.minicart.cart.on('checkout', function (evt) {
      var items = this.items(),
        len = items.length,
        total = 0,
        i;

      // Count the number of each item in the cart
      for (i = 0; i < len; i++) {
        total += items[i].get('quantity');
      }

      if (total < 3) {
        alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
        evt.preventDefault();
      }
    });

  </script>
</body>
</html>
