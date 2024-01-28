<main>
  <?php $ptitle = 'FAQS'; ?>
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
      <div class="relative-wrapper">
        <div class="contact-content py-5 px-4">
          <div class="row">
            <div class="col-12 col-md-10 col-md-offset-1 offset-md-1">
              <div class="wow fadeIn animated" data-wow-delay="0.5s" style="visibility: visible;-webkit-animation-delay: 0.5s; -moz-animation-delay: 0.5s; animation-delay: 0.5s;">
                <div id="accordion">

                  @foreach ($faqdetials as $faqdetial)

                  <div class="card">
                    <div class="card-header" id="heading1">
                      <h5 class="mb-0">
                        <button style="text-decoration: none;" class="btn btn-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                         {{$faqdetial['question']}}</button>
                      </h5>
                    </div>

                    <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion">
                      <div class="card-body">
                        <ul>
                        {!! $faqdetial['answer'] !!}
                        </ul>
                      </div>
                    </div>
                  </div>
                  @endforeach


                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </section>
</main>