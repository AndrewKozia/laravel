@extends('layouts.layout', ['title' => "Пост №$post->post_id. $post->title"])

@section('content')
    <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header"><h2>{{ $post->title }}</h2></div>
                    <div class="card-body">
                        <div class="card-img card-img__max" style="background-image: url({{ $post->img ??  asset('image/default_image.jpg')}})"></div>
                        <div class="card-body card-descr">{{ $post->description }}</div>
                        <div class="card-author"><h5>Автор: {{ $post->name }}</h5></div>
                        <div class="card-date"><h6>Пост создан: {{ $post->created_at->diffForHumans() }}</h6></div>
                        <div class="card-btn">
                            <a href="{{ route('post.index') }}" class="btn btn-outline-primary">На главную</a>
                            @auth
                                @if(Auth::user()->id == $post->author_id)
                            <a href="{{ route('post.edit', ['id'=>$post->post_id]) }}" class="btn btn-outline-success">Редактировать</a>
                            <form action="{{ route('post.destroy', ['id'=>$post->post_id]) }}" method="post" onsubmit="if (confirm('Точно удалить пост?')) {return true} else {return false}">
                            @csrf
                            @method('DELETE')
                                <input type="submit" class="btn btn-outline-danger" value="Удалить" >
                                {{--TODO: to find out why JS doesnt work at all.... Need a validation/confirmation action above to work.--}}
                                @endif
                            @endauth
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>

@endsection
