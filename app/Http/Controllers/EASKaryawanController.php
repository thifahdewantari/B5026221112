<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EASKaryawanController extends Controller
{
    public function index()
	{
    	// mengambil data dari table karyawan
		$karyawan = DB::table('karyawan')->get(); //buat non paginate

    	// mengirim data hewan ke view index
        return view('easindexkaryawan',['karyawan' => $karyawan]);
	}

    public function eastambahkaryawan()
	{
		// memanggil view tambah
		return view('eastambahkaryawan');
	}

    // method untuk insert data ke table karyawan
	public function store(Request $request)
    {
        // Cek kalau kode pegawai sudah digunakan atau belum
        $existingKaryawan = DB::table('karyawan')->where('kodepegawai', $request->kodepegawai)->first();

        // Kode pegawai sudah digunakan
        if ($existingKaryawan) {
            return redirect('/easkaryawan/eastambahkaryawan')->with('error', 'Kode Pegawai sudah ada di tabel.');
        }

        // Insert data ke tabel karyawan
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen,
        ]);

        return redirect('/easkaryawan')->with('success', 'Data Karyawan berhasil disimpan.');
    }


    // method untuk hapus data
	public function eashapuskaryawan($kodepegawai)
	{
		// menghapus data berdasarkan id yang dipilih
		DB::table('karyawan')->where('kodepegawai',$kodepegawai)->delete();

		// alihkan halaman ke halaman karyawan
		return redirect('/easkaryawan');
	}
}
