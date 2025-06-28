@extends('layouts.app')

@section('title', 'Beranda | SMA Dharma Karya')

@section('content')
    <section class="hero-section" id="beranda">
        <canvas id="hero-bg"></canvas>
        <div class="hero-flex">
            <div class="hero-content">
                <h1><span>SMA DHARMA KARYA</span><br>Mengukir Masa Depan Digital</h1>
                <p>Sekolah dengan ekosistem digital & teknologi masa depan, membentuk generasi emas Indonesia.</p>
                <a href="#profil" class="cta-btn-glow">Lihat Profil Sekolah</a>
            </div>
            <img class="hero-svg" src="{{ asset('public/images/hero-education.svg') }}" alt="Digital Illustration">
        </div>
    </section>

    <section class="section" id="profil">
        <h2>Profil Sekolah</h2>
        <div class="section-content">
            <img src="https://images.unsplash.com/photo-1513258496099-48168024aec0?auto=format&fit=crop&w=600&q=80" alt="Gedung Sekolah" class="profil-img">
            <div>
                <p>
                    <b>SMA Dharma Karya</b> adalah sekolah menengah atas modern, berkomitmen mencetak generasi unggul dengan penguatan karakter, pengetahuan, dan teknologi.
                </p>
                <ul>
                    <li>Fasilitas modern & lengkap</li>
                    <li>Ekstrakurikuler digital & inovasi</li>
                    <li>Pembelajaran berbasis teknologi & project</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section" id="prestasi">
        <h2>Prestasi Siswa</h2>
        <div class="prestasi-grid">
            <div class="prestasi-card">
                <h3>Juara 1 Olimpiade Sains</h3>
                <p>Meraih OSN tingkat nasional 2024.</p>
            </div>
            <div class="prestasi-card">
                <h3>Tim Futsal Terbaik</h3>
                <p>Juara 1 Kejuaraan Futsal se-Jabodetabek.</p>
            </div>
            <div class="prestasi-card">
                <h3>Inovasi Digital</h3>
                <p>Aplikasi edukasi pemenang startup pelajar.</p>
            </div>
        </div>
    </section>

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
