@extends('Layouts.Layouts')

@section('content')
<!-- populer movies start -->
<div class="card mt-3 mt-md-4 mb-2">
  <div class="card-body">
    <div class="row mb-3">
      <div class="col-lg">
        <div class="row">
          <div class="col d-block d-md-none"><span class="fs-6">Populer Drakor</span></div>
          <div class="col d-none d-md-block"><span class="fs-5">Populer Drakor</span></div>
          <div class="col text-end">
            <a href="" class="text-decoration-none text-success">
              <small>Lihat semua</small>
            </a>
          </div>
        </div>
        <hr class="border border-success border-1 opacity-50 m-0 p-0">
      </div>
    </div>
    <div class="row gx-2">
      <div class="col-lg-2 col-4 mb-4">
        <form action="{{ route('film.index') }}" method="GET">
          {{-- @csrf
          @method('PUT') --}}
          <button type="submit" class="btn btn-link p-0 m-0 text-start text-decoration-none text-light">
            <div class="card text-bg-dark position-relative border-0 shadow-sm">

              <img src="{{asset('images/movies/bad_prosecutor.webp')}}" class="card-img" alt="...">
              <small class="bg-danger position-absolute top-0 start-0 px-2 rounded-1 m-1 opacity-75" style="font-size: 10px">Episode 1</small>

              <!-- handphone start -->
              <small class="d-block d-lg-none bg-danger position-absolute bottom-0 end-0 px-2 rounded-1 m-1 opacity-75" style="font-size: 10px">2022</small>
              <!-- handphone end -->

            </div>
            <div class="row">
              <div class="col-6">
                <small class="text-truncate text-dark">Bad Prosecutor</small>
              </div>
              <div class="col-6 text-end d-none d-lg-block">
                <a href="" class="text-muted fst-italic" style="font-size: 12px">2020</a>
              </div>
            </div>
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- populer movies end -->

<!-- film korea start -->
<div class="card mt-3 mt-md-4 mb-2">
  <div class="card-body">
    <div class="row mb-3">
      <div class="col-lg">
        <div class="row">
          <div class="col d-block d-md-none"><span class="fs-6">Film Korea</span></div>
          <div class="col d-none d-md-block"><span class="fs-5">Film Korea</span></div>
          <div class="col text-end">
            <a href="" class="text-decoration-none text-warning">
              <small>Lihat semua</small>
            </a>
          </div>
        </div>
        <hr class="border border-warning border-1 opacity-50 m-0 p-0">
      </div>
    </div>
    <div class="row gx-2">
      <div class="col-lg-2 col-4 mb-4">
        <form action="{{ route('film.index') }}" method="GET">
          {{-- @csrf
          @method('PUT') --}}
          <button type="submit" class="btn btn-link p-0 m-0 text-start text-decoration-none text-light">
            <div class="card text-bg-dark position-relative border-0 shadow-sm">

              <img src="{{asset('images/movies/bad_prosecutor.webp')}}" class="card-img" alt="...">
              <small class="bg-danger position-absolute top-0 start-0 px-2 rounded-1 m-1 opacity-75" style="font-size: 10px">Episode 1</small>

              <!-- handphone start -->
              <small class="d-block d-lg-none bg-danger position-absolute bottom-0 end-0 px-2 rounded-1 m-1 opacity-75" style="font-size: 10px">2022</small>
              <!-- handphone end -->

            </div>
            <div class="row">
              <div class="col-6">
                <small class="text-truncate text-dark">Bad Prosecutor</small>
              </div>
              <div class="col-6 text-end d-none d-lg-block">
                <a href="" class="text-muted fst-italic" style="font-size: 12px">2020</a>
              </div>
            </div>
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- film korea end -->

<!-- drama update terbaru start -->
<div class="card mt-3 mt-md-4 mb-2">
  <div class="card-body">
    <div class="row mb-3">
      <div class="col-lg">
        <div class="row">
          <div class="col d-block d-md-none"><span class="fs-6">Update Terbaru</span></div>
          <div class="col d-none d-md-block"><span class="fs-5">Update Terbaru</span></div>
          <div class="col text-end">
            <a href="" class="text-decoration-none text-danger">
              <small>Lihat semua</small>
            </a>
          </div>
        </div>
        <hr class="border border-danger border-1 opacity-50 m-0 p-0">
      </div>
    </div>
    <div class="row gx-2">
      <div class="col-lg-2 col-4 mb-4">
        <form action="{{ route('film.index') }}" method="GET">
          {{-- @csrf
          @method('PUT') --}}
          <button type="submit" class="btn btn-link p-0 m-0 text-start text-decoration-none text-light">
            <div class="card text-bg-dark position-relative border-0 shadow-sm">

              <img src="{{asset('images/movies/bad_prosecutor.webp')}}" class="card-img" alt="...">
              <small class="bg-danger position-absolute top-0 start-0 px-2 rounded-1 m-1 opacity-75" style="font-size: 10px">Episode 1</small>

              <!-- handphone start -->
              <small class="d-block d-lg-none bg-danger position-absolute bottom-0 end-0 px-2 rounded-1 m-1 opacity-75" style="font-size: 10px">2022</small>
              <!-- handphone end -->

            </div>
            <div class="row">
              <div class="col-6">
                <small class="text-truncate text-dark">Bad Prosecutor</small>
              </div>
              <div class="col-6 text-end d-none d-lg-block">
                <a href="" class="text-muted fst-italic" style="font-size: 12px">2020</a>
              </div>
            </div>
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- drama update terbaru end -->

@endsection
