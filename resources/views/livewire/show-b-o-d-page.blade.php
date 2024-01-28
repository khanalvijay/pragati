<main>
  <?php $ptitle = 'Board of Directors'; ?>
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

  <div class="team-top" style="background-color: #e6e7e9;">
  </div>
  <section class="client-wrapper py-5">
    <div class="container">

      <div class="py-4">

        <div class="row">

          <div class="col-12 col-sm-12 col-md-4 offset-md-4 col-md-offset-4">
            <div class="text-center director-team">
              <div class="mb-3">
                <div class="team-img">
                @if ($boddetials->count() > 0 && $boddetials[0]->photo)
    <img src="{{ asset('storage/'.$boddetials[0]->photo) }}" alt="Image">
@else
    <img src="/storage/photoplaceholder.jpg" alt="Placeholder Image">
@endif
                </div>
                <div class="team-dsrp pt-3">
                  <h5>{{ $boddetials[0]->name }}</h5>
                  <span>{{ $boddetials[0]->position }} </span>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="row">
        <div class="col-6 col-sm-6 col-md-3">
            <div class="team-info mt-3 text-center">
              <div class="team-img">
              @if ($boddetials->count() > 1 && $boddetials[1]->photo)
    <img src="{{ asset('storage/'.$boddetials[1]->photo) }}" alt="Image">
@else
    <img src="/storage/photoplaceholder.jpg" alt="Placeholder Image">
@endif
              </div>
              <div class="team-dsrp pt-3">
                <h5>{{ $boddetials[1]->name }}</h5>
                <span>{{ $boddetials[1]->position }}</span>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-3">
            <div class="team-info mt-3 text-center">
              <div class="team-img">
              @if ($boddetials->count() > 2 && $boddetials[2]->photo)
    <img src="{{ asset('storage/'.$boddetials[2]->photo) }}" alt="Image">
@else
    <img src="/storage/photoplaceholder.jpg" alt="Placeholder Image">
@endif
              </div>
              <div class="team-dsrp pt-3">
                <h5>{{ $boddetials[2]->name }}</h5>
                <span>{{ $boddetials[2]->position }}</span>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-3">
            <div class="team-info mt-3 text-center">
              <div class="team-img">
              @if ($boddetials->count() > 3 && $boddetials[3]->photo)
    <img src="{{ asset('storage/'.$boddetials[3]->photo) }}" alt="Image">
@else
    <img src="/storage/photoplaceholder.jpg" alt="Placeholder Image">
@endif
                    </div>
              <div class="team-dsrp pt-3">
                <h5>{{ $boddetials[3]->name }}</h5>
                <span>{{ $boddetials[3]->position }}</span>
              </div>
            </div>
          </div>

          @foreach($boddetials as $key => $boddetial)
          @if ($key > 3)
            
          <div class="col-6 col-sm-6 col-md-3">
            <div class="team-info mt-3 text-center">
              <div class="team-img">

              @if ($boddetial->photo)
                            <img src="{{asset('storage/'.$boddetial->photo)}}" alt="Image">
                        @else
                            <img src="/storage/photoplaceholder.jpg" alt="Placeholder Image">
                        @endif
                
              
            </div>
              <div class="team-dsrp pt-3">
                <h5>{{ $boddetial->name }}</h5>
                <span>{{ $boddetial->position }}</span>
              </div>
            </div>
          </div>
          @endif
          @endforeach


        </div>
      </div>

    </div>
  </section>
</main>