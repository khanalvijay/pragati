<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $title ?? 'Page Title' }} Pragati Saving and Credit Cooperative &#8211; प्रगति बचत तथा ऋण सहकारी संस्था</title>

<link rel='stylesheet' href={{asset('/assets/style.css')}} media='all' />
<link rel='stylesheet' href={{asset('/assets/css/bootstrap.min.css')}} media='all' />
<link rel='stylesheet' href={{asset('/assets/css/all.min.css')}} media='all' />
<link rel='stylesheet' href={{asset('/assets/css/animate.css')}} media='all' />
<link rel='stylesheet' href={{asset('/assets/css/owl.theme.min.css')}} media='all' />
<link rel='stylesheet' href={{asset('/assets/css/owl.carousel.min.css')}} media='all' />
<link rel='stylesheet' href={{asset('/assets/css/style-1.css')}} media='all' />
<link rel='stylesheet' href={{asset('/assets/css/style.css')}} media='all' />

<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.15.4/css/all.css' media='all' integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css' media='all' integrity="sha384-Vq76wejb3QJM4nDatBa5rUOve+9gkegsjCebvV/9fvXlGWo4HCMR4cJZjjcF6Viv" crossorigin="anonymous" />

<link rel="icon" href="" sizes="32x32" />
<link rel="icon" href="g" sizes="192x192" />
<link rel="apple-touch-icon" href="" />
<style>
  @import url('https://fonts.googleapis.com/css2?family=Zeyada&display=swap');
</style>
@livewireStyles
</head>
<body>

<header class="clearfix">

<div class="container-fluid">

   <div class="row">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="logo"><a wire:navigate href="{{route('ShowHomes')}}"><img src="{{ asset('/storage/logo.png')}}" alt="Pragati Saving and Credit Cooperative"/></a></div>
      </div>

      <div class="col-12 col-sm-3 col-md-5 d-none d-sm-none d-md-block">
        <div class="logo-slogan">
          <img src="{{asset('/storage/anniversarylogo.png')}}" height="70px" width="120px" alt="slogan"/>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4">

    <div class="contact-top animated fadeInUp">
      <div class="top-contact d-inline-flex clearfix">
          <div class="top-cnt d-none d-md-block d-lg-block">
              <!--<a href="#"><i class="fa-graduation-cap "></i> क्यारियर</a>-->
              <a wire:navigate href="{{route('ShowIntrestRate')}}"><i class="far fa-envelope"></i> Intrest Rate</a></div>
		  <div class="top-cnt"> <a wire:navigate href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAMAAABBPP0LAAAAmVBMVEViZsViZMJiYrf9gnL8eWrlYkjgYkjZYkj8/PujwPybvPz4+PetraBEgfo+fvo3efkydfkqcvj8Y2T8UlL8Q0P8MzP9k4Hz8/Lu7u4DdPj9/VrKysI9fPoDc/EAZ7z7IiLHYkjp6ekCcOTk5OIASbfY/v21takAJrT5Dg6sYkjc3Nn94t2RkYD+y8KeYkjs/v7l5fz0dF22YkjWvcOLAAAAgElEQVR4AR2KNULFQBgGZ5J13KGGKvc/Cw1uPe62eb9+Jr1EUBFHSgxxjP2Eca6AfUSfVlUfBvm1Ui1bqafctqMndNkXpb01h5TLx4b6TIXgwOCHfjv+/Pz+5vPRw7txGWT2h6yO0/GaYltIp5PT1dEpLNPL/SdWjYjAAZtvRPgHJX4Xio+DSrkAAAAASUVORK5CYII=" alt="English" width="16" height="11" style="width: 16px; height: 11px;" /><span class="flag-title">English</span></a></div><div class="top-cnt"> <a wire:navigate href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAALCAYAAACtWacbAAAAxklEQVR4AWPQUz7xX0L72j8Qdi/wYcCGwYreMTD8vw/EYuonP2NVpK24C6zo1+PH/3/evv1fRGXHNwxFmvJr/v95+xakAITBioXl5v5BUSSrOPP/p/XrQQpBGGztRSDmE638D1ekKNEMkgBjdcet/4GaQArgGKxIRCgOrOBNR8f/Vw0NcAkYhikCSYLcAsaPfHz+g8RQFHHzOv5/npMDd/jTiIj/G4Amg8Thiti5TP8fBQoCJUGmgNggDFYIkoObBMQgAZwYAGu3s7zXekUzAAAAAElFTkSuQmCC" alt="नेपाली" width="9" height="11" style="width: 9px; height: 11px;" /><span class="flag-title">नेपाली</span></a></div><!--
          <div class="top-cnt"> <a href="#"><img src="#" alt="nepal"/>&nbsp;<span class="flag-title">नेपाली</span></a></div>
          <div class="top-cnt"> <a href=#"><img src="#" alt="kingdom"/>&nbsp;<span class="flag-title">English</span></a> </div>-->
        <div class="social-links d-none d-md-block d-lg-block">
          <ul>
            <li> <a href="https://www.facebook.com/" target="_blank" style="color:#FFF !important;"><i class="fab fa-facebook-f"></i></a> </li>
            <li> <a href="https://twitter.com/" target="_blank" style="color:#FFF !important;"><i class="fab fa-twitter"></i></a> </li>
            <li> <a href="https://www.instagram.com//" target="_blank" style="color:#FFF !important;"><i class="fab fa-instagram"></i></a> </li>
          </ul>
        </div>
      </div>
    </div>

      </div>

    </div>
</div>

  <div class="clearfix"></div>
  <div id="menu_area" class="menu-area">
    <div class="container-fluid">
      <div class="slogan-sm d-inline-flex">
        </div>
      <nav class="navbar navbar-light navbar-expand-lg mainmenu">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span><i class="fas fa-bars"></i></span> </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul id="menu-main-menu" class="navbar-nav" itemscope itemtype="http://www.schema.org/SiteNavigationElement"><li  id="menu-item-29" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-29 nav-item"><a wire:navigate itemprop="url" href="{{  url('') }}" class="nav-link"><span itemprop="name">Home</span></a></li>
<li  id="menu-item-30" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-30 nav-item"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-30"><span itemprop="name">About us</span></a>
<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-30">
	<li  id="menu-item-141" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-141 nav-item"><a wire:navigate itemprop="url" href="{{route('ShowAboutUs')}}" class="dropdown-item"><span itemprop="name">About Us</span></a></li>
	<li  id="menu-item-142" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-142 nav-item"><a wire:navigate itemprop="url" href="{{route('ShowMessageChairman')}}" class="dropdown-item"><span itemprop="name">Message from the chairman</span></a></li>
	<li  id="menu-item-134" class="menu-item menu-item-type-taxonomy menu-item-object-team-type menu-item-134 nav-item"><a wire:navigate itemprop="url" href="{{route('ShowBOD')}}" class="dropdown-item"><span itemprop="name">Board of Directors</span></a></li>
	<li  id="menu-item-132" class="menu-item menu-item-type-taxonomy menu-item-object-team-type menu-item-132 nav-item"><a wire:navigate itemprop="url" href="{{route('ShowAccountSC')}}" class="dropdown-item"><span itemprop="name">Account Supervision Committee</span></a></li>
	<li  id="menu-item-2413" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-2413 nav-item"><a wire:navigate itemprop="url" href="{{route('ShowOtherCommittee')}}" class="dropdown-item"><span itemprop="name">Other Committee</span></a>
	<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-30">
		<li  id="menu-item-1272" class="menu-item menu-item-type-taxonomy menu-item-object-team-type menu-item-1272 nav-item"><a itemprop="url" href="#" class="dropdown-item"><span itemprop="name">Loan Sub-Committee</span></a></li>
		<li  id="menu-item-1273" class="menu-item menu-item-type-taxonomy menu-item-object-team-type menu-item-1273 nav-item"><a itemprop="url" href="#" class="dropdown-item"><span itemprop="name">Education Sub-Committee</span></a></li>
		<li  id="menu-item-2406" class="menu-item menu-item-type-taxonomy menu-item-object-team-type menu-item-2406 nav-item"><a itemprop="url" href="#" class="dropdown-item"><span itemprop="name">Publication &amp; Communication Sub Committee</span></a></li>
		<li  id="menu-item-133" class="menu-item menu-item-type-taxonomy menu-item-object-team-type menu-item-133 nav-item"><a itemprop="url" href="#" class="dropdown-item"><span itemprop="name">Advisory Board</span></a></li>
		<li  id="menu-item-1311" class="menu-item menu-item-type-taxonomy menu-item-object-team-type menu-item-1311 nav-item"><a itemprop="url" href="#" class="dropdown-item"><span itemprop="name">Service Center management Committee</span></a></li>
	</ul>
</li>
	<li  id="menu-item-1204" class="menu-item menu-item-type-taxonomy menu-item-object-team-type menu-item-1204 nav-item"><a wire:navigate itemprop="url" href="{{route('ShowHOMT')}}" class="dropdown-item"><span itemprop="name">Head Office Management Team</span></a></li>
	<li  id="menu-item-1206" class="menu-item menu-item-type-taxonomy menu-item-object-team-type menu-item-1206 nav-item"><a wire:navigate itemprop="url" href="{{route('ShowSSH')}}" class="dropdown-item"><span itemprop="name">Service Center Heads</span></a></li>
</ul>
</li>
<li  id="menu-item-116" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-116 nav-item"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-116"><span itemprop="name">Services</span></a>
<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-116">
	<li  id="menu-item-218" class="menu-item menu-item-type-post_type menu-item-object-schemes menu-item-218 nav-item"><a wire:navigate itemprop="url" href="{{route('ShowSaving')}}" class="dropdown-item"><span itemprop="name">Saving Schemes</span></a></li>
	<li  id="menu-item-216" class="menu-item menu-item-type-post_type menu-item-object-schemes menu-item-216 nav-item"><a wire:navigate itemprop="url" href="{{route('ShowLoan')}}" class="dropdown-item"><span itemprop="name">Loan Scheme</span></a></li>
	<li  id="menu-item-1142" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1142 nav-item"><a wire:navigate itemprop="url" href="{{route('ShowRemit')}}" class="dropdown-item"><span itemprop="name">Remittance</span></a></li>
	</ul>
</li>
<li  id="menu-item-1115" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1115 nav-item"><a wire:navigate itemprop="url" href="{{route('ShowDownload')}}" class="nav-link"><span itemprop="name">Downloads</span></a></li>
<li  id="menu-item-118" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-118 nav-item"><a wire:navigate itemprop="url" href="{{route('ShowReports')}}" class="nav-link"><span itemprop="name">Reports</span></a></li>
<li  id="menu-item-115" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-115 nav-item"><a wire:navigate itemprop="url" href="{{route('ShowBranches')}}" class="nav-link"><span itemprop="name">Branches</span></a></li>
<li  id="menu-item-1015" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1015 nav-item"><a wire:navigate itemprop="url" href="{{route('ShowGallery')}}" class="nav-link"><span itemprop="name">Gallery</span></a></li>
<li  id="menu-item-797" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-797 nav-item"><a wire:navigate itemprop="url" href="{{route('ShowNews')}}" class="nav-link"><span itemprop="name">News</span></a></li>
<li  id="menu-item-119" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-119 nav-item"><a wire:navigate itemprop="url" href="{{route('ShowFAQ')}}" class="nav-link"><span itemprop="name">FAQ</span></a></li>
<li  id="menu-item-119" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-119 nav-item"><a wire:navigate itemprop="url" href="{{route('ShowContact')}}" class="nav-link"><span itemprop="name">Contact Us</span></a></li>
</ul>
        </div>
      </nav>
    </div>

  </div>

  <div class="clearfix"></div>
</header>


{{ $slot }}



<!-- footer -->

<footer>
  <img src="{{asset('/assets/images/images/top-footerbg.png')}}" style="background:#FFFF;" width='100%'>
  <div class="footer-inner">
  <div class="container">
    <div class="footer-content py-4">
    <div class="row">
    @php
            $settingdetials = DB::table('settings')->get();
        @endphp
        @foreach($settingdetials as $settingdetial)
      <div class="col-12 col-sm-6 col-md-3">
        <div class="address-links mt-3 animated zoomIn" style="animation-delay:2s">
          <h4 class="footer-title">Office Address</h4>
          <div class="footer-line"></div>
          <div class="mt-3 clearfix">
            <div class="address-icon"> <i class="fas fa-map-marker-alt"></i> </div>
            <div class="address-info_2"> <small>{{$settingdetial->address}}</small> </div>
          </div>
          <div class="mt-3 clearfix">
            <div class="address-icon"> <i class="fas fa-phone-alt"></i> </div>
            <div class="address-info_2"> <small>{{$settingdetial->phone}}</small> </div>
          </div>
          <div class="mt-3 clearfix">
            <div class="address-icon"> <i class="far fa-envelope"></i> </div>
            <div class="address-info_2"> <small style="font"12px;>{{$settingdetial->email}}</small> </div>
          </div>
        </div>
        </div>
        @endforeach
        
      <div class="col-12 col-sm-6 col-md-3">
        <div class="footer-links clearfix mt-3 animated zoomIn" style="animation-delay:2s">
                      <h4 class="footer-title">quick-links</h4>
          <div class="footer-line"></div>
          <ul id="menu-quick-links" class="mt-3" itemscope itemtype="http://www.schema.org/SiteNavigationElement"><li id="menu-item-1496" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1496"><a href="#">Annual Calender</a></li>
<li id="menu-item-1628" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1628"><a wire:navigate href="{{route('ShowImportantLink')}}">Important Links</a></li>
<li id="menu-item-1497" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1497"><a wire:navigate href="{{route('ShowExchangeRate')}}">Exchange Rates</a></li>
<li id="menu-item-1639" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1639"><a href="#">EMI Calculator</a></li>
</ul>        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="footer-links clearfix mt-3 animated zoomIn" style="animation-delay:3s">
                      <h4 class="footer-title">Services</h4>
          <div class="footer-line"></div>
          <ul id="menu-services" class="mt-3" itemscope itemtype="http://www.schema.org/SiteNavigationElement"><li id="menu-item-993" class="menu-item menu-item-type-post_type menu-item-object-schemes menu-item-993"><a wire:navigate href="{{route('ShowRemit')}}">Remittance</a></li>
<li id="menu-item-994" class="menu-item menu-item-type-post_type menu-item-object-schemes menu-item-994"><a wire:navigate href="{{route('ShowSaving')}}">Saving Schemes</a></li>
<li id="menu-item-995" class="menu-item menu-item-type-post_type menu-item-object-schemes menu-item-995"><a wire:navigate href="{{route('ShowLoan')}}">Loan Scheme</a></li>
</ul>        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <div class="subsribe-wrap mt-3 animated zoomIn" style="animation-delay:4s">
          <h4 class="footer-title">Newsletter</h4>
          <div class="footer-line"></div>
          <div class="subscribe-from mt-3">
            <form  method="post" action="#" onsubmit="return newsletter_check(this)">
              <div class="clearfix">
                <input type="email" name="ne" placeholder="Email Address" required="">
                <button type="submit" class="subscribe-button">Subscribe</button>
              </div>
            </form>
          </div>
          <div class="social-links mt-2">
            <ul>
            <li> <a href="#" target="_blank" style="color:#FFF !important;"><i class="fab fa-facebook-f"></i></a> </li>
            <li> <a href="#" target="_blank" style="color:#FFF !important;"><i class="fab fa-twitter"></i></a> </li>
            <li> <a href="#" target="_blank" style="color:#FFF !important;"><i class="fab fa-instagram"></i></a> </li>
          </ul>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
  </div>
  </div>
  <div class="footer-bottom">
    <div class="copy-right">
      <p>@ 2024 | Pragati Saving and Credit Cooperative | Design <a href="#" target="_blank"> Xerstech </a></p>
    </div>
  </div>
</footer>

<a id="back-to-top" href="#" class="btn btn-success btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>

<script src="{{asset('/assets/js/vendor/jquery.min.js')}}"></script>
<script src="{{asset('/assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('/assets/js/vendor/wow.min.js')}}"></script>
<script src="{{asset('/assets/js/vendor/owl.carousel.min.js')}}"></script>
<script src="{{asset('/assets/js/vendor/acmeticker.min.js')}}"></script>
<script src="{{asset('/assets/js/script.js')}}"></script>
<script>
  $(window).scroll(function(){
    if($(this).scrollTop() > 200){
    $('.menu-area').addClass('sticky')
    } else{
    $('.menu-area').removeClass('sticky')
       }
  });
</script>

<script>
  $(document).ready(function(){
    $(".testimonial-slider1").owlCarousel({
        items:4,
        itemsDesktop:[1199,4],
        itemsDesktopSmall:[979,4],
        itemsTablet:[768,3],
        itemsMobile:[575,1],
        pagination:false,
        navigation:true,
        navigationText:["",""],
        slideSpeed:1000,
        autoPlay:true
    });
});


 $(document).ready(function(){
    $(".testimonial-slider1").owlCarousel({
        items:6,
        itemsDesktop:[1199,6],
        itemsDesktopSmall:[979,6],
        itemsTablet:[768,4],
        itemsMobile:[600,3],
        pagination:false,
        navigation:true,
        navigationText:["",""],
        slideSpeed:1000,
        autoPlay:true
    });
});


jQuery(document).ready(function ($) {
        $('.my-news-ticker').AcmeTicker({
            type:'typewriter',
            direction: 'right',
            speed:50,
            controls: {
                prev: $('.acme-news-ticker-prev'),
                toggle: $('.acme-news-ticker-pause'),
                next: $('.acme-news-ticker-next')
            }
        });
    })

</script>
@livewireScripts
</body>

</html>
