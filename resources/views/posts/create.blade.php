@extends('layouts.layout')
@section('content')

    <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h3>Создать пост</h3>
        <div class="form-group">
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="descr" rows="3"></textarea>
        </div>
        <div class="form-group">
            <input type="file" name="img" id="">
        </div>
        <input type="submit" name="" id="" value="Создать пост" class="btn-outline-success">
    </form>

@endsection
