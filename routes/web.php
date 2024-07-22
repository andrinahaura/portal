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


Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

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

Route::get('fams-gs', [MyProgramController::class, 'fams_gs'])->name('program.fams_gs');

Route::get('onar', [MyProgramController::class, 'onar'])->name('program.onar');

Route::get('prk-online', [MyProgramController::class, 'prk_online'])->name('program.prk_online');

Route::get('fams-tehnik', [MyProgramController::class, 'fams_tehnik'])->name('program.fams_tehnik');

Route::get('it-docs', [MyProgramController::class, 'it_docs'])->name('program.it_docs');

Route::get('go-admin', [MyProgramController::class, 'go_admin'])->name('program.go-admin');

Route::get('caroline', [MyProgramController::class, 'caroline'])->name('program.caroline');

Route::get('felxben-asuransi', [MyProgramController::class, 'flexben_asuransi'])->name('program.flexben_asuransi');

Route::get('fams-prop', [MyProgramController::class, 'fams_prop'])->name('program.fams_prop');

Route::get('handling', [MyProgramController::class, 'handling'])->name('program.handling');

Route::get('program-library', [MyProgramController::class, 'program_library'])->name('program.program_library');

Route::get('corporate-secretary', [MyProgramController::class, 'corporate_secretary'])->name('program.corporate_secretary');

Route::get('cash-advance', [MyProgramController::class, 'cash_advance'])->name('program.cash_advance');

Route::get('diagram-studio', [MyProgramController::class, 'diagram_studio'])->name('program.diagram_studio');

Route::get('rt-pro', [MyProgramController::class, 'rt_pro'])->name('program.rt_pro');

Route::get('antv-talent', [MyProgramController::class, 'antv_talent'])->name('program.antv_talent');

Route::get('stc', [MyProgramController::class, 'stc'])->name('program.stc');

Route::get('apoline', [MyProgramController::class, 'apoline'])->name('program.apoline');

Route::get('lsf', [MyProgramController::class, 'lsf'])->name('program.lsf');

Route::get('t-reg', [MyProgramController::class, 't_reg'])->name('program.t_reg');

Route::get('media-order', [MyProgramController::class, 'media_order'])->name('program.media-order');

Route::get('fams-wardrobe', [MyProgramController::class, 'fams_wardrobe'])->name('program.fams_wardrobe');

Route::get('fleet-management', [MyProgramController::class, 'fleet_management'])->name('program.fleet_management');



Route::get('signin', [SignInController::class, 'index']);
