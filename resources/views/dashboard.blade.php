@extends('layouts.app')

@section('title', 'Dashboard - Perpustakaan Mini')

@section('content')
<div class="hero-section">
    <div class="container">
        <h1></i> Dashboard</h1>
        <p class="lead">Selamat datang di Perpustakaan Universitas Jember, {{ $username }}!</p>
    </div>
</div>

<div class="container mb-5">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="bi bi-book" style="font-size: 3rem; color: #000000;"></i>
                    </div>
                    <h3 class="card-title">250+</h3>
                    <p class="text-muted">Total Buku</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="bi bi-people" style="font-size: 3rem; color: #000000;"></i>
                    </div>
                    <h3 class="card-title">150+</h3>
                    <p class="text-muted">Anggota Aktif</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="bi bi-arrow-repeat" style="font-size: 3rem; color: #000000;"></i>
                    </div>
                    <h3 class="card-title">50+</h3>
                    <p class="text-muted">Buku Dipinjam</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-lg-6 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <h5 class="mb-0"><i class="bi bi-star"></i> Buku Terpopuler</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Pemrograman Berbasis Web
                            <span class="badge bg-primary rounded-pill">40 peminjam</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Algoritma dan Pemrograman
                            <span class="badge bg-primary rounded-pill">25 peminjam</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Pemrograman SQL
                            <span class="badge bg-primary rounded-pill">30 peminjam</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <h5 class="mb-0"><i class="bi bi-info-circle"></i> Informasi</h5>
                </div>
                <div class="card-body">
                    <p><strong>Jam Operasional:</strong></p>
                    <p class="mb-2">Senin - Jumat: 07:00 - 16.00</p>
                    <p class="mb-3">Sabtu - Minggu: 08:00 - 15:00</p>

                    <p><strong>Kontak:</strong></p>
                    <p class="mb-2"><i class="bi bi-telephone"></i>  (+62) 331 333860</p>
                    <p class="mb-0"><i class="bi bi-envelope"></i> library@unej.ac.id</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
