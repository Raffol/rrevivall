@include('header')
<div class="container">
    <h1>Редактировать профиль</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}" required>
        </div>

        <div class="form-group">
            <label for="avatar">Аватар:</label>
            @if($user->avatar)
                <div>
                    <img src="{{'/img/' . $user->avatar}}" alt="Ваш аватар" style="width: 150px; height: 150px; border-radius: 20%;">
                    {{--<img src="{{ '/img/'.asset($user->avatar) }}" alt="Аватар" style="width: 100px; height: 100px; object-fit: cover;">--}}
                </div>
            @endif
            <input type="file" name="avatar" id="avatar" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Сохранить изменения</button>
    </form>
</div>
@include('footer')
