@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <div class="container">
        <h1>Posts</h1>
        <hr>
    </div>


    @foreach($posts as $post)
        <main class="container mt-4">
            <div class="bg-light p-5 rounded">
                <h1>{{$post->title}}</h1>
                <p class="lead">{{$post->description}}</p>
                <a class="btn btn-lg btn-primary" href="https://bootstrap5.ru/docs/components/navbar" role="button">Подробнее</a>
            </div>
        </main>
    @endforeach
@endsection
