@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Category Details</div>

                <div class="card-body">
                    <div class="mb-3">
                        <strong>ID:</strong> {{ $category->id }}
                    </div>
                    <div class="mb-3">
                        <strong>Name:</strong> {{ $category->nama_kategori }}
                    </div>
                    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection