<footer class="bg-dark text-white mt-auto py-4">
    <div class="container">
        <div class="row align-items-start">
            <!-- Kolom 1: Logo + Deskripsi -->
            <div class="col-md-6 mb-3 mb-md-0 d-flex">
                <img src="{{ asset('images/unej.png') }}"
                     alt="Logo"
                     width="40"
                     height="40"
                     class="rounded-circle me-3 mt-1">
                <div>
                    <h5 class="mb-1">Perpustakaan Universitas Jember</h5>
                    <p class="mb-0 small text-light opacity-75">
                        Merupakan Unit Pendukung Akademis (UPA) yang bersama-sama dengan unit lain melaksanakan Tri Dharma Perguruan Tinggi (PT) melalui menghimpun, memilih, mengolah, merawat serta melayankan sumber informasi kepada civitas akademika Universitas Jember khususnya dan masyarakat akademis pada umumnya.
                    </p>
                </div>
            </div>

            <!-- Kolom 2: Kontak (pojok kanan) -->
            <div class="col-md-6 text-md-end">
                <h5 class="mb-3">Kontak</h5>
                <ul class="list-unstyled mb-2">
                    <li><i class="bi bi-geo-alt"></i> Jalan Kalimantan No. 37 - Kampus Bumi Tegalboto Jember</li>
                    <li><i class="bi bi-telephone"></i> (0331) 123-4567</li>
                    <li><i class="bi bi-envelope"></i> perpustakaan@unej.ac.id</li>
                </ul>
                <div>
                    <a href="https://www.facebook.com/library.unej.ac.id/?locale=id_ID" class="text-white me-3"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.youtube.com/channel/UCSNgTBuSc07a73cICVcrc2A" class="text-white me-3"><i class="bi bi-youtube"></i></a>
                    <a href="https://www.instagram.com/perpustakaan.unej/" class="text-white"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>

        <!-- Garis Pemisah dan Hak Cipta -->
        <hr class="bg-white my-4">
        <div class="text-center">
            <p class="mb-0 small">
                &copy; {{ date('Y') }} Perpustakaan Universitas Jember. All Rights Reserved.
            </p>
        </div>
    </div>
</footer>
