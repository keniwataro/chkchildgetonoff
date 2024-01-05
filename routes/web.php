<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GetonoffplaceController;
use App\Http\Controllers\ChildnameController;
use App\Models\Childname;
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
Route::get('/editplace', [GetonoffplaceController::class,'index']);

//園児登録テスト
Route::get('/editchild',[ChildnameController::class,'index']);

//バス利用確認テスト
Route::get('/registerbususer', function () {
    return view('registerbususer');
});

//送迎場所園児一覧確認テスト
Route::get('/listallgetoff-to',[ChildnameController::class, 'index_mobile2']);

//園児側乗降者確認画面テスト
Route::get('/chkgetoff-to/{child_order}', [ChildnameController::class, 'index_mobile3']);

//園児側乗降者確認画面テスト
Route::get('/listallgeton-to', [ChildnameController::class, 'index_mobile']);


//園児側乗降者確認画面　最後の園児テスト
Route::get('/chkgetoff-to-last', function () {
    return view('chkgetoff-to-last');
});


//11_園児側乗降車確認画面-最後の園児　テスト
Route::get('/chkgeton-to-last/{place_id}', [GetonoffplaceController::class,'nomore_place']);

//9_chkgeton_to_園児側乗降車確認画面　テスト
Route::get('/chkgeton-to/{place_id}/{child_order}', [ChildnameController::class,'index_check']);

//9_chkgeton_to_園児側乗降車確認画面　テスト
Route::get('/listgeton-to-place/{place_id}', [GetonoffplaceController::class,'index_place']);

//  このファイル(web.php)があるディレクトリ(routes)内の
//  auth.phpを読み込む処理
require __DIR__.'/auth.php';
