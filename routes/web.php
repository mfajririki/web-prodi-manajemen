<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\StafController;
use App\Http\Controllers\BidangMinatController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\TujuansController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\KurikulumsController;
use App\Http\Controllers\PanduanController;
use App\Http\Controllers\ProfileLulusanController;
use App\Http\Controllers\PembimbingAkademikController;
use App\Http\Controllers\ProfileKaprodiController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Laravel\Sail\Console\PublishCommand;

// Landing page
Route::get('/', [PublicController::class, 'halamanUtama'])->name('landing');

// Public
Route::get('/pengumuman', [PublicController::class, 'index'])->name('pengumuman');
Route::get('/pengumuman-only', [PublicController::class, 'pengumuman'])->name('pengumuman_only');
Route::get('/pengumuman-berita', [PublicController::class, 'berita'])->name('pengumuman_berita');
Route::get('/pengumuman-prestasi', [PublicController::class, 'prestasi'])->name('pengumuman_prestasi');
Route::get('/staf', [PublicController::class, 'staf'])->name('staf');
Route::get('/pengumuman/{announcement}', [PublicController::class, 'show'])->name('pengumuman_detail');
Route::get('/profilelulusan', [PublicController::class, 'profilelulusan'])->name('profilelulusan');
Route::get('/bimbingan-akademik', [PublicController::class, 'bimbingan_akademik'])->name('bimbingan_akademik');
Route::get('/kurikulum', [PublicController::class, 'kurikulum_konten'])->name('kurikulum_konten');
Route::get('/halpanduan', [PublicController::class, 'halpanduan'])->name('halpanduan');

// Admin
Auth::routes([
    'register' => false,
    'reset' => false,
    'confirm' => false,
]);

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::resource('/announcement', AnnouncementController::class);
Route::get('/announcement/{id}/delete_doc', [AnnouncementController::class, 'delete_doc'])->name('announcement.delete_doc');
Route::resource('/panduan', PanduanController::class);
Route::get('/panduan/{id}/hapus_doc', [PanduanController::class, 'hapus_doc'])->name('panduan.hapus_doc');
Route::resource('/staf_pengajar', StafController::class);
Route::resource('/bidangminat', BidangMinatController::class);
Route::resource('/visi_misi', VisiMisiController::class);
Route::resource('/profile_lulusan', ProfileLulusanController::class);
Route::resource('/pembimbing_akademik', PembimbingAkademikController::class);
Route::resource('/tujuans', TujuansController::class);
Route::resource('/tentang', TentangController::class);
Route::resource('/kurikulums', KurikulumsController::class);
Route::get('/kurikulums/{id}/hapus_doc', [KurikulumsController::class, 'hapus_doc'])->name('kurikulums.hapus_doc');
Route::resource('/profile_kaprodi', ProfileKaprodiController::class);
Route::resource('/slider', SliderController::class);
Route::resource('/user', UsersController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
