@extends('layouts.main_tubes')
@section('title', 'Wisata')

@section('content')
  <h1 style="text-align:center;margin-bottom:40px;color:#8cc7ff;">Wisata Populer di Pandeglang</h1>
  <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:25px;">
    <div style="background:rgba(255,255,255,0.08);padding:20px;border-radius:10px;">
      <h3 style="color:#8cc7ff;">Pulau Umang</h3>
      <p>Pantai indah dengan pasir putih dan laut jernih...</p>
      <p><b>Harga:</b> Rp. 250.000 / Orang</p>
      <p><b>Rating:</b> 5.0</p>
    </div>
    <div style="background:rgba(255,255,255,0.08);padding:20px;border-radius:10px;">
      <h3 style="color:#8cc7ff;">Taman Nasional Ujung Kulon</h3>
      <p>Warisan dunia dengan tiga ekosistem utama...</p>
      <p><b>Harga:</b> Rp. 150.000 / Orang</p>
      <p><b>Rating:</b> 4.5</p>
    </div>
    <div style="background:rgba(255,255,255,0.08);padding:20px;border-radius:10px;">
      <h3 style="color:#8cc7ff;">Pulau Burung</h3>
      <p>Keindahan laut alami yang memesona...</p>
      <p><b>Harga:</b> Rp. 135.000 / Orang</p>
      <p><b>Rating:</b> 4.5</p>
    </div>
  </div>
@endsection
