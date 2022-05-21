<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlumnusControlller;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\StafController;
use App\Http\Controllers\BidangMinatController;
use App\Http\Controllers\IabeeController;
use App\Http\Controllers\KerjaSamaController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\TujuansController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\KurikulumsController;
use App\Http\Controllers\LowonganKerjaController;
use App\Http\Controllers\PanduanController;
use App\Http\Controllers\ProfileLulusanController;
use App\Http\Controllers\PembimbingAkademikController;
use App\Http\Controllers\PrasaranaController;
use App\Http\Controllers\ProfileKaprodiController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Laravel\Sail\Console\PublishCommand;
use Maatwebsite\Excel\Row;

// Public
Route::get('/', [PublicController::class, 'halamanUtama']);
Route::get('/tentangprodi', [PublicController::class, 'tentangprodi']);
Route::get('/visimisitujuan', [PublicController::class, 'visimisitujuan']);
Route::get('/stafpengajar', [PublicController::class, 'stafpengajar']);
Route::get('/profillulusan', [PublicController::class, 'profillulusan']);
Route::get('/fasilitas', [PublicController::class, 'fasilitas']);
Route::get('/kerjasama', [PublicController::class, 'kerjasama']);
Route::get('/mbkm', [PublicController::class, 'mbkm']);
Route::get('/pengumuman', [PublicController::class, 'pengumuman']);
Route::get('/berita', [PublicController::class, 'berita']);
Route::get('/prestasi', [PublicController::class, 'prestasi']);
Route::get('/lowongankerja', [PublicController::class, 'lowongankerja']);
Route::get('/kurikulum', [PublicController::class, 'kurikulum']);
Route::get('/bimbinganakademik', [PublicController::class, 'bimbinganakademik']);
Route::get('/panduan', [PublicController::class, 'panduan']);
Route::get('/iabee', [PublicController::class, 'iabee']);

Route::get('/pengumuman-only', [PublicController::class, 'pengumuman'])->name('pengumuman_only');
Route::get('/pengumuman-berita', [PublicController::class, 'berita'])->name('pengumuman_berita');
Route::get('/pengumuman-prestasi', [PublicController::class, 'prestasi'])->name('pengumuman_prestasi');
Route::get('/pengumuman/{announcement}', [PublicController::class, 'show'])->name('pengumuman_detail');
Route::get('/halpanduan', [PublicController::class, 'halpanduan'])->name('halpanduan');

// Admin
Auth::routes([
    'register' => false,
    'reset' => false,
    'confirm' => false,
]);

// Admin-Beranda
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::resource('/admin-kaprodi', ProfileKaprodiController::class);

Route::resource('/announcement', AnnouncementController::class);
Route::get('/announcement/{id}/delete_doc', [AnnouncementController::class, 'delete_doc'])->name('announcement.delete_doc');

Route::resource('/admin-panduan', PanduanController::class);
Route::get('/admin-panduan/{id}/hapus_doc', [PanduanController::class, 'hapus_doc'])->name('panduan.hapus_doc');

Route::resource('/admin-alumnus', AlumnusControlller::class);
Route::post('/admin-alumnus/import_excel', [AlumnusControlller::class, 'import_excel']);
Route::get('/admin-alumnus/delete_all', [AlumnusControlller::class, 'delete_all']);

Route::resource('/visi_misi', VisiMisiController::class);

Route::resource('/staf_pengajar', StafController::class);
Route::post('/staf_pengajar/import_excel', [StafController::class, 'import_excel']);
Route::get('/staf/delete_all', [StafController::class, 'delete_all']);

Route::resource('/bidangminat', BidangMinatController::class);
Route::post('/bidangminat/import_excel', [BidangMinatController::class, 'import_excel']);
Route::get('/minat/delete_all', [BidangMinatController::class, 'delete_all']);

Route::resource('/profile_lulusan', ProfileLulusanController::class);
Route::get('/profilelulusan/delete_all', [ProfileLulusanController::class, 'delete_all']);
Route::post('/profilelulusan/import_excel', [ProfileLulusanController::class, 'import_excel']);

Route::resource('/pembimbing_akademik', PembimbingAkademikController::class);
Route::get('/pembimbing_akademik/{id}/hapus_doc', [PembimbingAkademikController::class, 'hapus_doc'])->name('pembimbing_akademik.hapus_doc');

Route::resource('/tujuans', TujuansController::class);

Route::resource('/tentang', TentangController::class);

Route::resource('/kurikulums', KurikulumsController::class);
Route::get('/kurikulum/delete_all', [KurikulumsController::class, 'delete_all']);
Route::post('/kurikulum/import_excel', [KurikulumsController::class, 'import_excel']);
Route::get('/kurikulums/{id}/hapus_doc', [KurikulumsController::class, 'hapus_doc'])->name('kurikulums.hapus_doc');

Route::resource('/slider', SliderController::class);
Route::resource('/user', UsersController::class);

Route::resource('/admin-prasarana', PrasaranaController::class);

Route::resource('/admin-kerjasama', KerjaSamaController::class);

Route::resource('/admin-lowongankerja', LowonganKerjaController::class);

Route::resource('/admin-iabee', IabeeController::class);
