<main>
<?php $ptitle='Downloads'; ?>
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
    <table class="table table-striped" style="border: 1px solid;">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Description</th>
      <th scope="col">Date</th>
      <th scope="col">Download</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($downloaddetials as $downloaddetial )
      
    <tr>
      <th scope="row">{{$downloaddetial['id']}}</th>
      <td>{{$downloaddetial['description']}}</td>
      <td>{{$downloaddetial['updated_at']}}</td>
      <td><a href="{{asset('storage/'.$downloaddetial['uploadedfile'])}}">Download</td>
    </tr>
    @endforeach

  </tbody>
</table>
</div>
</section>
</main>
