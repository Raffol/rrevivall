@include('header')
<style>
    .auth-container {
        margin: 50px auto;
        width: 400px;
        text-align: center;
    }

    .form {
        transition: opacity 0.5s ease;
    }
    .form h2{
        font-size: 50px;
    }
    .form p{
        font-size: 35px;
    }
    label{
        font-size: 28px;
    }
    .buttons {
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
        text-align: center;
    }

    .btn {
        background-color: #e59213;
        border-radius: 30px 10px;
        box-shadow: 0 0 0 rgba(0, 0, 0, 0);
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
        padding: 10px 15px;
        margin: 10px 15px;
    }
    input{
        width: 270px;
        height: 30px;
        border-radius: 30px;
    }
</style>

<div class="container">
    <div class="auth-container">
        <div class="buttons">
            <button id="login-btn" class="btn" onclick="showLogin()">Вход</button>
            <button id="register-btn" class="btn" onclick="showRegister()">Регистрация</button>
        </div>

        <!-- Форма входа -->
        <div id="login-form" class="form">
            <h2>Вход</h2>
            <p>Для членов организации</p>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Электронная почта</label>
                    <br>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Пароль</label>
                    <br>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Войти</button>
            </form>
        </div>

        <!-- Форма регистрации -->
        <div id="register-form" class="form" style="display: none;">
            <h2>Регистрация</h2>
            <p>Для новых участников сообщества</p>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Имя</label>
                    <br>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Электронная почта</label>
                    <br>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Пароль</label>
                    <br>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Подтверждение пароля</label>
                    <input type="password" name="password_confirmation" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success"><a href="{{url('successregistration')}}">Зарегистрироваться</a></button>
            </form>
        </div>
    </div>
</div>
<script>
    function showLogin() {
        document.getElementById('login-form').style.display = 'block';
        document.getElementById('register-form').style.display = 'none';
        document.getElementById('login-btn').classList.add('active');
        document.getElementById('register-btn').classList.remove('active');
    }

    function showRegister() {
        document.getElementById('login-form').style.display = 'none';
        document.getElementById('register-form').style.display = 'block';
        document.getElementById('login-btn').classList.remove('active');
        document.getElementById('register-btn').classList.add('active');
    }
</script>

@include('footer')
