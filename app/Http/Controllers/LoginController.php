<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    // Показать форму входа
    public function showLoginForm()
    {
        return view('auth');
    }

    // Обработать данные логина
    public function login(Request $request)
    {
        // Валидация данных
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Попытка аутентификации
        if (Auth::attempt($credentials)) {
            // Перегенерация сессии для безопасности
           // $request->session()->regenerate();

            // Перенаправление после успешного входа
            return redirect()->intended('lk');
        }

        // Возврат на страницу логина с ошибкой
        return back()->withErrors([
            'email' => 'Неверный email или пароль.',
        ]);
    }

    // Выход из системы
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/auth');
    }
}
