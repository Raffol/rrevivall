@include('header')
<style>
    h1{
        text-align: center;
    }
    .news-item{
        font-size: 20px;
        margin-left: 150px;
        margin-right: 150px;
    }
    h2{
        text-align: center;
    }
    .timepost{
        text-align: end;
    }

</style>

<div class="container">
    <h1>Новости</h1>

    @if($news->isEmpty())
        <p>Нет новостей для отображения.</p>
    @else
        @foreach($news as $newsItem)
            <div class="news-item">
                <h2><a href="{{ route('news.show', $newsItem->id) }}">{{ $newsItem->title }}</a></h2>
                <p>{{ Str::limit($newsItem->content, 200) }}</p>
                @if ($newsItem->media_path) {{--фото--}}
                    <img src="{{ Voyager::image($newsItem->media_path) }}" alt="Фото" style="width: 400px; height: 256px">
                @endif
               {{-- @if ($newsItem->media_path) --}}{{--видео--}}{{--
                    <video width="320" height="240" controls>
                        <source src="{{ Voyager::image($newsItem->media_path) }}" type="video/mp4">
                        Ваш браузер не поддерживает видео.
                    </video>
                @endif--}}
                <p><small>Опубликовано: {{ $newsItem->created_at }} автор: {{ $newsItem->author }}</small></p> <!-- Отображаем автора новости -->
                <hr>
            </div>
        @endforeach
    @endif
</div>
@include('footer')
{{--@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Новости</h1>

@if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
@endif

    <a href="{{ route('news.create') }}" class="btn btn-primary mb-3">Добавить новость</a>

@if ($news->isEmpty())
        <p>Нет новостей.</p>
@else
        <ul class="list-group">
@foreach ($news as $newsItem)
                <li class="list-group-item">
                    <h5>{{ $newsItem->title }}</h5>
                    <p>{{ Str::limit($newsItem->content, 100) }}</p>
                    <a href="{{ route('news.show', $newsItem->id) }}" class="btn btn-secondary">Подробнее</a>
                </li>
@endforeach
        </ul>
@endif
</div>
@endsection--}}
