@extends('layouts.main_tubes')
@section('title', 'Dashboard')

@section('content')
  <section style="text-align:center;margin-bottom:40px;">
    <h1 style="font-size:36px;margin-bottom:10px;">Dapatkan kesenangan yang tak terlupakan bersama kami</h1>
    <p style="font-size:20px;">Jelajahi Keindahan Kabupaten Pandeglang</p>
  </section>

  <x-alert_tubes type="success" message="Data wisata berhasil dimuat!" />

  <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:25px;">
    @foreach($data as $item)
      <div style="background:rgba(255,255,255,0.08);padding:20px;border-radius:10px;border:1px solid #444;">
        <h3 style="color:#8cc7ff;">{{ $item['nama'] }}</h3>
        <p><b>Kategori:</b> {{ $item['kategori'] }}</p>
        <p><b>Lokasi:</b> {{ $item['lokasi'] }}</p>
        <p><b>Harga:</b> Rp {{ number_format($item['harga'],0,',','.') }} / Orang</p>
        <p><b>Rating:</b> {{ $item['rating'] }}</p>
      </div>
    @endforeach
  </div>
@endsection
