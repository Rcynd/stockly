<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
class ProdukController extends Controller
{
    public function index(){
        return view('admin.produk.index',[
            'produks' => Produk::latest()->filter(request(['search']))->paginate(6)->withQueryString(),
        ]);
    }

    public function tambah(){
        return view('admin.produk.tambah');
    }
    public function store(Request $request){
        $validateData = $request->validate([
            'name_produk' => 'required',
            'harga' => 'required',
            'stock' => 'required',
            'status' => 'required',
            'image' => 'image|file|max:20000 ',
        ]);
        $validateData['tgl_pengaduan'] = now();

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('produk-images');
        }

        Produk::create($validateData);

        return redirect('/produk-adm')->with('sukses', 'Produk berhasil ditambahkan');

    }
}
