<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    public function index()
	{
    	// mengambil data dari table keranjangbelanja
		$keranjangbelanja = DB::table('keranjangbelanja')->get(); //buat non paginate

    	// mengirim data pegawai ke view index
        return view('indexbelanja',['keranjangbelanja' => $keranjangbelanja]);
	}

    public function beli()
	{
		// memanggil view beli
		return view('beli');
	}

    // method untuk insert data ke table keranjang belanja
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('keranjangbelanja')->insert([
			'KodeBarang' => $request->KodeBarang,
			'Jumlah' => $request->Jumlah,
			'Harga' => $request->Harga,
		]);
		// alihkan halaman ke halaman keranjangbelanja
		return redirect('/keranjangbelanja');
	}

    // method untuk hapus data
	public function batal($ID)
	{
		// menghapus data berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('id',$ID)->delete();

		// alihkan halaman ke halaman keranjang belanja
		return redirect('/keranjangbelanja');
	}
}
