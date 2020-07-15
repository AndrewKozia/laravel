@extends('layouts.layout', ['title' => 'Главная страница'])

@section('content')

    @if(isset($_GET['search']))
        @if(count($posts)>0)
            <h2>По запросу "<?= htmlspecialchars( $_GET['search'])?>":</h2>
            <p class="lead">Найдено {{ count($posts) }} постов.</p>
            {{--TODO: add a logic to process words endings.--}}
        @else
            <h2>По запросу "<?=htmlspecialchars( $_GET['search'])?>" ничего не найдено.</h2>
            <a href="{{ route('post.index') }}" class="btn btn-outline-primary">Посмотреть все посты.</a>
        @endif
    @endif

    <div class="row">
        @foreach($posts as $post)
            <div class="col-6">
                <div class="card">
                    <div class="card-header"><h2>{{ $post->short_title }}</h2></div>
                    <div class="card-body">{{ $post->description }}</div>
                    <div class="card-body">
                        <div class="card-img" style="background-image: url({{ $post->img ??  asset('image/default_image.jpg')}})"></div>
                        <div class="card-author"><h5>Автор: {{ $post->name }}</h5></div>
                        <a href="{{ route('post.show', ['id'=> $post->post_id]) }}" class="btn btn-outline-primary">Посмотреть</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @if(!isset($_GET['search']))
        {{ $posts->links() }}
    @endif

@endsection
