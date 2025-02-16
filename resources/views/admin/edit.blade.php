@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4" style="font-weight: 700; color: #d63384; font-family: 'Poppins', sans-serif;">Editar Post</h1>

    <form action="{{ route('admin.update', $post['id']) }}" method="POST" style="max-width: 600px; margin: auto; background: #f8e1e7; border-radius: 25px; padding: 30px 40px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="font-weight-bold" style="font-size: 18px; color: #333;">Título</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post['title'] }}" required 
                   style="border-radius: 15px; padding: 14px; background-color: #fff0f3; border: 1px solid #d63384; font-size: 16px;">
        </div>
        <div class="mb-4">
            <label for="slug" class="font-weight-bold" style="font-size: 18px; color: #333;">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ $post['slug'] }}" required 
                   style="border-radius: 15px; padding: 14px; background-color: #fff0f3; border: 1px solid #d63384; font-size: 16px;">
        </div>
        <div class="mb-4">
            <label for="body" class="font-weight-bold" style="font-size: 18px; color: #333;">Cuerpo</label>
            <textarea class="form-control" id="body" name="body" rows="6" required 
                      style="border-radius: 15px; padding: 14px; background-color: #fff0f3; border: 1px solid #d63384; font-size: 16px;">
                {{ $post['body'] }}
            </textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg" style="border-radius: 15px; padding: 14px 28px; font-size: 16px; font-weight: 700; background-color: #d63384; border: none;">
                Actualizar
            </button>
        </div>
    </form>
</div>
@endsection
