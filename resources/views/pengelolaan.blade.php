@extends('layouts.app')

@section('title', 'Pengelolaan Buku - Perpustakaan Mini')

@section('content')
<div class="hero-section">
    <div class="container">
        <h1>Pengelolaan Buku</h1>
        <p class="lead">Kelola koleksi buku perpustakaan</p>
    </div>
</div>

<div class="container mb-5">
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Daftar Buku</h5>
            <span class="badge bg-primary">Total: {{ count($books) }} Buku</span>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Judul Buku</th>
                            <th>Penulis</th>
                            <th>Tahun</th>
                            <th>Kategori</th>
                            <th>Stok</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><strong>{{ $book['title'] }}</strong></td>
                            <td>{{ $book['author'] }}</td>
                            <td>{{ $book['year'] }}</td>
                            <td>
                                <span class="badge bg-info">{{ $book['category'] }}</span>
                            </td>
                            <td>{{ $book['stock'] }}</td>
                            <td>
                                @if($book['stock'] > 10)
                                    <span class="badge bg-success">Tersedia</span>
                                @elseif($book['stock'] > 5)
                                    <span class="badge bg-warning">Terbatas</span>
                                @else
                                    <span class="badge bg-danger">Hampir Habis</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
