   @extends('layouts.layout')
   @section('content')
    @if(isset($_GET['search']))
        @if(count($posts)>0)
            Найдено {{count($posts)}} постов
        @else
            <h2>Ничего не найдено по запросу <?=$_GET['search']?></h2>
            <a class="btn btn-outline-info" href="/">Ко всем записям</a>
        @endif
    @endif


    <div class="row">
        @foreach($posts as $post)
        <div class="col-6">
            <div class="card">
                <div class="card-header">{{$post->short_title}}</div>
                <div class="card-body">
                    <div class="card-img" style="background-image: url({{ $post->img ?? asset('img/nope.jpg') }})"></div>
                </div>
                <div class="card-footer">Автор: {{$post->name}}</div>
                <a href="/show/{{$post->post_id}}" class="btn btn-outline-primary post-link">Посмотреть пост</a>
            </div>
        </div>
        @endforeach
    </div>

@if(!isset($_GET['search']))
{{ $posts->links() }}
@endif

@endsection
