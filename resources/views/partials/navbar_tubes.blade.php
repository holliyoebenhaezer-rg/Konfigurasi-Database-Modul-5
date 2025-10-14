<nav style="background:rgba(0,0,0,0.8);display:flex;justify-content:space-between;align-items:center;padding:14px 20px;">
  <div style="display:flex;align-items:center;gap:10px;">
    <img src="{{ asset('gambar/logo.png') }}" alt="Logo" style="height:35px;">
    <h2 style="color:#8cc7ff;">PandeglangTrip</h2>
  </div>
  <ul style="list-style:none;display:flex;gap:25px;margin:0;padding:0;">
    <li><a href="{{ route('tubes.dashboard') }}" style="text-decoration:none;color:#8cc7ff;">Home</a></li>
    <li><a href="{{ route('tubes.tur') }}" style="text-decoration:none;color:#fff;">Tur</a></li>
    <li><a href="{{ route('tubes.wisata') }}" style="text-decoration:none;color:#fff;">Wisata</a></li>
    <li><a href="{{ route('tubes.faq') }}" style="text-decoration:none;color:#fff;">FAQ</a></li>
  </ul>
</nav>
