<style>
    section{
        margin: 100px 350px;
    }
    h2{
        font-size: 60px;
        text-align: center;
    }
    .members{
        text-align: center;
        font-size: 45px;
    }
  form{
      margin-left: 280px;
  }
    input::placeholder{
        font-size: 20px;

    }
    button{

        font-size: x-large;
        background-color: green;
        color: white;
        border-radius: 5px;
        margin-left: 55px;
        padding: 10px;
    }
    label{
        font-size: 20px;
    }
</style>


    @include('header')


{{--<section>
<h2>Вход</h2>
    <p class="members">Только для членов организации</p>
    <div style="border: 3px solid green; padding: 0 20px;">
        <div >
            <p>Введите вашу почту</p>
            <input type="email" placeholder="Ваш E-mail">
        </div>
        <div>
            <p>Введите ваш пароль</p>
            <input type="email" placeholder="Ваш пароль">
        </div>
    </div>
</section>--}}
<section >
    <h2>Вход</h2>
    <p class="members">Только для членов организации</p>
<form method="POST" action="{{ route('login') }}">
    @csrf
    <label>Логин:</label>
    <br>
    <div>
    <input type="email" name="email" required>
    </div>
    <br>
    <label>Пароль:</label>
    <br>
    <input type="password" name="password" required>
    <br>
    <br>
    <button type="submit">Вход</button>
</form>
</section>

    @include('footer')
