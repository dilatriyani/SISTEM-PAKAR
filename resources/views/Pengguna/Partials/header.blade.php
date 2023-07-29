<header class="header_section">
 
  <div class="header_bottom">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <img src="{{ asset('css/images/logo.png') }}" alt=""  >
        </a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/Penggunaan') }}">Info Penggunaan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/Pengguna/Layouts/tentang') }}">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/Pengguna/Layouts') }}">Artikel</a>
              </li>
             
           
            </ul>
          </div>
          <div class="quote_btn-container">
            <a href="{{ url('/login') }}">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>
                Login
              </span>
            </a>
            
            <form class="form-inline">
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </div>
  </div>
</header>
{{-- <header id="header" class="header d-flex align-items-center">

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
</header><!-- End Header -->  --}}
