<header id="header" class="header d-flex align-items-center">

<div class="container-fluid container-xl d-flex align-items-center justify-content-between">
  <a href="index.html" class="logo d-flex align-items-center">
    <!-- Uncomment the line below if you also wish to use an image logo -->
    <!-- <img src="assets/img/logo.png" alt=""> -->
    <h1>EXSIC<span>.</span></h1>
  </a>
  <nav id="navbar" class="navbar">
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="{{ url('/Penggunaan') }}">Info Penggunaan</a></li>
      <li><a href="{{ url('/Pengguna/Layouts/tentang') }}">Tentang</a></li>
      <li><a href="{{ url('/Pengguna/Layouts') }}">Artikel</a></li>
     
      <li><a href="{{ url('/login') }}">Login</a></li>
    </ul>
  </nav><!-- .navbar -->

  <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
  <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

</div>
</header><!-- End Header --> 
