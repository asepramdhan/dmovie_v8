@extends('Layouts.Layouts')

@section('content')
<!-- grid 1 start -->
<div class="row gx-2 mt-3 mt-md-4">

  <!-- handphone start -->
  <div class="col-md mb-2 d-block d-md-none">
    <div class="card">
      <div class="card-body" style="height: 150px">
        This is some text within a card body.
      </div>
    </div>
  </div>
  <!-- handphone end -->

  <div class="col-md-8">
    <div class="card mb-2">
      <div class="row g-0">

        <!-- handphone start -->
        <div class="col-md-4 d-md-none d-block overflow-hidden" style="height: 300px">
          <img src="{{asset('images/movies/bad_prosecutor.webp')}}" class="img-fluid w-100 rounded" alt="...">
        </div>
        <!-- handphone end -->

        <div class="col-md-2 d-none d-md-block">
          <img src="{{asset('images/movies/bad_prosecutor.webp')}}" class="img-fluid rounded-start" alt="...">
        </div>

        <div class="col-md">
          <div class="card-body" style="height: 185px">
            <div class="d-flex align-items-center">
              <h5 class="card-title me-1">Bad Prosecutor</h5>
              <small class="fst-italic">(Episode 1)</small>
            </div>
            <div class="bg-secondary p-1 overflow-auto opacity-50 rounded" style="height: 125px">
              <p class="card-text text-light">Serial drama korea "The Golden Spoon (2022)" ini menceitakan Lee Seung-Cheon (Yook Sung-Jae)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md d-none d-md-block">
    <div class="card">
      <div class="card-body" style="height: 185px">
        This is some text within a card body.
      </div>
    </div>
  </div>

</div>
<!-- grid 1 end -->

<!-- grid 2 start -->
<div class="row mb-2">
  <div class="col-md">
    <div class="card overflow-auto">
      <div class="card-body">
        <ul class="pagination pagination-sm m-0 p-0">
          <li class="page-item active"><span class="page-link text-truncate">EPS 1</li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <div class="pe-3"></div>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- grid 2 end -->

<!-- grid 3 start -->
<div class="row gx-2 mb-2">
  <div class="col-md-8 mb-2">

    <div id="cardFilm" class="card overflow-auto" style="height: 480px;">
      <div class="card-body">

        <!-- video start -->
        <div id="playerFilm" class="ratio pb-2" style="height: 415px;">
          <video id="player" playsinline controls>
            <source src="https://drive.d-moviesite.workers.dev/0:/Good%20Job/Good.Job%20E01%20-%20d-movie.site.mp4" type='video/mp4'>
          </video>
        </div>
        <!-- video end -->

        <!-- download start -->
        <div class="d-flex align-items-md-center justify-content-between">
          <div>10rb x ditonton . <small class="text-muted">3h</small></div>
          <button class="btn btn-sm btn-primary">
            10rb x didownload
            <i class="bi bi-download"></i>
          </button>
        </div>
        <!-- download end -->

      </div>
    </div>

  </div>

  <!-- populer drakor start -->
  <div class="col-md">
    <div class="card">
      
      <h6 class="px-3 pt-3">Populer Drakor</h6>

      <div id="populerDrakor" class="card-body overflow-auto" style="height: 435px">
        <!-- pengulangan start -->
        <button class=" text-decoration-none text-dark border-0 m-0 p-0 text-start">
          <div class="card mb-1">
            <div class="row g-0">

              <div class="col-2">
                <img src="{{asset('images/movies/bad_prosecutor.webp')}}" class="img-fluid rounded-start w-100" alt="...">
              </div>

              <div class="col-10">
                <div class="card-body">
                  {{-- <h6 class="card-title">Card title</h6>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                </div>
              </div>
            </div>
          </div>
        </button>
        <!-- pengulangan end -->

      </div>
    </div>
  </div>
  <!-- populer drakor end -->

</div>
<!-- grid 3 end -->

<!-- grid 4 start -->
<div class="row">
  <div class="col">

    <div class="card">
      <div class="card-body">
        <h6>Mungkin Kamu Suka</h6>
        <hr class="border border-success border-1 opacity-50">

        <div class="row gx-2">

          <!-- pengulangan film start -->
          <div class="col-lg-3 col-6 mb-2">
            <form action="{{ route('film.index') }}" method="GET">
              {{-- @csrf
              @method('PUT') --}}
              <button type="submit" class="btn btn-link p-0 m-0 text-start text-decoration-none text-light">
                <div class="card text-bg-dark position-relative border-0 shadow-sm">

                  <img src="{{ asset('images/episodes/good_job_1.jpg') }}" class="rounded img-fluid" alt="...">
                  <small class="bg-danger position-absolute top-0 start-0 px-2 rounded-1 m-1 opacity-75" style="font-size: 10px">Episode 1</small>

                  <!-- handphone start -->
                  <small class="d-block d-lg-none bg-danger position-absolute bottom-0 end-0 px-2 rounded-1 m-1 opacity-75" style="font-size: 10px">HD</small>
                  <!-- handphone end -->

                </div>
                <div class="row">
                  <div class="col-6">
                    <small class="text-truncate text-dark">Bad Prosecutor</small>
                  </div>
                  <div class="col-6 text-end d-none d-lg-block">
                    <a href="" class="text-muted fst-italic" style="font-size: 12px">HD</a>
                  </div>
                </div>
              </button>
            </form>

          </div>
          <!-- pengulangan film end -->

        </div>
      </div>

    </div>
  </div>
</div>
<!-- grid 4 end -->

@endsection
