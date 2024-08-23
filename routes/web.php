<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\SekretariatController;
use App\Http\Controllers\KesehatanMasyarakatController;
use App\Http\Controllers\P2pController;
use App\Http\Controllers\PelayananKesehatanController;
use App\Http\Controllers\SumberDayaKesehatanController;
use App\Http\Controllers\LihatSuratController;



Route::get('auth/login', [LoginController::class, 'index'])->name('login');

route::post('auth/login', [LoginController::class, 'authenticate'])->name('loginPost');

Route::get('auth/register', [RegisterController::class, 'index'])->name('register');

Route::post('auth/register', [RegisterController::class, 'store'])->name('registerPost');

Route::get('dashboard', [BerandaController::class, 'index'])->name('dashboard');

Route::get('dashboard/bidang', [BidangController::class, 'index'])->name('bidang');

Route::get('dashboard/sekretariat', [SekretariatController::class, 'index'])->name('sekretariat');

Route::get('dashboard/kesmas', [KesehatanMasyarakatController::class, 'index'])->name('kesmas');

Route::get('dashboard/pencegahanDanPengendalianPenyakit', [P2pController::class, 'index'])->name('p2p');

Route::get('dashboard/pelayananKesehatan', [PelayananKesehatanController::class, 'index'])->name('pelkes');

Route::get('dashboard/sumberDayaKesehatan', [SumberDayaKesehatanController::class, 'index'])->name('sdk');

Route::get('dashboard/lihatSurat', [LihatSuratController::class, 'index'])->name('lihatSurat');
