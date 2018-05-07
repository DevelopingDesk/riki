  <div class="footer">
    <div class="container">
      <div class="col-md-3 w3_footer_grid">
        <h3>informations</h3>
        <ul class="w3_footer_grid_list">
          <li><a href="">Phone: 0347-4125987 </a></li>
          <li><a href="">tell:0317-7371971</a></li>
          
          <li><a href="">Email:info@rick-finn.com</a></li>
        
        </ul>
      </div>
      <div class="col-md-3 w3_footer_grid">
        <h3>policy info</h3>
        <ul class="w3_footer_grid_list">
          <li><a href="/">FAQ</a></li>
          <li><a href="/">privacy policy</a></li>
          <li><a href="/">terms of use</a></li>
        </ul>
      </div>
      <div class="col-md-3 w3_footer_grid">
        <h3>what in stores</h3>
        <ul class="w3_footer_grid_list">
          @if($latsub!=null)
         @foreach($latsub  as $sb)
          <li><a href="{{route('subcategory.product',$sb->id)}}">{{$sb->name}}</a></li>
        @endforeach
        @endif
        </ul>
      </div>
      <div class="col-md-3 w3_footer_grid">
        <h3>Contacts</h3>
        <ul class="w3_footer_grid_list1">
          <li>Address: Malkay Kallan , Sialkot, Pakistan
Pakistan</li>
<li>  Tel.  0347-4125987 </li>
         <li>phone.:0321-1942541</li>
         <li>Office Address:
Malkay Kallan , Sialkot, Pakistan
Pakistan</li>
<li>Whatsapp Number:0347-4125987</li>
        </ul>
      </div>
      <div class="clearfix"> </div>
      <div class="agile_footer_grids">
        <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
          <div class="w3_footer_grid_bottom">
            <h4>100% secure payments</h4>
            <img src="{{asset('smart/images/card.png')}}" alt=" " class="img-responsive" />
          </div>
        </div>
        <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
          <div class="w3_footer_grid_bottom">
            <h5>connect with us</h5>
            <ul class="agileits_social_icons">
              <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
              <li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="wthree_footer_copy">
        <p>© 2018 rick finn store. All rights reserved | Design by <a href="www.netroxtech.com">netrox</a></p>
      </div>
    </div>
  </div>