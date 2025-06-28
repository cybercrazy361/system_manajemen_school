@extends('layouts.app')

@section('title', 'Beranda | SMA DHARMA KARYA')

@section('content')
    <!-- Animated Particle Background -->
    <canvas id="hero-bg"></canvas>

    <!-- Banner -->
    <section class="banner-section" id="beranda">
        <img class="banner-img" src="{{ asset('images/banner-brosur.png') }}" alt="Banner SMA DHARMA KARYA" />
        <div class="hero-content">
            <h1>Selamat Datang di <span>SMA DHARMA KARYA</span></h1>
            <p>Mencetak Generasi Unggul di Era Digital dengan Kurikulum Masa Depan.</p>
            <a href="#daftar" class="cta-btn">Daftar Sekarang</a>
        </div>
    </section>

    <!-- Profil -->
    <section class="section" id="profil">
        <h2>Profil Sekolah</h2>
        <div class="content-flex">
            <img src="https://images.unsplash.com/photo-1513258496099-48168024aec0?auto=format&fit=crop&w=400&q=80" alt="Gedung Sekolah" />
            <div>
                <p><b>SMA DHARMA KARYA</b> adalah sekolah modern berbasis teknologi, menyiapkan siswa untuk menghadapi era global dengan pembelajaran berbasis digital dan karakter mulia.</p>
                <ul>
                    <li><i class="fa-solid fa-award"></i> Akreditasi A Nasional</li>
                    <li><i class="fa-solid fa-globe"></i> Kurikulum Merdeka & Kolaborasi Industri</li>
                    <li><i class="fa-solid fa-user-graduate"></i> Guru Profesional & Kompeten</li>
                    <li><i class="fa-solid fa-lightbulb"></i> Pembinaan Karakter & Soft Skill</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Sarana & Prasarana -->
    <section class="section bg-light" id="sarana">
        <h2>Sarana & Prasarana</h2>
        <div class="fasilitas-grid">
            <div class="card"><i class="fa-solid fa-desktop"></i><h3>Lab Komputer Multimedia</h3><p>Perangkat terbaru untuk pembelajaran IT, multimedia, desain grafis, dan coding.</p></div>
            <div class="card"><i class="fa-solid fa-book-open"></i><h3>Perpustakaan Digital</h3><p>Akses ribuan koleksi buku fisik dan e-book yang terus diperbarui.</p></div>
            <div class="card"><i class="fa-solid fa-flask-vial"></i><h3>Lab Sains Terpadu</h3><p>Laboratorium Biologi, Fisika, Kimia lengkap dan modern.</p></div>
            <div class="card"><i class="fa-solid fa-basketball"></i><h3>Sport Center</h3><p>Lapangan basket, futsal, voli, ruang fitness, dan area olahraga lainnya.</p></div>
            <div class="card"><i class="fa-solid fa-wifi"></i><h3>Free WiFi</h3><p>Internet cepat di seluruh area sekolah untuk menunjang belajar digital.</p></div>
            <div class="card"><i class="fa-solid fa-bus"></i><h3>Transportasi Sekolah</h3><p>Bus antar jemput siswa yang nyaman dan aman.</p></div>
            <div class="card"><i class="fa-solid fa-couch"></i><h3>Ruang Kelas Nyaman</h3><p>AC, proyektor, serta seating ergonomis di setiap kelas.</p></div>
            <div class="card"><i class="fa-solid fa-shield-halved"></i><h3>Keamanan 24 Jam</h3><p>Area sekolah aman dengan CCTV dan petugas security.</p></div>
        </div>
    </section>

    <!-- Galeri -->
    <section class="section" id="galeri">
        <h2>Galeri Kegiatan</h2>
        <div class="galeri-grid">
            <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=400&q=80" alt="Kegiatan 1" />
            <img src="https://images.unsplash.com/photo-1503676382389-4809596d5290?auto=format&fit=crop&w=400&q=80" alt="Kegiatan 2" />
            <img src="https://images.unsplash.com/photo-1465101178521-c1a9136a3a5c?auto=format&fit=crop&w=400&q=80" alt="Kegiatan 3" />
            <img src="https://images.unsplash.com/photo-1457369804613-52c61a468e7d?auto=format&fit=crop&w=400&q=80" alt="Kegiatan 4" />
        </div>
    </section>

    <!-- Maps -->
    <section class="section bg-light" id="maps">
        <h2>Lokasi Sekolah</h2>
        <div class="maps-container" style="display:flex;justify-content:center;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.125687616082!2d106.79753897499067!3d-6.247163593741248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f16ec22a85b5%3A0x45200deb76711ad1!2sSMA%2FSMK%20DHARMA%20KARYA%20UNIVERSAL!5e0!3m2!1sid!2sid!4v1719400490881!5m2!1sid!2sid" width="98%" height="380" style="border-radius:18px;border:0;box-shadow:0 4px 24px rgba(20,40,100,0.11);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <!-- Kontak -->
    <section class="section kontak-section" id="kontak">
        <h2>Kontak Kami</h2>
        <div class="kontak-flex">
            <form class="kontak-form">
                <input type="text" placeholder="Nama" required />
                <input type="email" placeholder="Email" required />
                <textarea placeholder="Pesan" rows="4" required></textarea>
                <button type="submit">Kirim Pesan</button>
            </form>
            <div class="kontak-info">
                <p><i class="fa-solid fa-map-marker-alt"></i> Jl. Pendidikan Digital No.1, Jakarta</p>
                <p><i class="fa-solid fa-phone"></i> 021-1234567</p>
                <p><i class="fa-solid fa-envelope"></i> info@smadharmakarya.sch.id</p>
                <div class="sosmed">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection
