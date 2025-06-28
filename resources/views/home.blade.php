@extends('layouts.app')

@section('title', 'Beranda | SMA Dharma Karya')

@section('content')
    <!-- Animated Particle Background -->
    <canvas id="hero-bg"></canvas>

    <!-- Hero Section -->
    <section class="hero-section" id="beranda">
        <div class="hero-content">
            <h1>Selamat Datang di <span>SMA DHARMA KARYA</span></h1>
            <p>Mencetak Generasi Unggul di Era Digital dengan Kurikulum Masa Depan.</p>
            <a href="#profil" class="cta-btn">Lihat Profil Sekolah</a>
        </div>
    </section>

    <!-- Profil Section -->
    <section class="section" id="profil">
        <h2>Profil Sekolah</h2>
        <div class="section-content">
            <img src="https://images.unsplash.com/photo-1513258496099-48168024aec0?auto=format&fit=crop&w=600&q=80" alt="Gedung Sekolah" class="profil-img">
            <div>
                <p>
                    SMA Dharma Karya adalah sekolah menengah atas yang berkomitmen untuk mencetak generasi unggul dengan penekanan pada karakter, pengetahuan, dan penguasaan teknologi digital.
                </p>
                <ul>
                    <li>Fasilitas modern & lengkap</li>
                    <li>Ekstrakurikuler beragam</li>
                    <li>Pembelajaran berbasis digital</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Prestasi Section -->
    <section class="section" id="prestasi">
        <h2>Prestasi Siswa</h2>
        <div class="prestasi-grid">
            <div class="prestasi-card">
                <h3>Juara 1 Olimpiade Sains</h3>
                <p>Siswa SMA Dharma Karya menjuarai OSN tingkat nasional 2024.</p>
            </div>
            <div class="prestasi-card">
                <h3>Tim Futsal Terbaik</h3>
                <p>Meraih peringkat pertama di Kejuaraan Futsal se-Jabodetabek.</p>
            </div>
            <div class="prestasi-card">
                <h3>Inovasi Digital</h3>
                <p>Membuat aplikasi edukasi digital pemenang lomba startup pelajar.</p>
            </div>
        </div>
    </section>

    <!-- Kontak Section -->
    <section class="section" id="kontak">
        <h2>Kontak</h2>
        <form class="kontak-form">
            <input type="text" placeholder="Nama" required>
            <input type="email" placeholder="Email" required>
            <textarea placeholder="Pesan Anda" required></textarea>
            <button type="submit">Kirim Pesan</button>
        </form>
    </section>
@endsection
