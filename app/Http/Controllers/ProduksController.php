<?php

namespace App\Http\Controllers;

use App\Models\Produks;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProduksController extends Controller
{
    public function index()
    {
        $produks = Produks::all();
        return view('produks.index', compact(['produks']));
    }

    public function create()
    {
        return view('produks.create');
    }
    public function store(Request $request)
    {
        $produk = new Produks;
        $produk->nama_produk = $request->nama_produk;
        $produk->slug = Str::slug($produk->nama_produk, "-");
        $produk->deskripsi = $request->deskripsi;
        $produk->link_shopee = $request->link_shopee;
        $produk->link_tiktok = $request->link_tiktok;
        $produk->link_ig = $request->link_ig;
        $produk->link_tokopedia = $request->link_tokopedia;
        $produk->link_lazada = $request->link_lazada;
        $produk->link_blibli = $request->link_blibli;

        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('image/produks/', $request->file('gambar')->getClientOriginalName());
            $produk->gambar = $request->file('gambar')->getClientOriginalName();
        }

        $produk->save();

        return redirect()->route('manage_produks.index')->with('success', 'Produks telah berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $produks = Produks::find($id);
        return view('produks.edit', compact(['produks']));
    }
    public function update($id, Request $request)
    {
        $produks = Produks::find($id);
        $produks->update($request->except(['_token', 'submit']));
        return redirect('/produks');
    }
    public function destroy($id)
    {
        $produks = Produks::find($id);
        $produks->delete();
        return redirect('/produks');
    }
}
