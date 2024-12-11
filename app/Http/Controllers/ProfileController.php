<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    /*public function showProfile()
    {
        $user = Auth::user();
        return view('lk');
    }*/
    public function index()
    {
        // Получаем текущего пользователя
        $user = Auth::user(); // Получаем текущего пользователя
        return view('lk', compact('user')); // Возвращаем представление
    }
    public function showProfile()
    {
        return view('lk');
    }
    public function edit()
    {
        $user = auth()->user(); // Получаем текущего авторизованного пользователя
        return view('editprofile', compact('user')); // Возвращаем представление формы редактирования профиля с данными пользователя
    }
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
        ]);

        $user = auth()->user();
        $user->name = $request->name;

        // Обработка загрузки аватарки
       /* if ($request->hasFile('avatar')) {
            $avatarName = time() . '.' . $request->avatar->getClientOriginalExtension();

            $image = $request->file('avatar');

            //Storage::disk('test')->put($avatarName, $image);
            $image->move(public_path('img'), $avatarName);
            //Storage::disk('test', $request->avatar);
            //[REFACTOR] $request->avatar->storeAs('public/avatars', $avatarName);

            // Сохранение нового пути к аватарке
            $user->avatar = $avatarName;
        }*/
        if ($request->hasFile('avatar')) {
            $filePath = $request->file('avatar')->store('avatars', 'public');
            $user->avatar = $filePath; // Сохраняем путь в базе данных
            $user->save();
        }
        $user->save();
        return redirect()->route('profile')->with('success', 'Профиль успешно обновлён');
    }
}
