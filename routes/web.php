<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ArticlesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     // $items = ['apple', 'banana', 'tomato'];

//     // return view('welcome', ['items'=>$items]);

//     return view('welcome');
// });

Route::get('/', [WelcomeController::class, 'index']);

// Route::resource('articles', ArticlesController::class);

Route::get('auth/login', function () {
    $credentials = [
        'email' => 'john@example.com',
        'password'=> 'secret'
    ];

    if(!auth()->attempt($credentials)) {
        return '로그인 정보가 정확하지 않습니다.';
    }

    return redirect('protected');
});

Route::get('protected', ['middleware' => 'auth', function () {
    dump(session()->all());

    // if(!auth()->check()) {
        // return '누구세요?';
    // }

    return '어서오세요'.auth()->user()->name;
}]);

Route::get('auth/logout', function () {
    auth()->logout();

    return '또 봐요~';
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
