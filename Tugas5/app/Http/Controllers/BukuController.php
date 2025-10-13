<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(){
        $data = Buku::all();
        return view('pages.buku', compact('data'));
    }

    public function create(){
        return view('pages.tambah-buku');
    }

    public function store(Request $request){
        $validasi = $request->validate([
            'judul' => 'required|string|max:255',
            'pengarang' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
        ]);

        Buku::create($validasi);
        return redirect('/buku');
    }

    public function edit($id) {
        $buku = Buku::find($id);
        return view('pages.edit-buku', compact('buku'));
    }

    public function update(Request $request, $id) {
        $validasi = $request->validate([
            'judul' => 'required|string|sometimes|max:255',
            'pengarang' => 'required|string|sometimes|max:255',
            'penerbit' => 'required|string|sometimes|max:255',
        ]);

        Buku::where('id', $id)->update($validasi);
        return redirect('/buku');
    }

    public function destroy($id) {
        Buku::destroy($id);
        return redirect('/buku');
    }
}
