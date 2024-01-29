<main>

  <!-- Modal -->
  <div class="modal fade home-modal bd-example-modal-lg" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <a href=""><img src="https://hamronepalcoop.com.np/wp-content/uploads/2023/06/Unificcation-Transaction-1.png" title="" alt=""/></a>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade home-modal bd-example-modal-lg" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <a href=""><img src="https://hamronepalcoop.com.np/wp-content/uploads/2023/05/pension-bachat.png" title="" alt=""/></a>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade home-modal bd-example-modal-lg" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <a href=""><img src="https://hamronepalcoop.com.np/wp-content/uploads/2023/09/382464271_785221613614579_1841169405641956896_n.jpg" title="" alt=""/></a>
        </div>
      </div>
    </div>
  </div>
  <!-- slider -->

  <section class="slider-section">
   <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
     <div class="carousel-inner">
             <div class="carousel-item active"> <img class="d-block w-100" src="https://hamronepalcoop.com.np/wp-content/uploads/2022/01/cover-photos.jpg" alt="Hamro Nepal Saving and Credit Cooperative"> </div>
          @foreach ($sliderdetials as $sliderdetial) <div class="carousel-item"> <img class="d-block w-100" src="{{asset('storage/'.$sliderdetial['slideimage'])}}" alt="Hamro Nepal Saving and Credit Cooperative"> </div>
           @endforeach
     </div>
     <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
 </section>




  <!-- welcome -->
  <section class="welcome-wrapper clearfix">
    <div class="container">
         <div class="clearfix"></div>
   <div class="content-inner clearfix">

        <div class="row">
          <div class="col-12 col-sm-4 col-md-4 animated fadeInLeft" style="animation-delay:1s">
                      <div class="chairman-msg">
              <h2>Message from the chairman </h2>
              <p>First of all, I would like to express my heartiest thanks to all of our members, stakeholders and partners, which we able to get the achievement by our members services and institutional growth. We have been more committed than before to deliver effective professional&hellip;  <a href="https://hamronepalcoop.com.np/message-from-chairman/" class="btn-read">Read More</a></p>

              <div class="clearfix">
                <div class="chairman-img"> <img src="https://hamronepalcoop.com.np/wp-content/uploads/2022/02/Chairman-Photo.png" alt="Message from the chairman"/> </div>
                <div class="chairman-info">
                  <h5>John Doe</h5>
                  <h6>Position</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-8 col-md-8 animated fadeInRight" style="animation-delay:1s">
                                <div class="welcome-info">
              <h1 class="mb-3">Welcome to Pragati SACCOS</h1>

              <!--<p> <span></span> </p>-->
              <p>
                  <span>
                      <!-- wp:paragraph -->
  <p>Gravida dictum fusce ut placerat orci nulla pellentesque dignissim enim sit amet venenatis urna cursus eget nunc scelerisque viverra mauris in aliquam sem fringilla ut morbi tincidunt augue interdum velit euismod in pellentesque massa placerat duis ultricies lacus sed turpis tincidunt id aliquet risus feugiat in ante metus dictum at tempor commodo ullamcorper a lacus vestibulum sed arcu non odio euismod lacinia at quis risus sed vulputate odio ut enim blandit volutpat maecenas volutpat blandit aliquam etiam erat velit scelerisque in dictum non consectetur a erat nam at lectus urna duis convallis convallis tellus id interdum velit laoreet id donec ultrices tincidunt arcu non sodales neque sodales ut etiam sit amet nisl purus in mollis nunc sed id semper risus in hendrerit gravida rutrum quisque non tellus orci ac auctor augue mauris augue neque gravida in fermentum et sollicitudin ac orci phasellus.</p>
  <!-- /wp:paragraph -->                </span>
              </p>
              <a href="#" class="btn btn-site mt-3">Read More</a> </div>
          </div>
        </div>
      </div>
    </div>
  </section>







  <!-- schemes-content -->
             <section class="schemes-wrapper clearfix">
    <div class="container">
      <div class="scheme-inner">
        
        <div class="title-widget">
          <h2>Our <span>Schemes</span></h2>
        </div>
        <div class="row">
                  <div class="col-12 col-sm-6 col-md-3 animated zoomIn" style="animation-delay:1s">
            <div class="scheme-box text-center mt-3">
              <div class="icon-bx mb-4"><i class="fas fa-piggy-bank"></i></div>
              <h3> <span> Saving Schemes </span> </h3>
              <div class="btn-block mt-4"><a href="#" class="btn btn-scheme">Read More</a></div>
            </div>
          </div>

                <div class="col-12 col-sm-6 col-md-3 animated zoomIn" style="animation-delay:1s">
            <div class="scheme-box text-center mt-3">
              <div class="icon-bx mb-4"><i class="fas fa-comments-dollar"></i></div>
              <h3> <span> Loan Scheme </span> </h3>
              <div class="btn-block mt-4"><a href="#" class="btn btn-scheme">Read More</a></div>
            </div>
          </div>

                <div class="col-12 col-sm-6 col-md-3 animated zoomIn" style="animation-delay:1s">
            <div class="scheme-box text-center mt-3">
              <div class="icon-bx mb-4"><i class="fas fa-university"></i></div>
              <h3> <span> Remittance </span> </h3>
              <div class="btn-block mt-4"><a href="#" class="btn btn-scheme">Read More</a></div>
            </div>
          </div>

                <div class="col-12 col-sm-6 col-md-3 animated zoomIn" style="animation-delay:1s">
            <div class="scheme-box text-center mt-3">
              <div class="icon-bx mb-4"><i class="fas fa-file-export"></i></div>
              <h3> <span> Life Insurance </span> </h3>
              <div class="btn-block mt-4"><a href="#" class="btn btn-scheme">Read More</a></div>
            </div>
          </div>

              </div>
      </div>
    </div>
  </section>


  <!-- Remittance Services -->
  <section class="remittance-wrapper clearfix">
    <div class="container">
      <div class="scheme-inner">
        
        <div class="title-widget">
          <h2>Remittance <span>Services</span></h2>
        </div>
        <div class="testimonial-slider1 owl-carousel">
                    <div class="testimonial ">
            <div class="image-remittance"> <a href="javascript:void(0)"><img src="https://hamronepalcoop.com.np/wp-content/uploads/2023/03/nepal-remit.png" alt="Nepal Remit"/></a> </div>
          </div>
                <div class="testimonial ">
            <div class="image-remittance"> <a href="javascript:void(0)"><img src="https://hamronepalcoop.com.np/wp-content/uploads/2022/03/featured.png" alt="Esewa Money Transfer"/></a> </div>
          </div>
                <div class="testimonial ">
            <div class="image-remittance"> <a href="javascript:void(0)"><img src="https://hamronepalcoop.com.np/wp-content/uploads/2022/01/New-Project-2.png" alt="City Express"/></a> </div>
          </div>
                <div class="testimonial ">
            <div class="image-remittance"> <a href="javascript:void(0)"><img src="https://hamronepalcoop.com.np/wp-content/uploads/2021/09/New-Project-4.png" alt="Himal Remit"/></a> </div>
          </div>
                <div class="testimonial ">
            <div class="image-remittance"> <a href="javascript:void(0)"><img src="https://hamronepalcoop.com.np/wp-content/uploads/2021/09/New-Project-6.png" alt="IME"/></a> </div>
          </div>
                <div class="testimonial ">
            <div class="image-remittance"> <a href="javascript:void(0)"><img src="https://hamronepalcoop.com.np/wp-content/uploads/2022/01/New-Project-5.png" alt="IME Pay"/></a> </div>
          </div>
                <div class="testimonial ">
            <div class="image-remittance"> <a href="javascript:void(0)"><img src="https://hamronepalcoop.com.np/wp-content/uploads/2022/01/New-Project-7.png" alt="Ipay Remit"/></a> </div>
          </div>
                <div class="testimonial ">
            <div class="image-remittance"> <a href="javascript:void(0)"><img src="https://hamronepalcoop.com.np/wp-content/uploads/2022/01/New-Project-8.png" alt="parbhu"/></a> </div>
          </div>
                <div class="testimonial ">
            <div class="image-remittance"> <a href="https://www.westernunion.com/np/en/home.html"><img src="https://hamronepalcoop.com.np/wp-content/uploads/2021/09/New-Project-9.png" alt="Western Union"/></a> </div>
          </div>

        </div>
      </div>


    </div>
  </section>

</main>
