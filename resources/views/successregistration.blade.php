@include('header')
<style>
    div{
        text-align: center;
        font-size: large;
    }
</style>
<div class="container mx-auto py-10 text-center">
    <h2 class="text-3xl font-bold mb-5">Регистрация прошла успешно!</h2>
    <p>Ваш аккаунт был успешно создан. Теперь вы можете войти в систему.</p>
    <a href="{{ route('auth.form') }}" class="mt-5 inline-block bg-blue-500 text-white px-5 py-2">Перейти к входу</a>
</div>
@include('footer')
