@include('header')
<style>
    div {
        padding: 50px;§
    }

    h1 {
        text-align: center;
    }
</style>
<div class="container">
    <h1>{{ $newsItem->title }}</h1>
    <p>{{ $newsItem->content }}</p>
    {{-- Отображение изображений --}}
    @if ($newsItem->media_file)
        @foreach (json_decode($newsItem->media_file, true) as $file)
            <img src="{{ Voyager::image($file) }}" alt="Фото" style="width: 1000px; margin: 10px;">
        @endforeach
    @endif

    {{--Отображение видео (если отдельное поле)--}}
    @if ($newsItem->video_path)
        <video width="320" height="240" controls>
            <source src="{{ Voyager::image($newsItem->video_path) }}" type="video/mp4">
            Ваш браузер не поддерживает видео.
        </video>
    @endif

    <p><small>Автор: {{ $newsItem->author }}</small></p>
    <p><small>Опубликовано: {{ $newsItem->created_at }}</small></p>
</div>
@include('footer')
