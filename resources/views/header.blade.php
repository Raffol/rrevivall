<style>
    header{

    }
    nav{
        padding: 40px;
        /*margin-left: 10px;*/
        border: 30px;
        border-radius: 30px;
        background-color: green;
        color: white;

    }
    .news, .organizers, .about, .events, .projects, .ourgames{
        padding: 10px;
        margin: 10px;
        background-color: #aba244;
        border-radius: 10px 30px;
        box-shadow: 0 0 0 rgba(0, 0, 0, 0);
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }
    .news:hover, .organizers:hover, .about:hover, .events:hover, .projects:hover, .ourgames:hover, .registration:hover{
        background-color: #e59213;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
    .registration{
        padding: 14px;
        margin: 33px -1px;
        background-color: #aba244;
        border-radius: 10px 30px;
        box-shadow: 0 0 0 rgba(0, 0, 0, 0);
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }
    .entrance{
        padding: 10px;
        margin: 10px;
        background-color: #aba244;
        border-radius: 10px 30px;
        box-shadow: 0 0 0 rgba(0, 0, 0, 0);
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }
</style>

    <nav>

    <ul style="
        display: flex;
        gap: 9px;
        list-style-type: none;
        ">
        <li><a href="{{url('/homee')}}" class="projects" src="">Главная</a></li>
        <li><a href="{{url('/news')}}" class="news" src="">Новости</a></li>
        <li><a href="{{url('/organizers')}}" class="organizers" src="">Организаторы</a></li>
        <li><a href="{{url('/about')}}" class="about" src="">О нас</a></li>

        <li>
          <a href="{{url('home')}}">
            <img src="{{asset('img/Возрождение.png')}}" alt="<<ИРОО Возрождение>>" style="width: 300px; height: 100px;">
       </a>
        </li>
        <li><a href="{{url('/events')}}" class="events" src="">Мероприятия</a></li>
        <li><a href="{{url('/ourgames')}}" class="ourgames" src="">Список Игр</a></li>
        {{--<li><a href="{{url('/auth')}}" class="registration" src="">Авторизация</a></li>--}}
        <li class="">
            @if (Auth::check())
                <!-- Если пользователь авторизован, показываем кнопку личного кабинета -->
                <a class="about" href="{{ route('lk') }}">Личный кабинет</a>

                <!-- Кнопка выхода -->
              {{--  <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <br>
                    --}}{{--<button type="submit">Выйти</button>--}}{{--
                </form>--}}
            @else
                <!-- Если пользователь не авторизован, показываем кнопку авторизации -->
                <a class="about" href="{{ route('login') }}">Авторизация</a>
            @endif
        </li>
{{--        <li><a href="{{url('/entrance')}}" class="entrance" src="">Вход</a></li>--}}
        </ul>
    </nav>

