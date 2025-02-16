@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <div class="text-center">
        <h1 class="mb-4" style="font-weight: 700; color: #d63384; font-family: 'Poppins', sans-serif;">
            Blog de {{ $user->name }} 🌸
        </h1>
        <div class="mt-4">
            <a href="{{ route('createPost') }}" class="btn btn-primary" style="
                background-color: #d63384;
                border: none;
                padding: 14px 28px;
                font-size: 16px;
                font-weight: 700;
                border-radius: 15px;
                transition: all 0.3s;
                margin-right: 15px;" onmouseover="this.style.backgroundColor='#c13573'" onmouseout="this.style.backgroundColor='#d63384'">
                Crear un post
            </a>
        </div>
    </div>
</div>
@endsection
