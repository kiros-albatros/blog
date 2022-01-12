@extends('layouts.layout')
@section('content')

    <form action="/update/{{$post->post_id}}" method="post" enctype="multipart/form-data">
        @csrf
        <h3>Редактировать пост</h3>
        <div class="form-group">
            <input type="text" class="form-control" name="title" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="descr" rows="3">{{$post->descr}}"</textarea>
        </div>
        <div class="form-group">
            <input type="file" name="img" id="">
        </div>
        <input type="submit" name="" id="" value="Редактировать пост" class="btn-outline-success">
    </form>

@endsection
