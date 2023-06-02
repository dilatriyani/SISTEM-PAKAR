@extends('Pengguna.Partials.index')
@section('container')
    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4 ">
                <div class="col-lg-4">
                    <div class="content px-xl-5">
                        <h5>Jawablah <strong>Pertanyaan</strong> disamping</h5>
                        <p>
                        <div class="card " style="width: 18rem; hight: 30rem; ">
                            <div class="card-body">
                                <h5 class="card-header mb-3">Data diri</h5>

                                <div class="row">
                                    <div class="col-md-4">Nama :
                                    </div>
                                    <div class="col-md-8"> Hikun
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">Umur :
                                    </div>
                                    <div class="col-md-8"> 20
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-4"> Alamat :
                                    </div>
                                    <div class="col-md-8"> Lohbener
                                    </div>
                                </div>

                            </div>
                        </div>
                        </p>
                    </div>
                </div>

                <div class="col-lg-8">

                    <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

                        <div
                            class="col-lg-12 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                            <div class="card text-center shadow p-3 mb-5 bg-body rounded ">

                                <div class="card-body">
                                    <h3 class=" m-3 p-3">Apakah anda merasakan sakit pada bagian tengkuk leher ?</h3>

                                    <a href="/Pengguna/Diagnosa/Hasil" class="btn btn-secondary  col-md-2 mb-2">Ya</a> <a href="/Pengguna/Diagnosa/Hasil"
                                        class="btn btn-secondary col-md-2 mb-2">Tidak</a>
                                </div>
                            </div>
                          </div>
                    </div><!-- # Faq item-->
                </div>
            </div>

        </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->
@endsection
