<?php

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();  // Получаем текущего залогиненного пользователя
        return view('lk', compact('user'));  // Передаем данные в представление
    }
}
