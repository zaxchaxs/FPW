@extends('layouts.app')

@section('content')
    <h1>Welcome to Tambah Buku page</h1>
    <form action="/simpan-buku" method="post">
        @csrf
        <div>
            <label for="">Judul</label>
            <input type="text" name="judul" required>
        </div>
        <div>
            <label for="">Pengarang</label>
            <input type="text" name="pengarang" required>
        </div>
        <div>
            <label for="">Penerbit</label>
            <input type="text" name="penerbit" required>
        </div>
        <div>
            <label for="">Kategori Buku</label>
            <select name="kategori_buku_id" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach($kategoriBuku as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
@endsection