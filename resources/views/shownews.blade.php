@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $newsItem->title }}</h1>
        <p><strong>Автор:</strong> {{ $newsItem->author }}</p>
        <p>{{ $newsItem->content }}</p>

        <a href="{{ route('news.index') }}" class="btn btn-primary">Назад к новостям</a>
    </div>
@endsection
