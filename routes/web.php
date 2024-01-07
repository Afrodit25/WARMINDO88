<?php

use App\Http\Controllers\BankAccountController;
use App\Http\Controllers\BonusController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\MahaCuanController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WithdrawController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    // return redirect('login');
    return redirect('apps');
});

Auth::routes();








Route::get('/cpanel_login', [App\Http\Controllers\HomeController::class, 'index'])->name('cpanel_login');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

Route::get('/Home', [App\Http\Controllers\HomeController::class, 'index'])->name('Home')->middleware('auth');


Route::get('/Users', [UserController::class, 'index'])->name('Users')->middleware('auth');
Route::get('/User/json', [UserController::class, 'json'])->middleware('auth');
Route::match(['get', 'put'], 'User/ChangePassword/{id}', [UserController::class, 'changePassword'])->name('user.change_password')->middleware('auth');


Route::get('/Karyawan', [KaryawanController::class, 'index'])->name('Karyawans')->middleware('auth');
Route::get('/Karyawan/json', [KaryawanController::class, 'json'])->middleware('auth');

Route::get('/Member', [MemberController::class, 'index'])->name('Members')->middleware('auth');
Route::get('/Member/json', [MemberController::class, 'json'])->middleware('auth');


Route::get('/Bonus', [BonusController::class, 'index'])->name('Bonuses')->middleware('auth');
Route::get('/Bonus/json', [BonusController::class, 'json'])->middleware('auth');
Route::match(['get', 'post'], 'Bonus/save', [BonusController::class, 'store'])->name('Bonus.store')->middleware('auth');
Route::match(['get', 'put'], 'Bonus/update/{id}', [BonusController::class, 'update'])->name('Bonus.update')->middleware('auth');
Route::delete('Bonus/delete/{id}', [BonusController::class, 'delete'])->name('Bonus.delete')->middleware('auth');


Route::get('/Deposit', [DepositController::class, 'index'])->name('Deposits')->middleware('auth');
Route::get('/Deposit/json', [DepositController::class, 'json'])->middleware('auth');
Route::match(['get', 'put'], 'Deposit/update_status/{id}', [DepositController::class, 'UpdateStatus'])->name('Deposit.UpdateStatus')->middleware('auth');


Route::get('/Withdraw', [WithdrawController::class, 'index'])->name('Withdraws')->middleware('auth');
Route::get('/Withdraw/json', [WithdrawController::class, 'json'])->middleware('auth');



Route::match(['get', 'post'], 'BankAccount/save', [BankAccountController::class, 'store'])->name('BankAccount.store')->middleware('auth');



// WARMINDO88
Route::get('/apps', [App\Http\Controllers\MahaCuanController::class, 'index'])->name('apps.index');
Route::match(['get', 'post'], '/apps/doLogin', [MahaCuanController::class, 'doLogin'])->name('apps.doLogin')->middleware('guest');

Route::get('/apps/index', [App\Http\Controllers\MahaCuanController::class, 'index_doLogin'])->name('apps.index_doLogin')->middleware('auth');

Route::get('/apps/register', [App\Http\Controllers\MahaCuanController::class, 'register'])->name('apps.register')->middleware('guest');
Route::match(['get', 'post'], '/apps/checkUsername', [MahaCuanController::class, 'checkUsername'])->name('apps.checkUsername')->middleware('auth');
Route::post('/apps/register_save', [App\Http\Controllers\MahaCuanController::class, 'register_save'])->name('apps.register_save');

Route::get('/apps/lupa_sandi', [App\Http\Controllers\MahaCuanController::class, 'lupa_sandi'])->name('apps.lupa_sandi')->middleware('guest');
Route::match(['get', 'post'], '/apps/lupa_sandi_save', [MahaCuanController::class, 'lupa_sandi_save'])->name('apps.lupa_sandi_save');


Route::get('/apps/tambah_dana', [App\Http\Controllers\MahaCuanController::class, 'tambah_dana'])->name('apps.tambah_dana')->middleware('auth');
Route::match(['get', 'post'], '/apps/tambah_dana/json_tambahDana', [MahaCuanController::class, 'json_tambahDana'])->name('apps.json_tambahDana')->middleware('auth');
Route::post('/apps/deposit_save', [App\Http\Controllers\MahaCuanController::class, 'deposit_save'])->name('apps.deposit_save')->middleware('auth');

Route::get('/apps/tarik_dana', [App\Http\Controllers\MahaCuanController::class, 'tarik_dana'])->name('apps.tarik_dana')->middleware('auth');

Route::get('/apps/bonus', [App\Http\Controllers\MahaCuanController::class, 'bonus'])->name('apps.bonus')->middleware('auth');
Route::get('/apps/memo', [App\Http\Controllers\MahaCuanController::class, 'memo'])->name('apps.memo')->middleware('auth');
Route::get('/apps/profile', [App\Http\Controllers\MahaCuanController::class, 'profile'])->name('apps.profile')->middleware('auth');
Route::get('/apps/feedback', [App\Http\Controllers\MahaCuanController::class, 'feedback'])->name('apps.feedback')->middleware('auth');
Route::get('/apps/help', [App\Http\Controllers\MahaCuanController::class, 'help'])->name('apps.help')->middleware('auth');
Route::get('/logout/apps', [App\Http\Controllers\MahaCuanController::class, 'logout_mahacuan'])->name('logout_mahacuan');





