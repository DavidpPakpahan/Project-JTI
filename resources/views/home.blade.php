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
              <a class="nav-link {{ Request::is('barang-masuk') ? 'active' : '' }}" href="/barang-masuk"" >Barang Masuk</a>
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
    <h1 class="h2">{{ $title }}</h1>
  </div>

  {{-- Grafik Barang Keluar --}}
  <h2>Grafik Laporan Gedung</h2>
  
  

  {{-- Table laporan --}}
  <h2>Tabel Laporan Gedung</h2>
  <div class="table-responsive-xl bg-light" style="margin-top: 2cm">
    <table class="table table-striped table-sm">
      <thead style="text-align:center; vertical-align:middle">
        <tr>
          <th scope="col">Material</th>
          <th scope="col">Description</th>
          <th scope="col">Harga Akhir</th>
          <th scope="col">Satuan</th>
          <th scope="col">Stok Awal</th>
          <th scope="col">Total Harga Awal</th>
          <th scope="col">Stok Masuk</th>
          <th scope="col">Total Harga Masuk</th>
          <th scope="col">Stok Keluar</th>
          <th scope="col">Total Harga Keluar</th>
          <th scope="col">Stok Akhir</th>
          <th scope="col">Total Harga Akhir</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><u class="text-primary"><b>AC</b></u></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>AC-04EMB-080- </td>
          <td>FAN EBMPAPST - 080</td>
          <td></td>
          <td>UNIT</td>
          <td>1,00</td>
          <td></td>
          <td>0,00</td>
          <td>0,00</td>
          <td>1,00</td>
          <td>0,00</td>
          <td>0,00</td>
          <td></td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection