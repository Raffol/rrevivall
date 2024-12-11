<?php
namespace App\Http\Controllers;

use App\Models\User; // Импортируем модель User из пространства имен App\Models
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user();  // Получаем текущего пользователя
        return view('lk', compact('user'));  // Передаем переменную $user в представление
    }
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        return response()->json($user);
    }
    public function showCabinet()
    {
        $user = auth()->user(); // Получаем текущего авторизованного пользователя
        return view('lk', compact('user')); // Возвращаем представление личного кабинета с данными пользователя
    }
}
