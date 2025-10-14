@props(['type' => 'success', 'message' => 'Data berhasil dimuat!'])

<div style="
  border:2px solid {{ $type === 'error' ? 'red' : '#8cc7ff' }};
  padding:10px;
  margin:20px auto;
  max-width:600px;
  text-align:center;
  border-radius:8px;">
  <strong>{{ ucfirst($type) }}:</strong> {{ $message }}
</div>
