@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<!-- Hero Section -->
<section class="hero" id="beranda">
    <div class="hero-content">
        <h1>Selamat Datang di <span>SMA Dharma Karya</span></h1>
        <p>Mencetak Generasi Unggul di Era Digital</p>
        <a href="#profil" class="cta-btn">Pelajari Lebih Lanjut</a>
    </div>
    <div class="overlay"></div>
</section>

<!-- Profil Section -->
<section class="section" id="profil">
    <h2>Profil Sekolah</h2>
    <p>SMA Dharma Karya berkomitmen menciptakan lingkungan belajar modern dengan kurikulum berbasis teknologi terkini.</p>
</section>

<!-- Galeri Section -->
<section class="section galeri" id="galeri">
    <h2>Galeri</h2>
    <div class="gallery-grid">
        <img src="{{ asset('images/gallery1.jpg') }}" alt="Gallery Image 1">
        <img src="{{ asset('images/gallery2.jpg') }}" alt="Gallery Image 2">
        <img src="{{ asset('images/gallery3.jpg') }}" alt="Gallery Image 3">
    </div>
</section>

<!-- Kontak Section -->
<section class="section kontak" id="kontak">
    <h2>Hubungi Kami</h2>
    <p>Alamat: Jl. Pendidikan No.123, Jakarta</p>
    <p>Telepon: (021) 1234 5678</p>
    <p>Email: info@smadharmakarya.sch.id</p>
</section>
@endsection
