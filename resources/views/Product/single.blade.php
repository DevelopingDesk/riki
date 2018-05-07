
<!DOCTYPE html>
<html>
<head>
<title>description of product</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="product single " />
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
 <script src={{asset('smart/js/okzoom.js')}}></script>
  <script>
    $(function(){
      $('#example').okzoom({
        width: 150,
        height: 150,
        border: "1px solid black",
        shadow: "0 0 5px #000"
      });
    });
  </script>
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
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="/">Home</a><span>|</span></li>
				<li>	@if($name !=null)
				<li>{{$name->name}}</li>
				@endif</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner">
	@include('Partials.navbar')
		<div class="w3l_banner_nav_right">
			
			<div class="agileinfo_single">
				<h5>{{$product->name}}</h5>
				<div class="col-md-4 agileinfo_single_left">
					<img id="example" src="{{asset($product->image)}}" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-8 agileinfo_single_right">
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked>
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<div class="w3agile_description">
						<h4>Description :</h4>
						<p>{{$product->description}}</p>
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h4>{{$product->price}}$ <span></span></h4>
						</div>
						<div class="snipcart-details agileinfo_single_right_details">
							<a href="{{route('Cart.edit',$product->id)}}"><input type="submit" name="submit" value="Add to cart" class="btn btn-danger" /></a>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- brands -->
	<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_popular">
		<div class="container">
			<h3>Related Products</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1">
					
					
				
					
				
				<div class="w3ls_w3l_banner_nav_right_grid1">
					@foreach($rel as $rl)
					<div class="col-md-3 w3ls_w3l_banner_left">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="{{asset($rl->image)}}" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="{{route('single.product',$rl->id)}}"><img src="{{asset($rl->image)}}" alt=" " class="img-responsive" /></a>
											<p>{{$rl->name}}</p>
											<h4>${{$rl->price}} <span></span></h4>
										</div>
										<div class="snipcart-details">
											<a href="{{route('Cart.edit',$rl->id)}}"><input type="submit" name="submit" value="Add to cart" class="btn btn-danger" /></a>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					@endforeach
					<div class="clearfix"> </div>
				</div>
		</div>

	</div>

	<br>
	<div class="container">
			<h3>Featured Products</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1">
					
					
				
					
				
				<div class="w3ls_w3l_banner_nav_right_grid1">
					@foreach($fecpro as $rl)
					<div class="col-md-3 w3ls_w3l_banner_left">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="{{asset($rl->image)}}" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="{{route('single.product',$rl->id)}}"><img src="{{asset($rl->image)}}" alt=" " class="img-responsive" /></a>
											<p>{{$rl->name}}</p>
											<h4>${{$rl->price}} <span></span></h4>
										</div>
										<div class="snipcart-details">

								<a href="{{route('Cart.edit',$rl->id)}}"><input type="submit" name="submit" value="Add to cart" class="btn btn-danger" /></a>	</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					@endforeach
					<div class="clearfix"> </div>
				</div>
		</div>

	</div>
</div>
<!-- //brands -->
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