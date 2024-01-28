<main>
<?php $ptitle='Branches'; ?>
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

  <section class="branches-wrapper py-5">
    <div class="container">
      <div class="our-branch py-4">
        <div class="animated rotateInDownLeft mt-3" style="animation-delay:1s">
            <div class="title-sub">Branches</div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-widget mb-4">
                        <h2>Our <span>Branches</span></h2>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">

        @foreach ($branchesdetials as $branchdetial)
          <div class="col-12 col-sm-4 col-md-4">
            <div class="branch-content  mb-4 animated zoomIn" style="animation-delay:1s">
                <div class="branch-info">
                    <h3>{{$branchdetial['blocation']}} </h3>


                                        <div class="branch-dsc clearfix">

                        <div class="address-info_1"> {{$branchdetial['bheadname']}} <small> Branch Manager
                            </small>
                        </div>
                    </div>

                                        <div class="branch-dsc clearfix">
                        <div class="address-info"><i class="fas fa-envelope" style="font-size:14px;"></i> <small style="font-size:12px;"> {{$branchdetial['bheademail']}}</small> </div>
                    </div>

                    <div class="branch-dsc clearfix">

                        <div class="address-info float-left"><i class="fas fa-phone-alt"></i> <small>{{$branchdetial['bheadphone']}}</small> </div>
                                                <div class="address-info float-right"><i class="fa fa-map-markert"></i> <small> <a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#basicModals0">View in Map</a></small> </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- basic modal -->
        <div class="modal fade" id="basicModals0" tabindex="-1" role="dialog" aria-labelledby="basicModals" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                                                 <iframe></iframe>
                                            </div>
                </div>
            </div>
        </div>
        @endforeach
      </div>
   </div>
  </div>
      </section>
</main>
