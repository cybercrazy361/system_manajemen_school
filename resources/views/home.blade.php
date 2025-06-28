@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<section class="hero" id="beranda">
    <div class="hero-text">
        <h1>SMA DHARMA KARYA</h1>
        <h2>Sekolah Digital Masa Depan</h2>
        <p>Mencetak generasi unggul & adaptif dengan ekosistem teknologi, fasilitas modern, dan inovasi global.</p>
        <a href="#profil" class="cta-btn">Lihat Profil Sekolah</a>
    </div>
    <div class="hero-img">
        <img src="{{ asset('images/logo.png') }}" alt="Logo Sekolah">
    </div>
</section>

<section class="section" id="profil">
    <h2>Profil Sekolah</h2>
    <div class="profil-content">
        <img src="{{ asset('images/profil.jpg') }}" alt="Foto Sekolah" class="img-profil">
        <div>
            <p>
                <strong>SMA Dharma Karya</strong> adalah sekolah unggulan berbasis digital di Jakarta, berkomitmen membentuk generasi emas Indonesia dengan kurikulum masa depan, fasilitas modern, serta tenaga pendidik profesional.
            </p>
            <ul>
                <li>Pembelajaran digital & blended learning</li>
                <li>Laboratorium modern dan ruang kreatif</li>
                <li>Ekstrakurikuler prestasi dan karakter</li>
                <li>Lulusan siap kuliah & kerja</li>
            </ul>
        </div>
    </div>
</section>

<section class="section" id="prestasi">
    <h2>Prestasi Siswa</h2>
    <ul class="prestasi-list">
        <li><strong>Juara 1</strong> Lomba Sains Provinsi DKI Jakarta 2024</li>
        <li><strong>Medali Emas</strong> Olimpiade Matematika Nasional 2023</li>
        <li><strong>Finalis</strong> Start-Up Digital Pelajar Indonesia 2023</li>
        <li><strong>Champion</strong> Futsal Antar Sekolah se-Jabodetabek 2022</li>
    </ul>
</section>

<section class="section" id="testimoni">
    <h2>Testimoni Alumni</h2>
    <blockquote>
        <p>
            “SMA Dharma Karya membuat saya siap menghadapi dunia perkuliahan dan karir. Lingkungannya suportif, guru-gurunya keren!”<br>
            <span>- Rizky Putra, Mahasiswa UI</span>
        </p>
    </blockquote>
</section>

<section class="section" id="kontak">
    <h2>Kontak & Lokasi</h2>
    <div class="kontak-info">
        <p>
            <strong>Alamat:</strong> Jl. Contoh No. 123, Jakarta<br>
            <strong>Telepon:</strong> (021) 12345678<br>
            <strong>Email:</strong> info@pakarguru.online
        </p>
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253840.44078955264!2d106.66470101548515!3d-6.229728018049864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1df2eaaea4b%3A0x728c0062b8f5700!2sJakarta!5e0!3m2!1sen!2sid!4v1689520000000!5m2!1sen!2sid"
            width="300"
            height="150"
            style="border:0; border-radius:12px"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
    </div>
</section>
@endsection
