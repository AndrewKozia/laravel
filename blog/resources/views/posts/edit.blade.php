@extends('layouts.layout', ['title' => "Редактиров пост №$post->post_id. $post->title"])

@section('content')

        <form action="{{ route('post.update', ['id'=>$post->post_id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <h3>Редактировать пост</h3>
            @include('posts.parts.form')

            <input type="submit" value="Редактировать пост" class="btn btn-outline-success">
        </form>

@endsection
