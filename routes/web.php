<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Models\News;
use App\Http\Controllers\ProfileController;

//Auth::routes();

Route::get('/imgslider', function () {
    return view('imgslider');
});

Route::get('/', function () {
    return view('homee');
});
Route::get('/createnews', function () {
    return view('createnews');
});
Route::get('/newsindex', function () {
    return view('newsindex');
});
Route::get('/newsslider', function () {
    return view('newsslider');
});
Route::get('/about', function () {
    return view('about');
});
/*Route::get('/entrance', function () {
    return view('entrance');
});*/
Route::get('/registration', function () {
    return view('registration');
});
Route::get('/organizers', function () {
    return view('organizers');
});
Route::get('/homee', function () {
    return view('homee');
});
Route::get('/lk', function () {
    return view('lk');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/ourgames', function () {
    return view('404');
});
Route::get('/auth', function () {
    return view('auth');
});
Route::get('/lk', function () {
    return view('lk');
});
Route::get('/lk', [App\Http\Controllers\LkController::class, 'index'])->name('lk');

Route::get('/createnews', function () {
    return view('createnews');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/lk', [ProfileController::class, 'index'])->name('lk');
});
/*Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('registration');

// Обработка данных регистрации (POST-запрос)
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');*/

// Страница успешной регистрации
/*Route::get('/successregistration', function () {
    return view('successregistration');
});*/

Route::get('/createnews', [NewsController::class, 'create'])->name('createnews');
// Маршрут для отправки данных создания новости (POST-запрос)
Route::post('/createnews', [NewsController::class, 'store'])->name('createnews.store');
// Показать форму добавления новости
Route::get('/createnews', [NewsController::class, 'create'])->name('news.create');

// Сохранить новость
Route::post('/newsindex', [NewsController::class, 'store'])->name('news.store');

// Показать все новости
Route::get('/newsindex', [NewsController::class, 'index'])->name('news.index');
// Показать одну новость
Route::get('/newsslider/{id}', [NewsController::class, 'show'])->name('news.show');

Route::get('/register-success', [RegisterController::class, 'registerSuccess'])->name('register.success');
/*Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Маршрут для обработки данных логина (POST-запрос)
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/profile', [ProfileController::class, 'showProfile'])->middleware('auth')->name('profile');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
//Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
Route::post('profile', [AuthController::class, 'updateProfile'])->name('profile.update');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/profile', [AuthController::class, 'profile'])->name('profile')->middleware('auth');
Route::get('/lk', [App\Http\Controllers\LkController::class, 'index'])->middleware('auth')->name('lk');
Route::post('/profile/update', [ProfileController::class, 'updateProfile'])->name('profileupdate');*/
Route::get('/createnews', [NewsController::class, 'create'])->name('createnews');
// Маршрут для отправки данных создания новости (POST-запрос)
Route::post('/createnews', [NewsController::class, 'store'])->name('createnews.store');
// Показать форму добавления новости
Route::get('/createnews', [NewsController::class, 'create'])->name('news.create');

// Сохранить новость
Route::post('/newsindex', [NewsController::class, 'store'])->name('news.store');

// Показать все новости
Route::get('/newsindex', [NewsController::class, 'index'])->name('news.index');
// Показать одну новость
Route::get('/newsslider/{id}', [NewsController::class, 'show'])->name('news.show');
Route::get('/lk', [UserProfileController::class, 'lk'])->middleware('auth')->name('Личный кабинет');

// Маршрут для отображения формы создания новости (GET-запрос)
/*Route::get('/lk', [ProfileController::class, 'showProfile'])->name('lk')->middleware('auth');
Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');*/
Route::get('/news', function () {
    // Получаем все новости, отсортированные по дате создания
    $news = News::orderBy('published_at', 'desc')->get();
    return view('newsindex', compact('news'));
});
//Voyager
Route::group(['prefix' => config('voyager.prefix', 'admin')], function () {
    Voyager::routes();
});


// routes/web.php
// Страница авторизации (вход/регистрация)
Route::get('/auth', [AuthController::class, 'showAuthForm'])->name('auth.show');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/auth', [AuthController::class, 'showRegistrationForm'])->name('auth');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
// Личный кабинет и редактирование профиля
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'editProfile'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::post('/login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register.submit');
Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/editprofile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/update-profile', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index'); // Личный кабинет
Route::middleware(['auth'])->group(function () {
    Route::get('/lk', [ProfileController::class, 'index'])->name('lk'); // Определяем маршрут с именем lk
});
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');
Route::get('/site-news', [NewsController::class, 'index'])->name('site.news.index');
Route::get('/site-news/{id}', [NewsController::class, 'show'])->name('site.news.show');
