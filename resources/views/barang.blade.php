@extends('layouts.main')

@section('container')
  <div class="mt-5">
    <nav class="navbar navbar-expand-lg navbar-light" style="background: #D3DEDC">
      <div class="container">
        <a class="navbar-brand" href="/home">
          <img src="img/LOGO.png" alt="" width="70" height="24" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" aria-current="page" href="/home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('gudang') ? 'active' : '' }}" href="/gudang">Gudang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('barang') ? 'active' : '' }}" href="/barang">Barang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('barang-masuk') ? 'active' : '' }}" href="/barang-masuk"" href="#">Barang Masuk</a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('barang-masuk') ? 'active' : '' }}" href="/barang-masuk">Barang Keluar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav> 
  </div>
  
  {{-- Header halaman --}}
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 mt-3 border-bottom">
    <h1 class="h2">Daftar {{ $title }}</h1>
  </div>

  <div class="mt-4">
    <a href="#" class="btn btn-info"><i class="bi bi-plus-circle-fill"></i> Tambahkan Nama Barang</a>
  </div>

  <div class="table-responsive-xl bg-light" style="margin-top: 2mm">
    <table class="table table-striped table-sm" style="text-align:center; vertical-align:middle">
      <thead>
        <tr>
          <th scope="col">Nama Gudang</th>
          <th scope="col">ID Barang</th>
          <th scope="col">Kriteria</th>
          <th scope="col">Deskripsi Barang</th>
          <th scope="col">Satuan</th>
          <th scope="col">Stock Awal</th>
          <th scope="col">Total Harga Awal</th>
          <th scope="col">Stock Akhir</th>
          <th scope="col">Total Harga Akhir</th>
          <th scope="col">Tanggal</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>AC-04EMB-080- </td>
          <td>FAN EBMPAPST - 080</td>
          <td>FAN EBMPAPST - 080</td>
          <td></td>
          <td>FAN EBMPAPST - 080</td>
          <td>FAN EBMPAPST - 080</td>
          <td>FAN EBMPAPST - 080</td>
          <td>FAN EBMPAPST - 080</td>
          <td>FAN EBMPAPST - 080</td>
          <td>FAN EBMPAPST - 080</td>
          <td>
            <a href="#" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
            <a href="#" class="btn btn-danger"><i class="bi bi-trash-fill"></i> Hapus</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection