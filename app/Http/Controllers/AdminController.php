<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Staf;
use App\Models\VisiMisi;
use App\Models\Tentang;
use App\Models\Document;
use App\Models\Kurikulums;
use App\Models\Tujuans;
use App\Models\BidangMinat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $announcements = Announcement::all();
        $staf_pengajar = Staf::all();
        $jumlah_staf = Staf::count();
        $jumlah_mk = Kurikulums::count();
        $jumlah_bidangminat = BidangMinat::count();
        $jumlah_pengumuman = Announcement::count();

        return view(
            'admin.dashboard',
            compact(
                'announcements',
                'staf_pengajar',
                'jumlah_staf',
                'jumlah_mk',
                'jumlah_bidangminat',
                'jumlah_pengumuman'
            )
        );
    }

    public function staf()
    {
        $staf_pengajar = Staf::all();
        $jumlah_staf = Staf::count();

        return view('admin.dashboard', compact('staf_pengajar'));
    }

    public function visimisi()
    {
        $visi_misi = VisiMisi::all();

        return view('admin.dashboard', compact('visi_misi'));
    }

    public function tujuans()
    {
        $tujuan = Tujuans::all();

        return view('admin.dashboard', compact('tujuan'));
    }

    public function tentang()
    {
        $tentang = Tentang::all();

        return view('admin.dashboard', compact('tentang'));
    }
}
