<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
	{
    	// mengambil data dari table karyawan
		$karyawan = DB::table('karyawan')->get(); //buat non paginate

    	// mengirim data hewan ke view index
        return view('indexkaryawan',['karyawan' => $karyawan]);
	}

    public function tambahkaryawan()
	{
		// memanggil view tambah
		return view('tambahkaryawan');
	}

    // method untuk insert data ke table karyawan
	public function store(Request $request)
	{
		// insert data ke table karyawan
		DB::table('karyawan')->insert([
			'kodepegawai' => $request->kodepegawai,
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
            'departemen' => $request->departemen,
		]);
		// alihkan halaman ke halaman karyawan
		return redirect('/karyawan');
	}

    // method untuk hapus data
	public function hapuskaryawan($kodepegawai)
	{
		// menghapus data berdasarkan id yang dipilih
		DB::table('karyawan')->where('kodepegawai',$kodepegawai)->delete();

		// alihkan halaman ke halaman karyawan
		return redirect('/karyawan');
	}
}
