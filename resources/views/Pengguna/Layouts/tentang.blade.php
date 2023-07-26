@extends('Pengguna.Partials.index')
@section('container')

    <body>
      
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{ asset('assets/img/hand.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h3>Tentang Aplikasi</h3>
                          <p>XSISC aplikasi sistem pakar identifikasi dini faktor resiko penyakit kolestrol.</p>
                        </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('assets/img/blood.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h3>Tentang Aplikasi</h3>
                          <p>XSISC aplikasi sistem pakar identifikasi dini faktor resiko penyakit kolestrol</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{{ asset('assets/img/obat.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h3>Tentang Aplikasi</h3>
                          <p>EXSISC aplikasi sistem pakar identifikasi dini faktor resiko penyakit kolestrol</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
           
           
                    <div class="mt-5" data-aos="fade-up" data-aos-delay="100">
                        <div class="row">
                            <div class="col-md-6">
                              <div class="card" style="height:40rem;">
                                <div class="card-body">
                                    <h5 class="card-title pe-5"><b> Apa itu EXSISC?</b></h5>
                                    <div class="card-body ">
                                        <p class="card-text justify-text mt-1">  EXSISC, singkatan dari Expert System Kolesterol, adalah sebuah aplikasi yang dirancang sebagai sistem
                                            pakar untuk identifikasi dini faktor risiko penyakit terkait kolesterol. Aplikasi ini bertujuan untuk
                                            membantu pengguna dalam memahami dan mengenali faktor-faktor yang dapat meningkatkan risiko terkena
                                            penyakit terkait kolesterol, sehingga pengguna dapat mengambil langkah-langkah pencegahan yang tepat.</p>
                                            <br>
                                            <p class="card-text justify-text mt-1">
                                                Aplikasi EXSISC menggunakan pendekatan sistem pakar, yang menggabungkan pengetahuan dan pengalaman dari
                                                para ahli dalam bidang kesehatan untuk memberikan penilaian risiko yang akurat kepada pengguna. Sistem
                                                pakar ini didasarkan pada aturan-aturan yang telah ditentukan sebelumnya, yang memungkinkan aplikasi untuk
                                                menganalisis gejala, riwayat kesehatan, dan faktor-faktor risiko individu yang berkontribusi terhadap
                                                penyakit kolesterol.
                                            </p>
                                    </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card" style="height:40rem;">
                                  <div class="card-body">
                                      <h5 class="card-title pe-5"><b> Mengapa harus Aplikasi EXSISC?</b></h5>
                                      <div class="card-body ">
                                          <p class="card-text justify-text mt-1">   Keunggulan EXSISC sebagai aplikasi sistem pakar adalah kemampuannya untuk memberikan penilaian risiko
                                            yang personal dan spesifik berdasarkan karakteristik individu pengguna. Dengan demikian, pengguna dapat
                                            lebih memahami faktor-faktor risiko yang mempengaruhi kondisi kesehatan mereka dan mengambil langkah-langkah
                                            yang tepat untuk mencegah penyakit terkait kolesterol.</p>
                                              <br>
                                              <p class="card-text justify-text mt-1">
                                                Namun, penting untuk diingat bahwa EXSISC bukan pengganti dari konsultasi langsung dengan tenaga medis
                                                profesional. Aplikasi ini hanya berfungsi sebagai alat bantu yang memberikan informasi awal dan rekomendasi
                                                umum. Jika pengguna memiliki kekhawatiran atau gejala yang mengkhawatirkan, disarankan untuk berkonsultasi
                                                dengan dokter atau tenaga medis yang berkualifikasi untuk evaluasi lebih lanjut dan penanganan yang sesuai.
                                              </p>
                                      </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section><!-- End About Us Section -->

    </body>
@endsection
