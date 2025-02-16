@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <div class="text-center">
        <h1 class="mb-4" style="font-weight: 700; color: #d63384; font-family: 'Poppins', sans-serif;">
            Crear
        </h1>
        @if(session('error'))
            <div class="alert alert-danger" style="border-radius: 15px; background-color: #FF4C4C; color: white; padding: 14px; font-weight: 700;">
                {{ session('error') }}
            </div>
        @endif
        @if(session('success'))
            <div class="alert alert-success" style="border-radius: 15px; background-color: #4CAF50; color: white; padding: 14px; font-weight: 700;">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('storePost') }}" method="POST" style="max-width: 600px; margin: auto; background: #f8e1e7; border-radius: 25px; padding: 30px 40px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
            @csrf
            <div class="form-group">
                <label for="title" class="font-weight-bold" style="font-size: 18px; color: #333;">Título</label>
                <input type="text" class="form-control" id="title" name="title" required style="border-radius: 15px; padding: 14px; background-color: #fff0f3; border: 1px solid #d63384; font-size: 16px;">
            </div>

            <div class="form-group mt-4">
                <label for="body" class="font-weight-bold" style="font-size: 18px; color: #333;">Contenido</label>
                <textarea class="form-control" id="body" name="body" required rows="6" style="border-radius: 15px; padding: 14px; background-color: #fff0f3; border: 1px solid #d63384; font-size: 16px;"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary btn-block mt-4" style="border-radius: 15px; padding: 14px; font-size: 16px; font-weight: 700; background-color: #d63384; border: none;">
                Crear Post
            </button>
        </form>
    </div>
</div>
@endsection
