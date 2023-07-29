@extends('Pengguna.Partials.index')
@section('container')
{{-- <section id="hero" class="hero"> --}}
    {{-- <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                <h2>Hello!! Selamat datang di <span>EXSISC</span></h2>
                <p>Exsisc adalah aplikasi sistem pakar untuk mengidentifikasi dini resiko penyakit kolestrol</p>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn-get-started">Konsultasi</a>
                 
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <img src="assets/img/dokter.png" class="img-fluid" alt="" data-aos="zoom-out"
                    data-aos-delay="100">
            </div>
        </div>
    </div> --}}

    {{-- <div class="icon-boxes position-relative">
        <div class="container position-relative">
            <div class="row gy-4 mt-5">

                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-easel"></i></div>
                        <h4 class="title"><a type="button" href="" class="stretched-link"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">Konsultasi</a></h4>
                    </div>
                </div>
                <!--End Icon Box -->

                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-gem"></i></div>
                        <h4 class="title"><a href="" class="stretched-link">Artikel</a></h4>
                    </div>
                </div>
                <!--End Icon Box -->

                <!--End Icon Box -->

                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-command"></i></div>
                        <h4 class="title"><a href="" class="stretched-link">Tentang Aplikasi</a></h4>
                    </div>
                </div>
                <!--End Icon Box -->
            </div>
        </div>
    </div> --}}
    <section class="slider_section ">
        <div class="dot_design">
          <img src="{{ asset('css/images/dots.png') }}" alt="">
        </div>
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container ">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail-box">
                      <div class="play_btn">
                        <button>
                          <i class="fa fa-play" aria-hidden="true"></i>
                        </button>
                      </div>
                      <h1>
                        Hello!! <br>
                      
                            Selamat datang di <span>EXSISC</span>
                      </h1>
                      <p>
                        Exsisc adalah aplikasi sistem pakar untuk mengidentifikasi dini resiko penyakit kolestrol
                      </p>
                      <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn-get-started">Konsultasi</a>
                     
                    </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="img-box">
                      <img src="{{ asset('css/images/slider-img.jpg') }}" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container ">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail-box">
                      <div class="play_btn">
                        <button>
                          <i class="fa fa-play" aria-hidden="true"></i>
                        </button>
                      </div>
                      <h1>
                        Kenapa Harus <br>

                        <span>
                            EXSISC
                        </span>
                      </h1>
                      <p>
                        EXSISC, aplikasi sistem pakar, menilai risiko berdasarkan karakteristik pengguna, 
                        membantu pemahaman dan langkah pencegahan kesehatan terkait kolesterol.
                      </p>
                      <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn-get-started">Konsultasi</a>
                     
                    </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="img-box">
                      <img src="{{ asset('css/images/slider-img.jpg') }}" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
          <div class="carousel_btn-box">
            <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
              <img src="{{ asset('css/images/prev.png') }}" alt="">
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
              <img src="{{ asset('css/images/next.png') }}" alt="">
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
  
    </section>
    

    {{-- form modal --}}
  
    </div> <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <form method="POST" action="/Pengguna/Diagnosa/Mulai">
            @csrf
                <button type="button" class="btn-close px-3 py-3" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <h5 style="font-color:#3bb1a3,font-size: 25px" align="center" class="mb-3">Isi data dibawah ini
                        untuk melanjutkan diagnosa</h5>
                    <div class="card p-4" style="border-color: #3bb1a3">
                        <div class="mt-3 mb-2">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input required type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Usia</label>
                            <input required type="text" class="form-control" id="age" name="age">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                            <input required type="text" class="form-control" id="address" name="address">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-white" style="background-color: #3bb1a3">Lanjut</button>
                </div>
            </form>
            </div>
        </div>
    </div>

@endsection
