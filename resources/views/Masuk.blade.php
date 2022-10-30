@extends('Layouts.Layouts')

@section('content')
<div class="vh-100">
  <div class="row mt-5 justify-content-center">
    <div class="col-md-6">
      <form action="{{ route('masuk') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" autofocus>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Masuk</button>
      </form>
    </div>
  </div>
</div>
@endsection
