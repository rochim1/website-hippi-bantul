<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="HIPPI DPC Bantul memperkuat UMKM melalui jejaring usaha, transformasi digital, legalitas, pemasaran bersama, dan kolaborasi lintas sektor.">
  <meta name="theme-color" content="#082f70">
  <meta property="og:title" content="HIPPI DPC Bantul">
  <meta property="og:description" content="Bersama Memantapkan Daya Saing UMKM Bantul">
  <meta property="og:image" content="{{ asset('images/hippi-bantul-hero.png') }}">
  <title>@yield('title', 'HIPPI DPC Bantul · Pengusaha Pribumi Berkarya')</title>
  <link rel="icon" href="{{ asset('images/hippi-bantul-logo.png') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.6.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/site.css') }}">
</head>
<body>
  <a class="skip-link" href="#main">Lewati ke konten</a>
  <div class="topbar"><div class="shell topbar-inner">
    <span><i class="ri-map-pin-2-line"></i> Bantul, Daerah Istimewa Yogyakarta</span>
    <div><a href="mailto:hippi@hippi.org"><i class="ri-mail-line"></i> hippi@hippi.org</a><a href="tel:+6282137115988"><i class="ri-phone-line"></i> +62 821-3711-5988</a></div>
  </div></div>
  <header class="site-header"><div class="shell nav-wrap">
    <a class="brand" href="#beranda" aria-label="HIPPI DPC Bantul"><img src="{{ asset('images/hippi-bantul-logo.png') }}" alt="Logo HIPPI"><span><strong>DPC BANTUL</strong><small>Pengusaha Pribumi Berkarya</small></span></a>
    <button class="nav-toggle" aria-label="Buka menu" aria-expanded="false"><i class="ri-menu-3-line"></i></button>
    <nav aria-label="Menu utama">
      <a href="#tentang">Tentang Kami</a><a href="#program">Program</a><a href="#pengurus">Pengurus</a><a href="#kolaborasi">Kolaborasi</a><a href="#kontak">Kontak</a>
      <a class="nav-cta" href="https://wa.me/6282137115988?text=Halo%20HIPPI%20DPC%20Bantul%2C%20saya%20ingin%20mengetahui%20program%20dan%20peluang%20kolaborasi." target="_blank" rel="noopener"><i class="ri-whatsapp-line"></i> Hubungi Kami</a>
    </nav>
  </div></header>
  <main id="main">@yield('content')</main>
  <footer id="kontak"><div class="shell footer-grid">
    <div class="footer-about"><img src="{{ asset('images/hippi-bantul-logo.png') }}" alt="HIPPI DPC Bantul"><p>Wadah kolaborasi pengusaha pribumi dan UMKM Bantul untuk tumbuh, memperluas pasar, dan menguatkan ekonomi lokal.</p><span class="footer-motto">Pribumi Berkarya · Indonesia Jaya</span></div>
    <div><h3>Jelajahi</h3><a href="#tentang">Tentang Kami</a><a href="#program">Program Unggulan</a><a href="#pengurus">Pengurus</a><a href="#kolaborasi">Kolaborasi</a></div>
    <div><h3>Sekretariat</h3><p><i class="ri-map-pin-line"></i> Jl. Mgr. Sugiyo Pranoto No. 14A, Melikan Kidul, Bantul, DIY 55711</p><a href="tel:+6282137115988"><i class="ri-phone-line"></i> +62 821-3711-5988</a><a href="mailto:hippi@hippi.org"><i class="ri-mail-line"></i> hippi@hippi.org</a></div>
  </div><div class="shell footer-bottom"><span>© {{ date('Y') }} HIPPI DPC Bantul. Semua hak dilindungi.</span><span>Citrarasa Khas Bantul Ada di Sini</span></div></footer>
  <a class="whatsapp-float" href="https://wa.me/6282137115988?text=Halo%20HIPPI%20DPC%20Bantul%2C%20saya%20ingin%20mengetahui%20program%20dan%20peluang%20kolaborasi." target="_blank" rel="noopener" aria-label="Hubungi lewat WhatsApp"><i class="ri-whatsapp-line"></i><span>Hubungi Kami</span></a>
  <script src="{{ asset('js/site.js') }}" defer></script>
</body>
</html>

