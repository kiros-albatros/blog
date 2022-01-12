@extends('layouts.layout')
@section('content')

    <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">{{$post->title}}</div>
                    <div class="card-body">
                        <div class="col-8 card-img__max" style="background-image: url({{ $post->img ?? asset('img/nope.jpg') }})"></div>
                    </div>
                    <div class="card-footer">Автор: {{$post->name}}</div>
                    <div class="card-date">Пост создан: {{$post->created_at->diffForHumans()}}</div>

                   <div class="card-btn">
                       <a href="/" class="btn btn-outline-primary post-link">Ко всем постам</a>
                       <a href="/edit/{{$post->post_id}}" class="btn btn-outline-success post-link">Редактировать</a>
                       <a href="/delete/{{$post->post_id}}"
                          onclick="if(confirm('Точно удалить?')) {
                           return true;
                       } else {
                           return false;
                       }"
                          class="btn btn-outline-danger post-link">Удалить</a>
                    </div>

                </div>
            </div>
    </div>

@endsection
