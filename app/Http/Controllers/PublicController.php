<?php

namespace App\Http\Controllers;

use App\Models\Alumnus;
use App\Models\Announcement;
use App\Models\BidangMinat;
use App\Models\Staf;
use App\Models\Document;
use App\Models\Iabee;
use App\Models\Kurikulums;
use App\Models\Panduan;
use App\Models\PembimbingAkademik;
use App\Models\Kaprodi;
use App\Models\KerjaSama;
use App\Models\LowonganKerja;
use App\Models\Prasarana;
use App\Models\ProfileKaprodi;
use App\Models\ProfileLulusan;
use App\Models\Slider;
use App\Models\VisiMisi;
use App\Models\Tentang;
use App\Models\Tujuans;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\FuncCall;

class PublicController extends Controller
{
    public function halamanUtama()
    {
        $title = "Beranda";
        $profile_kaprodi = ProfileKaprodi::get();
        $latest_news = Announcement::latest()->limit(3)->get();
        $alumnus = Alumnus::latest()->limit(3)->get();

        return view(
            'new_ui.beranda',
            compact('profile_kaprodi', 'latest_news', 'alumnus')
        );
    }

    public function index()
    {
        $announcements  = Announcement::latest()->paginate(8);
        $latests  = Announcement::latest()->limit(6)->get();
        $sliders = Slider::get();
        $title = "Pengumuman";

        return view('announcement', compact('announcements', 'latests', 'title', 'sliders'));
    }

    public function pengumuman()
    {
        $announcements  = Announcement::latest()->paginate(8);

        return view('new_ui.pengumuman', compact('announcements'));
    }

    public function berita()
    {
        $announcements  = Announcement::latest()->paginate(8);

        return view('new_ui.berita', compact('announcements'));
    }

    public function prestasi()
    {
        $announcements  = Announcement::latest()->paginate(8);

        return view('new_ui.prestasi', compact('announcements'));
    }

    public function lowongankerja()
    {
        $lowongan_kerja = LowonganKerja::latest()->get();

        return view('new_ui.lowongan_kerja', compact('lowongan_kerja'));
    }

    public function show(Announcement $announcement)
    {
        $title = "Pengumuman";
        $sliders = Slider::get();
        return view('announcement_detail', compact('announcement', 'title', 'sliders'));
    }

    public function kurikulum()
    {
        $kurikulum = Kurikulums::get();
        $bidangminat = BidangMinat::get()->sortBy('semester');
        return view('new_ui.kurikulum', compact('kurikulum', 'bidangminat'));
    }

    public function panduan()
    {
        $panduans = Panduan::latest()->get();

        return view('new_ui.panduan', compact('panduans'));
    }

    public function bimbinganakademik()
    {
        $bimbinganakademik = PembimbingAkademik::get();

        return view('new_ui.bimbingan_akademik', compact('bimbinganakademik'));
    }

    public function profillulusan()
    {
        $profile_lulusan = ProfileLulusan::get();

        return view('new_ui.profil_lulusan', compact('profile_lulusan'));
    }

    public function tentangprodi()
    {
        $tentang = Tentang::get();

        return view('new_ui.tentang', compact('tentang'));
    }

    public function visimisitujuan()
    {

        $visi_misi = VisiMisi::get();
        $tujuan = Tujuans::get();

        return view('new_ui.visi_misi_tujuan', compact('visi_misi', 'tujuan'));
    }

    public function stafpengajar()
    {
        $staf_pengajar = Staf::paginate(10);

        return view('new_ui.staf_pengajar', compact('staf_pengajar'));
    }

    public function fasilitas()
    {
        $prasarana = Prasarana::get();

        return view('new_ui.fasilitas', compact('prasarana'));
    }

    public function kerjasama()
    {
        $kerja_sama = KerjaSama::get();

        return view('new_ui.kerja_sama', compact('kerja_sama'));
    }

    public function mbkm()
    {
        $announcements  = Announcement::latest()->paginate(8);

        return view('new_ui.mbkm', compact('announcements'));
    }

    public function iabee()
    {
        $iabee = Iabee::get();

        return view('new_ui.iabee', compact('iabee'));
    }
}
