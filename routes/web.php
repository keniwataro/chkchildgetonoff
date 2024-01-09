<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GetonoffplaceController;
use App\Http\Controllers\ChildnameController;
use App\Http\Controllers\CheckuserController;
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

// ***************************************************
// メイン画面
// ***************************************************
// ルートの場合はdashboard画面に移動（ログインしていない場合はログイン画面）
Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//ボタンテスト画面
Route::get('/test-buttons', function () {
    return view('test-buttons');
});

// ***************************************************
// 登録画面
// ***************************************************
//送迎場所（表示・登録・削除）
Route::get('/editplace', [GetonoffplaceController::class,'index'])->middleware(['auth', 'verified']);
Route::post('/editplace', [GetonoffplaceController::class,'store'])->middleware(['auth', 'verified']);
Route::delete('/editplace/{getonoffplace}',[GetonoffplaceController::class,'destroy'])->middleware(['auth', 'verified']);

//園児登録画面表示
Route::get('/editchild',[ChildnameController::class,'index'])->middleware(['auth', 'verified']);
Route::post('/editchild',[ChildnameController::class,'store'])->middleware(['auth', 'verified']);
Route::delete('/editchild/{childname}',[ChildnameController::class,'destroy'])->middleware(['auth', 'verified']);


//バス利用確認画面表示
Route::get('/registerbususer', [CheckuserController::class,'index'])->middleware(['auth', 'verified']);


// ***************************************************
// 行きの乗車画面
// ***************************************************
//園児側乗者確認画面表示
Route::get('/listallgeton-to', [ChildnameController::class, 'index_mobile'])->middleware(['auth', 'verified']);

//園児側乗車地点の確認画面表示
Route::get('/listgeton-to-place/{place_id}', [GetonoffplaceController::class,'index_place'])->middleware(['auth', 'verified']);

//園児側乗車確認画面表示
Route::get('/chkgeton-to/{place_id}/{child_order}', [ChildnameController::class,'index_check'])->middleware(['auth', 'verified']);

//園児側乗車確認画面で最後の画面表示
Route::get('/chkgeton-to-last/{place_id}', [GetonoffplaceController::class,'nomore_place'])->middleware(['auth', 'verified']);


// ***************************************************
// 行きの降車画面
// ***************************************************
//送迎場所園児一覧確認画面表示
Route::get('/listallgetoff-to',[ChildnameController::class, 'index_mobile2'])->middleware(['auth', 'verified']);

//園児降者確認画面表示
Route::get('/chkgetoff-to/{child_order}', [ChildnameController::class, 'index_mobile3'])->middleware(['auth', 'verified']);

//園児降者確認画面で最後の画面表示
Route::get('/chkgetoff-to-last', function () {
    return view('chkgetoff-to-last');
})->middleware(['auth', 'verified']);



// ***************************************************
// その他
// ***************************************************

// ログインユーザー認証用ルート
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//  このファイル(web.php)があるディレクトリ(routes)内の
//  auth.phpを読み込む処理
require __DIR__.'/auth.php';
