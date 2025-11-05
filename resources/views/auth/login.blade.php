<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<div class="card-header">Login</div>
<div class="card-body">
{{-- Formulir login. Data dikirim ke route login menggunakan POST --}}
<form method="POST" action="{{ route('login') }}">
@csrf {{-- Token keamanan agar form hanya bisa dikirim dari aplikasi ini --}}
<div class="mb-3">
<label for="email" class="form-label">Email Address</label>
<input id="email" type="email"
class="form-control @error('email') is-invalid @enderror"
name="email" value="{{ old('email') }}"
required autocomplete="email" autofocus>
{{-- Tampilkan pesan kesalahan jika input email bermasalah --}}
@error('email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong> {{-- Menampilkan pesan validasi --}}
</span>
@enderror
</div>
{{-- Input untuk password --}}
<div class="mb-3">
<label for="password" class="form-label">Password</label>
<input id="password" type="password"
class="form-control @error('password') is-invalid @enderror"
name="password" required autocomplete="current-password">
@error('password')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong> {{-- Menampilkan pesan validasi --}}
</span>
@endTampilan
</div>
{{-- Checkbox untuk "Ingat Saya" --}}
<div class="mb-3 form-check">
<input class="form-check-input" type="checkbox" name="remember" id="remember"
{{ old('remember') ? 'checked' : '' }}>
<label class="form-check-label" for="remember">
Remember Me
</label>
</div>
<div class="d-grid">
<button type="submit" class="btn btn-primary">Login</button>
</div>
</form>
</div>
</div>
</div>
</div>
@endsection