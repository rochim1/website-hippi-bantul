@extends('layouts.app')
@section('content')
<section id="beranda" class="hero">
  <div class="hero-pattern"></div><div class="shell hero-grid">
    <div class="hero-copy reveal"><span class="eyebrow"><i class="ri-shake-hands-line"></i> Himpunan Pengusaha Pribumi Indonesia</span><h1>Bersama Memantapkan Daya Saing <em>UMKM Bantul</em></h1><p>HIPPI DPC Bantul menghubungkan pelaku usaha, pemerintah, dan mitra strategis untuk memperkuat jejaring, transformasi digital, legalitas, dan pemasaran produk lokal.</p>
      <div class="hero-actions"><a class="button primary" href="#program">Jelajahi Program <i class="ri-arrow-right-line"></i></a><a class="button secondary" href="#kolaborasi"><i class="ri-team-line"></i> Mari Berkolaborasi</a></div>
      <div class="hero-trust"><span><i class="ri-checkbox-circle-fill"></i> Jejaring usaha</span><span><i class="ri-checkbox-circle-fill"></i> Pendampingan UMKM</span><span><i class="ri-checkbox-circle-fill"></i> Akses pasar</span></div>
    </div>
    <div class="hero-visual reveal"><div class="hero-image"><img src="{{ asset('images/hippi-bantul-hero.png') }}" alt="Kolaborasi pelaku UMKM Bantul"></div><div class="floating-card"><i class="ri-line-chart-line"></i><span><small>Semangat kami</small><strong>Tumbuh Bersama</strong></span></div></div>
  </div>
</section>
<section class="stats"><div class="shell stats-grid"><article><strong>4</strong><span>Program Unggulan</span></article><article><strong>17</strong><span>Kecamatan di Bantul</span></article><article><strong>1976</strong><span>HIPPI Berdiri</span></article><article><strong>2025–2030</strong><span>Periode Kepengurusan</span></article></div></section>

<section id="tentang" class="section about"><div class="shell about-grid">
  <div class="section-intro reveal"><span class="eyebrow blue">Tentang Kami</span><h2>Menghubungkan potensi,<br><em>membuka peluang.</em></h2><p>HIPPI adalah organisasi profesi ekonomi yang menjadi wadah informasi, konsultasi, dan advokasi bagi pengusaha pribumi. Di Bantul, semangat itu diwujudkan melalui kolaborasi pemasaran, pendidikan transformasi digital, dan penguatan legalitas usaha.</p><a class="text-link" href="#program">Kenali gerakan kami <i class="ri-arrow-right-line"></i></a></div>
  <div class="vision-card reveal"><span class="card-icon"><i class="ri-eye-line"></i></span><small>VISI KAMI</small><h3>Menjadi wadah kolaborasi pengusaha pribumi dan UMKM Bantul yang profesional, adaptif, legal, dan berdaya saing.</h3><div class="vision-points"><span><i class="ri-links-line"></i> Kolaboratif</span><span><i class="ri-lightbulb-flash-line"></i> Adaptif</span><span><i class="ri-shield-check-line"></i> Profesional</span></div></div>
</div></section>

<section id="program" class="section programs"><div class="shell">
  <div class="section-head reveal"><div><span class="eyebrow light">BUMO HIPPI DPC Bantul</span><h2>Empat program untuk UMKM <em>naik kelas.</em></h2></div><p>Program terpadu yang menyentuh kemampuan digital, pengembangan kapasitas, perluasan pasar, dan integrasi potensi wisata.</p></div>
  <div class="program-grid">
    <article class="program-card reveal"><span class="program-no">01</span><i class="ri-computer-line"></i><h3>HIPPI Remote Worker Bisnis Digital</h3><p>Pendampingan media sosial, konten, SEO, marketplace, komunikasi pelanggan, dan website bisnis.</p><ul><li>Digital marketing</li><li>Marketplace & SEO</li><li>Website bisnis</li></ul></article>
    <article class="program-card featured reveal"><span class="program-no">02</span><i class="ri-store-2-line"></i><h3>HIPPI Local Mart</h3><p>Etalase pemasaran bersama di restoran, hotel, destinasi wisata, workshop, dan retail lokal.</p><ul><li>Display produk lokal</li><li>Promosi bersama</li><li>Distribusi 17 kecamatan</li></ul></article>
    <article class="program-card reveal"><span class="program-no">03</span><i class="ri-graduation-cap-line"></i><h3>HIPPI Academy</h3><p>Pengembangan mindset, manajemen, keuangan, produksi, SDM, pemasaran, dan keterampilan mentor.</p><ul><li>Manajemen usaha</li><li>Keuangan & produksi</li><li>Jejaring & pemasaran</li></ul></article>
    <article class="program-card reveal"><span class="program-no">04</span><i class="ri-landscape-line"></i><h3>HIPPI Wisata</h3><p>Mengintegrasikan UMKM dengan destinasi untuk menghadirkan produk dan layanan lokal yang bernilai.</p><ul><li>Destinasi & UMKM</li><li>Produk khas Bantul</li><li>Kemitraan lokal</li></ul></article>
  </div>
</div></section>

<section class="section impact"><div class="shell impact-grid">
  <div class="impact-copy reveal"><span class="eyebrow blue">Dampak yang Dituju</span><h2>Ekosistem usaha yang saling <em>menguatkan.</em></h2><p>Kami percaya UMKM akan tumbuh lebih kokoh saat pembelajaran, akses pasar, legalitas, dan jejaring bergerak bersama.</p></div>
  <div class="impact-list"><article class="reveal"><span>01</span><div><h3>Jejaring UMKM yang kuat</h3><p>Membuka ruang bertemu, berbagi, dan bertumbuh bersama.</p></div></article><article class="reveal"><span>02</span><div><h3>Lebih cakap digital</h3><p>Menguasai kanal pemasaran dan pengelolaan bisnis masa kini.</p></div></article><article class="reveal"><span>03</span><div><h3>Legal dan kredibel</h3><p>Mendorong formalitas usaha dan badan hukum yang tepat.</p></div></article><article class="reveal"><span>04</span><div><h3>Pasar semakin luas</h3><p>Memperkuat promosi dan distribusi produk unggulan Bantul.</p></div></article></div>
</div></section>

<section id="pengurus" class="section leaders"><div class="shell"><div class="section-head dark reveal"><div><span class="eyebrow light">Pengurus DPC</span><h2>Menggerakkan organisasi dengan <em>semangat kolaborasi.</em></h2></div><p>Susunan pengurus HIPPI DPC Bantul periode 2025–2030.</p></div><div class="leader-grid">
@foreach([['Arianto, A. Md., C.DMP','Ketua'],['Arief Bagus Rachmanto, ST','Sekretaris Umum'],['Martopo, S.Kom','Sekretaris 1'],['Nonik Novianti, S.Pd','Sekretaris 2'],['Siti Haida Hutagaol','Bendahara'],['Galih Padmasari, S.Si','Bendahara 1']] as [$name,$position])
  <article class="leader-card reveal"><span>{{ collect(explode(' ', str_replace([',','.'],'',$name)))->take(2)->map(fn($part)=>strtoupper(substr($part,0,1)))->implode('') }}</span><div><h3>{{ $name }}</h3><p>{{ $position }}</p></div></article>
@endforeach
</div></div></section>

<section id="kolaborasi" class="section collaboration"><div class="shell collaboration-inner reveal"><div><span class="eyebrow light">Mari Bertumbuh Bersama</span><h2>Punya usaha, program, atau gagasan kolaborasi?</h2><p>Terbuka bagi pelaku UMKM, pemerintah, komunitas, akademisi, pengelola destinasi, serta mitra strategis yang ingin menguatkan ekonomi lokal Bantul.</p></div><div class="collaboration-actions"><a class="button white" href="https://wa.me/6282137115988?text=Halo%20HIPPI%20DPC%20Bantul%2C%20saya%20ingin%20berkolaborasi." target="_blank" rel="noopener"><i class="ri-whatsapp-line"></i> Mulai Percakapan</a><a class="button outline-white" href="mailto:hippi@hippi.org"><i class="ri-mail-send-line"></i> Kirim Email</a></div></div></section>
@endsection

