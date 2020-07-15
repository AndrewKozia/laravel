@extends('layouts.layout', ['title' => '404 ошибка. Страница не найдена.'])

@section('content')
    <div class="card">
        <h1 class="card-header">404. Нечего тут смотреть....</h1>
        <img class="image-404" src="{{ asset('image/404.jpg') }}" alt="404 page">
    </div>

    <a href="/" class="btn btn-outline-primary">Разойтись....</a>


@endsection

