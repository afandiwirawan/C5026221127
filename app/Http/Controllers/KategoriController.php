<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KategoriController extends Controller{
    public function index()
	{
        $kategori = DB::table('kategori')->get();
		return view('indexkategori',['kategori' => $kategori]);
	}

    public function view(Request $request)
    {
        $kategori = DB::table('kategori')->where('id',$request->pilihKategori)->get();
		return view('viewkategori',['kategori' => $kategori]);
    }

}
