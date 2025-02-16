@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <h1 class="text-center text-pink mb-4">
        🌸 Publicaciones 🌸
    </h1>
    @if(count($posts) > 0)
    <div id="posts-container">
        @foreach($posts as $post)
        <div class="post card mb-4 shadow-sm rounded border-0" style="background-color: #ffebf0;">
            <div class="card-body">
                <h2 class="card-title text-dark">{{ $post['title'] }}</h2>
                <p class="card-text text-dark">{{ \Illuminate\Support\Str::limit($post['body'], 150) }}</p>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <a href="{{ url('post/'.$post['id']) }}" class="btn btn-custom">Leer más</a>
                    @if(Cookie::get('user_session'))
                    <div>
                        <a href="{{ url('post/'.$post['id'].'/edit') }}" class="btn btn-outline-secondary">✏️ Editar</a>
                        <form action="{{ url('post/'.$post['id']) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('¿Eliminar este post?')">🗑️</button>
                        </form>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center mt-4">
        <nav>
            <ul class="pagination pagination-lg" style="background-color: #ffe4e1; border-radius: 10px; padding: 10px;">
                @if ($current_page > 1)
                <li class="page-item"><a class="page-link text-dark" style="border-radius: 50px; background-color: #ffb6c1;" href="{{ url()->current() . '?page=' . ($current_page - 1) }}">Anterior</a></li>
                @endif
                @for ($i = 1; $i <= $last_page; $i++)
                <li class="page-item {{ $i == $current_page ? 'active' : '' }}">
                    <a class="page-link text-dark" style="border-radius: 50px; background-color: {{ $i == $current_page ? '#ff69b4' : '#ffb6c1' }};" href="{{ url()->current() . '?page=' . $i }}">{{ $i }}</a>
                </li>
                @endfor
                @if ($current_page < $last_page)
                <li class="page-item"><a class="page-link text-dark" style="border-radius: 50px; background-color: #ffb6c1;" href="{{ url()->current() . '?page=' . ($current_page + 1) }}">Siguiente</a></li>
                @endif
            </ul>
        </nav>
    </div>
    @else
    <p class="text-center text-muted">No se encontraron publicaciones.</p>
    @endif
</div>
@endsection
