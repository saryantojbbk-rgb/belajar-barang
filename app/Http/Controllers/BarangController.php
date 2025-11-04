<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index()
    {
        $barang = DB::table('barang')->get();
        return view('index', ['barang' => $barang]);
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function store(Request $request)
    {
        DB::table('barang')->insert([
            'nama_barang' => $request->nama_barang,
            'kategori' => $request->kategori,
            'stok' => $request->stok,
            'harga' => $request->harga
        ]);
        return redirect('/barang');
    }

    public function edit($id)
    {
        $barang = DB::table('barang')->where('barang_id', $id)->get();
        return view('edit', ['barang' => $barang]);
    }

    public function update(Request $request)
    {
        DB::table('barang')->where('barang_id', $request->id)->update([
            'nama_barang' => $request->nama_barang,
            'kategori' => $request->kategori,
            'stok' => $request->stok,
            'harga' => $request->harga
        ]);
        return redirect('/barang');
    }

    public function hapus($id)
    {
        DB::table('barang')->where('barang_id', $id)->delete();
        return redirect('/barang');
    }
}
