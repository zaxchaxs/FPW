@extends('layouts.app')

@section('content')
    <h1>Welcome to Edit Buku page</h1>
    <form action="/update-buku/{{$buku->id}}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="">Judul</label>
            <input type="text" name="judul" value="{{$buku->judul}}" required>
        </div>
        <div>
            <label for="">Pengarang</label>
            <input type="text" name="pengarang" value="{{$buku->pengarang}}" required>
        </div>
        <div>
            <label for="">Penerbit</label>
            <input type="text" name="penerbit" value="{{$buku->penerbit}}" required>
        </div>
        <div>
            <label for="">Kategori Buku</label>
            <select name="kategori_buku_id" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach($kategoriBuku as $kategori)
                    <option value="{{ $kategori->id }}" 
                        {{ $buku->kategori_buku_id == $kategori->id ? 'selected' : '' }}>
                        {{ $kategori->nama_kategori }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit">Ubah</button>
        </div>
    </form>
@endsection