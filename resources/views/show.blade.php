@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10 col-sm-12">
            <h1 class="text-center text-pink mb-4" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 2.5rem; color: #d291bc;">
                {{ $post['title'] }}
            </h1>
            <div class="mt-4 p-4 shadow-sm rounded" style="line-height: 1.75; color: #6d6875; font-family: 'Poppins', sans-serif; font-size: 1.125rem; background-color: #f7d6e0;">
                <p>{{ $post['body'] }}</p>
            </div>
            <div class="d-flex justify-content-center mt-5">
                <a href="{{ url('/') }}" class="btn btn-lg px-4 py-2" style="font-size: 1.125rem; border-radius: 30px; font-weight: 600; text-transform: uppercase; background-color: #f4a9c4; border-color: #d291bc; color: white;">
                    Volver
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
