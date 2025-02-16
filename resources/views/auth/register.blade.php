@extends('layouts.layout')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
  <div class="card shadow-lg p-5" style="max-width: 420px; width: 100%; border-radius: 25px; border: none; background-color: #f8e1e7;">
    <h2 class="text-center mb-4" style="font-weight: 700; color: #d63384; font-family: 'Poppins', sans-serif;">Crear Cuenta</h2>

    @if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <form action="{{ url('/register') }}" method="POST">
      @csrf
      <div class="form-group">
        <label for="name" class="font-weight-bold text-dark">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" required autofocus placeholder="Nombre"
               style="border-radius: 15px; padding: 14px; background-color: #fff0f3; border: 1px solid #d63384;">
      </div>

      <div class="form-group">
        <label for="email" class="font-weight-bold text-dark">Email</label>
        <input type="email" class="form-control" id="email" name="email" required placeholder="Email"
               style="border-radius: 15px; padding: 14px; background-color: #fff0f3; border: 1px solid #d63384;">
      </div>

      <div class="form-group">
        <label for="password" class="font-weight-bold text-dark">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" required placeholder="Contraseña"
               style="border-radius: 15px; padding: 14px; background-color: #fff0f3; border: 1px solid #d63384;">
      </div>

      <div class="form-group">
        <label for="password_confirmation" class="font-weight-bold text-dark">Confirmar contraseña</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required placeholder="Repite tu contraseña"
               style="border-radius: 15px; padding: 14px; background-color: #fff0f3; border: 1px solid #d63384;">
      </div>

      <button type="submit" class="btn btn-primary btn-block mt-4"
              style="border-radius: 15px; padding: 14px; font-size: 16px; font-weight: 700; background-color: #d63384; border: none;">
        Registrarse
      </button>

      <p class="text-center mt-4">
        <a href="{{ route('login') }}" class="text-dark font-weight-bold">Inicia sesión</a>
      </p>
    </form>
  </div>
</div>
@endsection
