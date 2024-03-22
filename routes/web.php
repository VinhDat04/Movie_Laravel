<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

use App\Http\Controllers\Auth\EmailVerificationController;



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
//     return view('welcome');
// });

//route user bình thường
Route::get('/', [UserController::class, 'index'])->name('homepage');
Route::get('/all', [UserController::class, 'all'])->name('all');
Route::get('/productdetails/{id}', [UserController::class, 'show'])->name('productdetails');
Route::get('/search', [UserController::class, 'search'])->name('search');
Route::get('/loginuser', [UserController::class, 'login'])->name('loginuser');
Route::get('/registeruser', [UserController::class, 'register'])->name('registeruser');

// detailsmovies


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//router admin
Route::group(['middleware' => ['auth', 'role:1']], function () {
    Route::get('/movies', [AdminController::class, 'index'])->name('movie.index');
    Route::get('/movie/create', [AdminController::class, 'create'])->name('movie.create');
    Route::get('/movie/store', [AdminController::class, 'store'])->name('movie.store');
    Route::get('/movie/userlist', [AdminController::class, 'userlist'])->name('movie.userlist');

    Route::get('/movie/{id}/edit', [AdminController::class, 'edit'])->name('movie.edit');
    Route::get('/movie/{id}/edituser', [AdminController::class, 'edituser'])->name('movie.edituser');

    Route::post('/movie/{id}/update', [AdminController::class, 'update'])->name('movie.update');
    Route::post('/movie/{id}/updateuser', [AdminController::class, 'updateuser'])->name('user.updateuser');

    Route::get('/movie/{id}/destroy', [AdminController::class, 'destroy'])->name('movie.destroy');
    Route::get('/movie/{id}/destroyuser', [AdminController::class, 'destroyuser'])->name('movie.destroyuser');
    // carosel
    Route::get('/movie/carosels', [AdminController::class, 'carosels'])->name('movie.carosels');
    Route::get('/movie/createcarosels', [AdminController::class, 'createcarosels'])->name('movie.createcarosels');
    Route::get('/movie/{id}/editcarosels', [AdminController::class, 'editcarosels'])->name('movie.editcarosels');
    Route::post('/movie/{id}/updatecarosels', [AdminController::class, 'updatecarosels'])->name('movie.updatecarosels');
    Route::get('/movie/{id}/destroycarosels', [AdminController::class, 'destroycarosels'])->name('movie.destroycarosels');
    Route::get('/movie/storecarosels', [AdminController::class, 'storecarosels'])->name('movie.storecarosels');
    Route::get('/movie/detailsmovies', [AdminController::class, 'detailsmovies'])->name('movie.detailsmovies');
    Route::get('/movie/createdetailsmovies', [AdminController::class, 'createdetailsmovies'])->name('movie.createdetailsmovies');
    Route::get('/movie/{id}/editdetailsmovies', [AdminController::class, 'editdetailsmovies'])->name('movie.editdetailsmovies');
    Route::post('/movie/{id}/updatedetailsmovies', [AdminController::class, 'updatedetailsmovies'])->name('movie.updatedetailsmovies');
    Route::get('/movie/{id}/destroydetailsmovies', [AdminController::class, 'destroydetailsmovies'])->name('movie.destroydetailsmovies');
    Route::get('/movie/storedetailsmovies', [AdminController::class, 'storedetailsmovies'])->name('movie.storedetailsmovies');
    Route::get('/movie/createuser', [AdminController::class, 'createuser'])->name('movie.createuser');
    Route::post('movie/storeuser', [AdminController::class, 'storeuser'])->name('movie.storeuser');







});
//router manage
Route::group(['middleware' => ['auth', 'role:2']], function () {
    Route::get('/movies', [AdminController::class, 'index'])->name('movie.index');
    Route::get('/movie/create', [AdminController::class, 'create'])->name('movie.create');
    Route::get('/movie/detailsmovies', [AdminController::class, 'detailsmovies'])->name('movie.detailsmovies');
    Route::get('/movie/createdetailsmovies', [AdminController::class, 'createdetailsmovies'])->name('movie.createdetailsmovies');
});

//route xác thực email

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    // Lưu thông báo trong session
    session()->flash('status', 'Email xác thực thành công!');

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return redirect()->route('verification.notice')->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::post('/email/verification-resend', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');






