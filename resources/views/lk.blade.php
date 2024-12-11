<style>
    img {
        height: 250px;
    }

    h1 {
        text-align: center;
    }
</style>

@include('header')

@php
$user = auth()->user();
@endphp

{{-- <h1>Добро пожаловать, {{ $user->name }}!</h1>--}}
<h1>Добро пожаловать, {{ auth()->user()->name ?? 'Гость' }}!</h1>
<div style="display: flex; gap: 15px">
    @if {{--($user->avatar)--}}(auth()->user() && auth()->user()->avatar)
    <img src="{{'/img/avatars' . $user->avatar}}{{--{{ asset('storage/' . auth()->user()->avatar) }}--}}" alt="Ваш аватар" style="width: 150px; height: 150px; border-radius: 20%;">
    @else
    <p>Аватарка не загружена</p>
    @endif
    <div>
        <p><span style="font-weight: bold">Имя:</span> {{ auth()->user()->name ?? 'Гость' }}</p>
        <p><span style="font-weight: bold">Описание:</span> Это ваш личный кабинет. Здесь вы можете управлять своим профилем и просматривать свою информацию.</p>
    </div>
</div>
<br>
<form method="POST" action="{{ route('logout') }}">
    @csrf

    <button style="width: 150px; height: 50px;" class="logoutt" type="submit">Logout</button>
</form>
<br>
<div style="gap: 25px">
    <button style="width: 150px; height: 50px;" class="editprofile" type="submit">
        <a href="{{url('/editprofile')}}">Изменить профиль</a>
    </button>
    {{--<button style="width: 150px; height: 50px;" class="createnewss" type="submit">
        <a href="{{url('createnews')}}">Добавить новость</a>
    </button>--}}
</div>

@include('footer')
