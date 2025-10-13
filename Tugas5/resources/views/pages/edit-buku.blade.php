@extends('app')

@section('content')
    <h1>Welcome to Edit Buku page</h1>
    <form action="/update-buku/{{$buku->id}}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="">Judul</label>
            <input type="text" name="judul" value="{{$buku->judul}}">
        </div>
        <div>
            <label for="">Pengarang</label>
            <input type="text" name="pengarang" value="{{$buku->pengarang}}">
        </div>
        <div>
            <label for="">Penerbit</label>
            <input type="text" name="penerbit" value="{{$buku->penerbit}}">
        </div>
        <div>
            <button type="submit">Ubah</button>
        </div>
    </form>
@endsection