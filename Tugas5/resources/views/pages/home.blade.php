@extends('layouts.app')

@section('content')
    <div>
        @if ($errors->any())
            <div style="color: red;">
                {{ $errors->first() }}
            </div>
        @else
            <div style="color: green;">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <h1>Welcome to Home page</h1>
@endsection
