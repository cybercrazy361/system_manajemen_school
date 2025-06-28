@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<section class="banner" id="beranda">
    <video autoplay muted loop class="banner-video">
        <source src="{{ asset('videos/banner-video.mp4') }}" type="video/mp4" />
        Browser kamu tidak mendukung video.
    </video>
    <div class="banner-overlay">
        <h1>Selamat Datang di SMA Dharma Karya</h1>
        <p>Sekolah Digital Masa Depan, Mencetak Generasi Unggul & Adaptif.</p>
        <a href="#profil" class="btn-primary">Lihat Profil Sekolah</a>
    </div>
</section>

<section id="profil" class="section">
    <h2>Profil Sekolah</h2>
    <p>SMA Dharma Karya adalah sekolah unggulan berbasis digital di Jakarta, berkomitmen membentuk generasi emas Indonesia dengan fasilitas modern dan tenaga pendidik profesional.</p>
</section>

<section id="prestasi" class="section">
    <h2>Prestasi Siswa</h2>
    <div class="slider prestasi-slider">
        <div class="slide">Juara 1 Lomba Sains Provinsi DKI Jakarta 2024</div>
        <div class="slide">Medali Emas Olimpiade Matematika Nasional 2023</div>
        <div class="slide">Finalis Start-Up Digital Pelajar Indonesia 2023</div>
        <div class="slide">Champion Futsal Antar Sekolah se-Jabodetabek 2022</div>
    </div>
</section>

<section id="testimoni" class="section">
    <h2>Testimoni Alumni</h2>
    <div class="slider testimoni-slider">
        <div class="slide">
            “SMA Dharma Karya membuat saya siap menghadapi dunia perkuliahan dan karir. Lingkungannya suportif, guru-gurunya keren!”<br>
            <strong>- Rizky Putra, Mahasiswa UI</strong>
        </div>
        <div class="slide">
            “Lingkungan belajar modern dan teknologi canggih sangat membantu saya berkembang.”<br>
            <strong>- Sari, Alumni ITB</strong>
        </div>
    </div>
</section>

<section id="kontak" class="section">
    <h2>Kontak & Lokasi</h2>
    <p>
        <strong>Alamat:</strong> Jl. Contoh No. 123, Jakarta<br>
        <strong>Telepon:</strong> (021) 12345678<br>
        <strong>Email:</strong> info@pakarguru.online
    </p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253840.44078955264!2d106.66470101548515!3d-6.229728018049864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1df2eaaea4b%3A0x728c0062b8f5700!2sJakarta!5e0!3m2!1sen!2sid!4v1689520000000!5m2!1sen!2sid" width="100%" height="300" style="border-radius:12px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
@endsection
