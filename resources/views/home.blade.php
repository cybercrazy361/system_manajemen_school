@extends('layouts.app')

@section('title', 'Beranda | SMA Dharma Karya')

@section('content')
    <section class="hero-section" id="beranda">
        <canvas id="hero-bg"></canvas>
        <div class="hero-flex">
            <div class="hero-content wow-fadein">
                <h1>
                    <span>SMA DHARMA KARYA</span><br>
                    <span class="hero-highlight">Sekolah Digital<br> Masa Depan</span>
                </h1>
                <p>Mencetak generasi unggul & adaptif<br>dengan kurikulum digital, fasilitas modern, dan semangat inovasi global.</p>
                <a href="#profil" class="cta-btn-glow">Lihat Profil Sekolah</a>
            </div>
            <img class="hero-svg wow-fadein-up" src="{{ asset('public/images/hero-education.svg') }}" alt="Digital Illustration">
        </div>
    </section>

    <section class="section wow-fadein-up" id="profil">
        <h2>Profil Sekolah</h2>
        <div class="section-content">
            <img src="https://images.unsplash.com/photo-1513258496099-48168024aec0?auto=format&fit=crop&w=600&q=80" alt="Gedung Sekolah" class="profil-img">
            <div>
                <p>
                    <b>SMA Dharma Karya</b> adalah sekolah menengah atas modern dengan lingkungan digital, pembelajaran project-based, dan penguatan karakter.
                </p>
                <ul>
                    <li>Fasilitas kelas digital, laboratorium, & WiFi</li>
                    <li>Ekstrakurikuler teknologi & inovasi</li>
                    <li>Kegiatan internasional & pertukaran pelajar</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section wow-fadein" id="prestasi">
        <h2>Prestasi & Fasilitas Unggulan</h2>
        <div class="prestasi-grid">
            <div class="prestasi-card">
                <h3>Juara 1 Olimpiade Sains</h3>
                <p>OSN Nasional 2024 (Fisika & Matematika)</p>
            </div>
            <div class="prestasi-card">
                <h3>Startup Digital Pelajar</h3>
                <p>Aplikasi edukasi juara 1 tingkat Jabodetabek</p>
            </div>
            <div class="prestasi-card">
                <h3>Laboratorium Smart</h3>
                <p>Lab digital & ruang kelas interaktif terintegrasi</p>
            </div>
            <div class="prestasi-card">
                <h3>Beasiswa Luar Negeri</h3>
                <p>Luluskan siswa ke perguruan tinggi internasional</p>
            </div>
        </div>
    </section>

    <section class="section wow-fadein-up" id="testimoni">
        <h2>Apa Kata Alumni?</h2>
        <div class="testimoni-grid">
            <div class="testimoni-card">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="alumni">
                <div>
                    <b>Rizky Ananda</b> <span class="testimoni-jurusan">Alumni 2023, ITB</span>
                    <p>“Lingkungan sekolah sangat mendukung minat saya di teknologi dan inovasi. SMA Dharma Karya bukan sekedar sekolah, tapi keluarga digital!”</p>
                </div>
            </div>
            <div class="testimoni-card">
                <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="alumni">
                <div>
                    <b>Salma Widya</b> <span class="testimoni-jurusan">Alumni 2022, Beasiswa Jepang</span>
                    <p>“Fasilitas digital dan program internasionalnya benar-benar membuka wawasan. Bangga pernah sekolah di sini!”</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section wow-fadein" id="kontak">
        <h2>Kontak</h2>
        <form class="kontak-form">
            <input type="text" placeholder="Nama" required>
            <input type="email" placeholder="Email" required>
            <textarea placeholder="Pesan Anda" required></textarea>
            <button type="submit">Kirim Pesan</button>
        </form>
    </section>
@endsection
