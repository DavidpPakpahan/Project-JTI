@extends('layouts.main')

@section('container')
<div class="row justify-content-center" style="margin-top: 2cm">
  <div class="text-center text-light mt-5">
    <small>
      <p>Selamat Datang di Sistem Informasi Distribusi Barang</p>
      <p>Masuk dan Keluar PT Jaya Teknik Indonesia</p>
    </small>
  </div>
  <div class="col-md-4">
      <main class="form-signin">
        <div class="text-center text-light">
          <small>
            <p>Please Login</p>
          </small>
        </div>
        <form>
          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Username/ID</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
    
          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>
      </main> 
    </div>
  </div>
@endsection
