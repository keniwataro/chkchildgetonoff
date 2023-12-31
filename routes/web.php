<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| ウェブ・ルート
|--------------------------------------------------------------------------
|
| 以下は、あなたのアプリケーションのためにウェブ・ルートを登録できる場所です。
| これらのルートは、RouteServiceProvider によって読み込まれ、すべてが "web" 
| ミドルウェアグループに割り当てられます。素晴らしいものを作りましょう！
|
*/

// ルートの場合はdashboard画面に移動（ログインしていない場合はログイン画面）
Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// ログインユーザー認証用ルート
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//ボタンテスト
Route::get('/test-buttons', function () {
    return view('test-buttons');
});

//送迎場所テスト
Route::get('/editplace', function () {
    return view('editplace');
});

//園児登録テスト
Route::get('/editchild', function () {
    return view('editchild');
});

//バス利用確認テスト
Route::get('/registerbususer', function () {
    return view('registerbususer');
});

//  このファイル(web.php)があるディレクトリ(routes)内の
//  auth.phpを読み込む処理
require __DIR__.'/auth.php';
