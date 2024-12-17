<?php

namespace App\Http\Controllers;

use App\Models\User; // Убедитесь, что используется правильная модель
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function showRegistrationForm()
    {
        return view('auth');
    }

    // Обработка данных регистрации
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|regex:/^[a-zA-Zа-яА-Я\s]+$/u',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:4|confirmed',
        ]);

        // Создание пользователя
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);

        // Автоматический вход после регистрации
        Auth::login($user);

        // Перенаправление на страницу профиля
        return redirect()->route('lk');
    }

    // Отображение формы входа
    public function showLoginForm()
    {
        return view('auth');
    }

    // Обработка данных входа
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('lk');
        }

        return back()->withErrors([
            'email' => 'Неверные учетные данные.',
        ]);
    }
    public function showProfile()
    {
        $user = Auth::user(); // Получаем текущего пользователя
        return view('lk', compact('user')); // Передаем переменную $user в представление
    }
    // Страница профиля после входа
    /*public function profile()
    {
       // return view('lk', ['user' => Auth::user()]);
        $user = Auth::user(); // Получаем текущего пользователя
        return view('lk', compact('user'));
    }*/
    public function logout(Request $request)
    {
        Auth::logout(); // Выход пользователя

        // Удаляем все сессионные данные (например, для безопасного выхода)
        $request->session()->invalidate();

        // Генерируем новый токен сессии для предотвращения атак CSRF
        $request->session()->regenerateToken();

        // Перенаправляем пользователя на страницу входа или на главную
        return redirect()->route('login'); // Или любой другой маршрут
    }
}
