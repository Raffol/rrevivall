<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LkController extends Controller
{
    // Личный кабинет
    public function index()
    {
        // Получаем текущего аутентифицированного пользователя
        $user = auth()->user();

        // Передаем данные пользователя в представление
        return view('lk', compact('user'));
    }
}


