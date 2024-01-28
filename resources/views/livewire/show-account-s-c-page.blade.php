<main>
  <?php $ptitle = 'Account Supervision Committee'; ?>
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

          <div class="col-12 col-sm-12 col-md-4">
            <div class="text-center director-team">
              <div class="mb-3">
                <div class="team-img">

                  @if ($bodaccounts->count() > 0 && $bodaccounts[0]->photo)
                  <img src="{{ asset('storage/'.$bodaccounts[0]->photo) }}" alt="Image">
                  @else
                  <img src="/storage/photoplaceholder.jpg" alt="Placeholder Image">
                  @endif"

                </div>
                <div class="team-dsrp pt-3">
                  <h5>{{$bodaccounts[0]->name}}</h5>
                  <span>{{$bodaccounts[0]->position}}</span>
                </div>
              </div>
            </div>
          </div>

          @foreach($bodaccounts as $key => $bodaccount)
          @if ($key > 0)
          <div class="col-12 col-sm-12 col-md-4">
            <div class="text-center director-team">
              <div class="mb-3">
                <div class="team-img">

                  @if ($bodaccounts->count() > 0 && $bodaccounts[0]->photo)
                  <img src="{{ asset('storage/'.$bodaccounts[0]->photo) }}" alt="Image">
                  @else
                  <img src="/storage/photoplaceholder.jpg" alt="Placeholder Image">
                  @endif"
                </div>
                <div class="team-dsrp pt-3">
                  <h5>{{$bodaccount->name}}</h5>
                  <span>{{ $bodaccount->position }}</span>
                </div>
              </div>
            </div>
          </div>
          @endif
          @endforeach

        </div>
        <div class="row">
        </div>
      </div>
    </div>
  </section>
</main>