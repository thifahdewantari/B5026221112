<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HewanController extends Controller
{
    public function index()
	{
    	// mengambil data dari table hewan
		$hewan = DB::table('hewan')->get(); //buat non paginate

    	// mengirim data hewan ke view index
        return view('indexhewan',['hewan' => $hewan]);
	}

    public function tambahhewan()
	{
		// memanggil view beli
		return view('tambahhewan');
	}

    // method untuk insert data ke table hewan
	public function store(Request $request)
	{
		// insert data ke table hewan
		DB::table('hewan')->insert([
			'namahewan' => $request->namahewan,
			'jumlahhewan' => $request->jumlahhewan,
			'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman hewan
		return redirect('/hewan');
	}

    public function viewhewan($kodehewan){
        //mengambil data hewan berdasarkan id yang dipilih
        $hewan = DB::table('hewan')->where('kodehewan',$kodehewan)->get();

        // passing data hewan yang didapat ke view edit.blade.php
		return view('viewhewan',['hewan' => $hewan]);
    }


	// method untuk edit data hewan
	public function edithewan($kodehewan)
	{
		// mengambil data hewan berdasarkan id yang dipilih
		$hewan = DB::table('hewan')->where('kodehewan',$kodehewan)->get();
		// passing data hewan yang didapat ke view edit.blade.php
		return view('edithewan',['hewan' => $hewan]);
	}

	// update data hewan
	public function update(Request $request)
	{
		// update data hewan
		DB::table('hewan')->where('kodehewan',$request->kodehewan)->update([
			'namahewan' => $request->namahewan,
			'jumlahhewan' => $request->jumlahhewan,
			'tersedia' => $request->tersedia,
		]);
		// alihkan halaman ke halaman hewan
		return redirect('/hewan');
	}

    // method untuk hapus data
	public function hapushewan($kodehewan)
	{
		// menghapus data berdasarkan id yang dipilih
		DB::table('hewan')->where('kodehewan',$kodehewan)->delete();

		// alihkan halaman ke halaman keranjang belanja
		return redirect('/hewan');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table hewan sesuai pencarian data
		$hewan = DB::table('hewan')
		->where('namahewan','like',"%".$cari."%")
        ->get();

    		// mengirim data hewan ke view index
		return view('indexhewan',['hewan' => $hewan, 'cari' => $cari]);
	}
}
