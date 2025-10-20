@extends('layouts.app')

@section('title', 'Profile - Perpustakaan Mini')

@section('content')
<div class="hero-section">
    <div class="container">
        <h1><i class="bi bi-person-circle"></i> Profile</h1>
        <p class="lead">Informasi akun {{ $username }}</p>
    </div>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <i class="bi bi-person-circle" style="font-size: 6rem; color: #000000;"></i>
                    </div>
                    <h4 class="card-title">{{ $username }}</h4>
                    <p class="text-muted">Member Perpustakaan</p>
                    <span class="badge bg-success mb-3">Aktif</span>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white">
                    <h5 class="mb-0"><i class="bi bi-info-circle"></i> Informasi Pribadi</h5>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-4"><strong>Username:</strong></div>
                        <div class="col-md-8">{{ $username }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4"><strong>Email:</strong></div>
                        <div class="col-md-8">{{ strtolower($username) }}@library.unej.ac.id</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4"><strong>No. Anggota:</strong></div>
                        <div class="col-md-8">LIB-{{ rand(1000, 9999) }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4"><strong>Tanggal Bergabung:</strong></div>
                        <div class="col-md-8">{{ date('d F Y') }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><strong>Status:</strong></div>
                        <div class="col-md-8"><span class="badge bg-success">Member Aktif</span></div>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white">
                    <h5 class="mb-0"><i class="bi bi-bar-chart"></i> Statistik Peminjaman</h5>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-md-4 mb-3">
                            <div class="p-3 bg-light rounded">
                                <h3 class="text-primary mb-0">10</h3>
                                <p class="text-muted mb-0">Buku Dipinjam</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="p-3 bg-light rounded">
                                <h3 class="text-success mb-0">8</h3>
                                <p class="text-muted mb-0">Dikembalikan</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="p-3 bg-light rounded">
                                <h3 class="text-warning mb-0">2</h3>
                                <p class="text-muted mb-0">Sedang Dipinjam</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm mt-4">
                <div class="card-header bg-white">
                    <h5 class="mb-0"><i class="bi bi-clock-history"></i> Riwayat Peminjaman Terakhir</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <strong>Pemrograman Berbasis Web</strong>
                                <br>
                                <small class="text-muted">Dipinjam: 20 Oktober 2025</small>
                            </div>
                            <span class="badge bg-warning">Dipinjam</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <strong>Pemrograman SQL</strong>
                                <br>
                                <small class="text-muted">Dipinjam: 20 Oktober 2025</small>
                            </div>
                            <span class="badge bg-warning">Dipinjam</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <strong>Teori Graf</strong>
                                <br>
                                <small class="text-muted">Dikembalikan: 19 Oktober 2025</small>
                            </div>
                            <span class="badge bg-success">Dikembalikan</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
