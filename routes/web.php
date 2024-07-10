<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\ExtPhoneController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\MyProgramController;


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

Route::get('/', function () {
    return view('home');
});

Route::resource('dashboard', DashboardController::class);

Route::resource('download', DownloadController::class);

Route::resource('extphone', ExtPhoneController::class);

Route::get('booking-meeting', [MyProgramController::class, 'booking_meeeting'])->name('program.booking_meeting');

Route::get('budget', [MyprogramController::class, 'budget'])->name('program.budget');

Route::get('ess', [MyProgramController::class, 'employee_self_service'])->name('program.employee_self_service');

Route::get('mailblast', [MyProgramController::class, 'mailblast'])->name('program.mailblast');

Route::get('request-magang', [MyProgramController::class, 'request_magang'])->name('program.request_magang');

Route::get('e-audit', [MyProgramController::class, 'e_audit'])->name('program.e_audit');

Route::get('e-leave', [MyProgramController::class, 'e_leave'])->name('program.e_leave');

Route::get('e-travel', [MyProgramController::class, 'e_travel'])->name('program.e_travel');


Route::get('signin', [SignInController::class, 'index']);
