@extends('layouts.main_tubes')
@section('title', 'Tur')

@section('content')
  <h1 style="text-align:center;margin-bottom:30px;color:#8cc7ff;">Kategori Tur - Paket Tur Wisata Pandeglang</h1>
  <ul style="list-style:none;padding:0;display:flex;flex-wrap:wrap;gap:20px;justify-content:center;">
    @foreach(['Paket A','Paket B','Paket C','Paket D','Paket E'] as $paket)
      <li style="background:rgba(255,255,255,0.08);padding:20px 40px;border-radius:10px;text-align:center;">
        <h3>{{ $paket }}</h3>
        <a href="#" style="color:#8cc7ff;text-decoration:none;">See More</a>
      </li>
    @endforeach
  </ul>
@endsection
