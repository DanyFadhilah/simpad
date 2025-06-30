<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman dashboard umum.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard'); // Bisa disesuaikan jika ada dashboard umum
    }

    /**
     * Menampilkan halaman admin dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function adminDashboard()
    {
        $taxData = [
            [
                'jenisPajak' => 'PBJT atas Jasa Perhotelan',
                'targetAnggaran' => 151629301000,
                'realisasi' => 127693708700,
                'img' => '/assets/img/hotel.png',
                'tahunLalu' => 144332162687,
            ],
            [
                'jenisPajak' => 'PBJT atas Makanan dan / atau Minuman',
                'targetAnggaran' => 360633732000,
                'realisasi' => 306739990533,
                'img' => '/assets/img/makan.png',
                'tahunLalu' => 312508124736,
            ],
            [
                'jenisPajak' => 'PBJT atas Jasa Kesenian dan Hiburan',
                'targetAnggaran' => 80646989000,
                'realisasi' => 75097658180,
                'img' => '/assets/img/seni.png',
                'tahunLalu' => 78309550432,
            ],
            [
                'jenisPajak' => 'Pajak Reklame',
                'targetAnggaran' => 28415110000,
                'realisasi' => 25404910752,
                'img' => '/assets/img/reklame.png',
                'tahunLalu' => 26565469856,
            ],
            [
                'jenisPajak' => 'PBJT atas Tenaga Listrik',
                'targetAnggaran' => 376582300000,
                'realisasi' => 144967881912,
                'img' => '/assets/img/listrik.png',
                'tahunLalu' => 144881930911,
            ],
            [
                'jenisPajak' => 'PBJT atas Jasa Parkir',
                'targetAnggaran' => 8333241000,
                'realisasi' => 10104254909,
                'img' => '/assets/img/parkir.png',
                'tahunLalu' => 19210050276,
            ],
            [
                'jenisPajak' => 'PBJT Air Tanah',
                'targetAnggaran' => 72440860000,
                'realisasi' => 50235343031,
                'img' => '/assets/img/air.png',
                'tahunLalu' => 69704094539,
            ],
            [
                'jenisPajak' => 'PBJT Mineral Bukan Logam Dan Batuan',
                'targetAnggaran' => 122040128000,
                'realisasi' => 99404593678,
                'img' => '/assets/img/mineral.png',
                'tahunLalu' => 124214026545,
            ],
            [
                'jenisPajak' => 'PBB',
                'targetAnggaran' => 640586111000,
                'realisasi' => 640070905760,
                'img' => '/assets/img/pbb.png',
                'tahunLalu' => 610390232793,
            ],
            [
                'jenisPajak' => 'BPHTB',
                'targetAnggaran' => 990227628000,
                'realisasi' => 771402638619,
                'img' => '/assets/img/bphtb.png',
                'tahunLalu' => 610390232793,
            ],
        ];

        return view('admin.dashboard.index', compact('taxData'));
    }

    /**
     * Menampilkan halaman user dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function userDashboard()
    {
        return view('user.dashboard.index'); // Sesuaikan lokasi file view untuk user dashboard
    }
}
