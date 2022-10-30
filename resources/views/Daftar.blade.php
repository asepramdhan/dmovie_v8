@extends('Layouts.Layouts')

@section('content')
<div class="row mt-5 justify-content-center">
  <div class="col-md-6">
    <form action="/daftar" method="POST">
      @csrf
      <div class="mb-3">
        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <button type="submit" class="btn btn-primary">Daftar</button>
    </form>
  </div>
</div>
@endsection
