@extends('layouts.app')
@section('title', 'Beranda')

@section('content')

<!-- HERO -->
<section class="hero" id="beranda">
    <div class="hero-content">
        <h1>Selamat Datang di <span>SMA Dharma Karya</span></h1>
        <p>Mencetak Generasi Unggul di Era Digital</p>
        <a href="#profil" class="cta-btn">Pelajari Lebih Lanjut</a>
    </div>
    <div class="hero-overlay"></div>
</section>

<!-- PROFIL -->
<section class="section profil" id="profil">
    <div class="container">
        <h2>Profil Sekolah</h2>
        <p>
            SMA Dharma Karya adalah sekolah modern dengan kurikulum berbasis teknologi, mencetak generasi unggul dan berkarakter di era digital.
        </p>
    </div>
</section>

<!-- GALERI -->
<section class="section galeri" id="galeri">
    <div class="container">
        <h2>Galeri Sekolah</h2>
        <div class="gallery-grid">
            <img src="{{ asset('images/gallery1.jpg') }}" alt="Kegiatan 1">
            <img src="{{ asset('images/gallery2.jpg') }}" alt="Kegiatan 2">
            <img src="{{ asset('images/gallery3.jpg') }}" alt="Kegiatan 3">
        </div>
    </div>
</section>

<!-- KONTAK -->
<section class="section kontak" id="kontak">
    <div class="container">
        <h2>Hubungi Kami</h2>
        <ul class="contact-list">
            <li><strong>Alamat:</strong> Jl. Pendidikan No.123, Jakarta</li>
            <li><strong>Telepon:</strong> (021) 1234 5678</li>
            <li><strong>Email:</strong> info@smadharmakarya.sch.id</li>
        </ul>
    </div>
</section>
@endsection
