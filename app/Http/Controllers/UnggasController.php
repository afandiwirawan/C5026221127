<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UnggasController extends Controller{
    public function index()
	{
        $unggas = DB::table('unggas')->paginate(15);
		return view('indexunggas',['unggas' => $unggas]);
	}

    public function tambah()
	{

		// memanggil view tambah
		return view('tambahunggas');

	}


	public function store(Request $request)
	{
		DB::table('unggas')->insert([
            'kodeunggas' => $request->kodeunggas,
			'namaunggas' => $request->namaunggas,
			'jumlahunggas' => $request->jumlahunggas,
			'tersedia' => $request->tersedia
		]);

		return redirect('/unggas');
	}

    public function cari(Request $request)
	{
		$cari = $request->cari;
		$unggas = DB::table('unggas')
		->where('namaunggas','like',"%".$cari."%")
		->paginate();
		return view('indexunggas',['unggas' => $unggas , 'cari' => $cari]);
	}

    public function view($kodeunggas)
	{
		$unggas = DB::table('unggas')->where('kodeunggas',$kodeunggas)->get();
		return view('viewunggas',['unggas' => $unggas]);
	}

	public function edit($kodeunggas)
	{
		$unggas = DB::table('unggas')->where('kodeunggas',$kodeunggas)->get();
		return view('editunggas',['unggas' => $unggas]);

	}

	public function update(Request $request)
	{
		DB::table('unggas')->where('kodeunggas',$request->kodeunggas)->update([
			'namaunggas' => $request->namaunggas,
			'jumlahunggas' => $request->jumlahunggas,
			'tersedia' => $request->tersedia
		]);

		return redirect('/unggas');
	}

    public function hapus($kodeunggas)
	{
		DB::table('unggas')->where('kodeunggas',$kodeunggas)->delete();

		return redirect('/unggas');
	}
}
