<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        $pegawai = DB::table('pegawai')->paginate(10);

        // mengirim data pegawai ke view index
        return view('index', ['pegawai' => $pegawai]);
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table pegawai sesuai pencarian data
        $pegawai = DB::table('pegawai')
            ->where('pegawai_nama', 'like', "%" . $cari . "%")
            ->paginate(10); // paginasi dengan 10 item per halaman

        // mengirim data pegawai ke view index
        return view('index', ['pegawai' => $pegawai]);
    }
}
