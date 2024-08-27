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
use App\Http\Controllers\DataSuratController;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('auth/login', [LoginController::class, 'index'])->name('login');

Route::post('auth/login', [LoginController::class, 'authenticate'])->name('loginPost');

Route::post('auth/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('auth/register', [RegisterController::class, 'index'])->name('register');

Route::post('auth/register', [RegisterController::class, 'store'])->name('registerPost');

Route::get('dashboard', [BerandaController::class, 'index'])->name('dashboard');

Route::get('dashboard/bidang', [BidangController::class, 'index'])->name('bidang');

Route::get('dashboard/sekretariat', [SekretariatController::class, 'index'])->name('sekretariat');

Route::post('dashboard/sekretariat/upload', [SekretariatController::class, 'store'])->name('sekretariatPost');

Route::get('dashboard/kesmas', [KesehatanMasyarakatController::class, 'index'])->name('kesmas');

Route::post('dashboard/kesmas/upload', [KesehatanMasyarakatController::class, 'store'])->name('kesmasPost');

Route::get('dashboard/pencegahanDanPengendalianPenyakit', [P2pController::class, 'index'])->name('p2p');

Route::post('dashboard/pencegahanDanPengendalianPenyakit/upload', [P2pController::class, 'store'])->name('p2pPost');

Route::get('dashboard/pelayananKesehatan', [PelayananKesehatanController::class, 'index'])->name('pelkes');

Route::post('dashboard/pelayananKesehatan/upload', [PelayananKesehatanController::class, 'store'])->name('pelkesPost');

Route::get('dashboard/sumberDayaKesehatan', [SumberDayaKesehatanController::class, 'index'])->name('sdk');

Route::post('dashboard/sumberDayaKesehatan/upload', [SumberDayaKesehatanController::class, 'store'])->name('sdkPost');

Route::get('lihatsurat/{menu?}', [LihatSuratController::class, 'index'])->name('lihatSurat');

Route::get('cariSurat', [LihatSuratController::class, 'findSurat'])->name('searchSurat');

Route::get('detailSurat/{id}', [LihatSuratController::class, 'show'])->name('detailSurat');

Route::delete('/data-surat/{surat_id}', [LihatSuratController::class, 'destroy'])->name('dataSuratDestroy');

Route::get('dashboard/dataSurat', [DataSuratController::class, 'index'])->name('dataSurat');
