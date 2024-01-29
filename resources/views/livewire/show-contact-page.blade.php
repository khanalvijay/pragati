<main>
  <?php $ptitle='Contact Us'; ?>
  <!-- breadcrumb -->
  <section class="inner-header parallax" data-bg-img="background-image:url({{asset('storage/breadcum.jpg')}}" style="background-image:url({{asset('storage/breadcum.jpg')}});background-position:center;">
  <div class="container p-60">
    <h2 class="title"><?php echo $ptitle ?></h2>
    <div class="breadcrumb">
      <ol class="breadcrumb text-center">
        <li><a href="{{route('ShowHomes')}}">Home</a></li>
        <li class="active"><?php echo $ptitle ?></li>
      </ol>
    </div>
  </div>
  </section>
<section class="client-wrapper py-5">
  <div class="container">
    <div class="py-3">
      <div class="title-widget">
        <h1>Contact Us</h1>
      </div>
      <span style="font-size:18px;font-style:italic;"><p>Do not hesitate to reach out. Just fill in the contact form here<br />
and we’ll be sure to reply as fast as possible.</p>
</span> </div>
    <div class="row">
      @foreach($settingdetials as $settingdetial)
      <div class="col-12 col-sm-4 col-md-4">
        <div class="chairman-msg mt-3 animated zoomIn" style="animation-delay:2s">
          <h3 style="color:#fff;margin-bottom:30px;"></h3>
          <div class="mt-3 clearfix">
            <div class="address-icon"> <i class="fas fa-map-marker-alt"></i> </div>
            <div class="address-info"> <small>{{$settingdetial['address']}}</small> </div>
          </div>
          <div class="mt-3 clearfix">
            <div class="address-icon"> <i class="fas fa-phone-alt"></i> </div>
            <div class="address-info"> <small>{{$settingdetial['phone']}}</small> </div>
          </div>
          <div class="mt-3 clearfix">
            <div class="address-icon"> <i class="far fa-envelope"></i> </div>
            <div class="address-info"> <small>{{$settingdetial['email']}}</small> </div>
          </div>
          <div class="social-links mt-2">
            <ul>
              <li> <a href="{{$settingdetial['fb_url']}}" target="_blank" style="color:#FFF !important;"><i class="fab fa-facebook-f"></i></a> </li>
              <li> <a href="{{$settingdetial['tw_url']}}" target="_blank" style="color:#FFF !important;"><i class="fab fa-twitter"></i></a> </li>
              <li> <a href="{{$settingdetial['in_url']}}" target="_blank" style="color:#FFF !important;"><i class="fab fa-instagram"></i></a> </li>
            </ul>
          </div>
        </div>
      </div>


      <div class="col-12 col-sm-8 col-md-8">
        <div class="welcome-info mt-3">

<div class="wpcf7 no-js" id="wpcf7-f169-p117-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<form action="/contact-us/#wpcf7-f169-p117-o1" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="169" />
<input type="hidden" name="_wpcf7_version" value="5.8.4" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f169-p117-o1" />
<input type="hidden" name="_wpcf7_container_post" value="117" />
<input type="hidden" name="_wpcf7_posted_data_hash" value="" />
</div>
<div class="row">
	<div class="col-12 col-sm-6 col-md-6">
		<div class="input-group mb-3">
			<div class="input-group-prepend">
			</div>
			<p><span class="wpcf7-form-control-wrap" data-name="first-name"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="First Name" value="" type="text" name="first-name" /></span>
			</p>
		</div>
	</div>
	<div class="col-12 col-sm-6 col-md-6">
		<div class="input-group mb-3">
			<div class="input-group-prepend">
			</div>
			<p><span class="wpcf7-form-control-wrap" data-name="last-name"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Last Name" value="" type="text" name="last-name" /></span>
			</p>
		</div>
	</div>
	<div class="col-12 col-sm-6 col-md-6">
		<div class="input-group mb-3">
			<div class="input-group-prepend">
			</div>
			<p><span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Email" value="" type="email" name="your-email" /></span>
			</p>
		</div>
	</div>
	<div class="col-12 col-sm-6 col-md-6">
		<div class="input-group mb-3">
			<div class="input-group-prepend">
			</div>
			<p><span class="wpcf7-form-control-wrap" data-name="subject"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Subject" value="" type="text" name="subject" /></span>
			</p>
		</div>
	</div>
</div>
<div class="input-group mb-3">
	<div class="input-group-prepend">
	</div>
	<p><span class="wpcf7-form-control-wrap" data-name="msg"><textarea cols="50" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Message" name="msg"></textarea></span>
	</p>
</div>
<div class="my-3">
	<div class="btn-block">
		<p><input class="wpcf7-form-control wpcf7-submit has-spinner btn btn-site" type="submit" value="Send" />
		</p>
	</div>
</div><div class="wpcf7-response-output" aria-hidden="true"></div>
</form>
</div>
        </div>
      </div>


    </div>

    <div class="map-wrap bg-white my-5">
    {!! $settingdetial->map !!}
    </div>
      @endforeach
  </div>
</section>
<style>
    .address-info{
        color: #fff;
    }
</style>
</main>
