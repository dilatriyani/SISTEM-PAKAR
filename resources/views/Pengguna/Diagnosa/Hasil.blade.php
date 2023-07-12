@extends('Pengguna.Partials.index')
@section('container')

    <body>
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">
                <section id="features" class="features">
                    <h3 class="text-center"><b>HASIL IDENTIFIKASI </b></h3>
                   
                    <div class="container mt-5">
                        <div class="container-fluid pt-4 px-4 card" >
                            <div class="bg-light rounded p-4">
                                <div class="alert alert-success">Berdasarkan gejala dan faktor penyebab yang dipilih dapat disimpulkan:</div>
                                <table class="table table-striped">
                                   <tr>
                                       <th width="150px">Nama</th>
                                       <th width="30px">:</th>
                                       <th>{{ $name }}</th>
                                   </tr>
                                    <tr>
                                        <th>Umur </th>
                                        <th>:</th>
                                        <th>{{ $age }} tahun</th>
                                    </tr>
                                   
                                    <tr>
                                        <th>Alamat</th>
                                        <th>:</th>
                                        <th>{{ $address }}</th>
                                    </tr>
                                   
                                    <tr>
                                        <th>Nama Penyakit</th>
                                        <th>:</th>
                                        <th>  {{ $penyakit->nama_penyakit }}</th>
                                    </tr>
                                    <tr>
                                        <th>Presentase</th>
                                        <th>:</th>
                                        <th> {{ $score }} %</th>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Konsultasi</th>
                                        <th>:</th>
                                        <th>{{ date('d-m-Y') }}</th>
                                    </tr>
                               </table>
                               <hr>
                               <h6>Gejala Terpilih : </h6>
                             
                               {{-- <h5>Gejala Terpilih :</h5>
<ul>
    @foreach($gejala_terpilih as $gejala)
        <li>{{ $gejala->nama_gejala }}</li>
    @endforeach
    @if(empty($gejala_terpilih))
        <li>Tidak ada gejala terpilih</li>
    @endif
</ul> --}}

                             
                                <h6>Pengobatan/Solusi : </h6>
                                <p>
                                    <textarea readonly cols="100" rows="10"> {{ $penyakit->solusi }}</textarea>
                                </p>
            
                            </div>
                            <div class="mt-3 mb-5 col-md-6"><button type="button" class="btn btn-info"><i class="bi bi-printer p-1"></i>Cetak Hasil</button></div>
                           
                        </div>
                       
                    </div>

                    
        </section>
                {{-- <div class="row gy-4 ">
                    <div class="col-lg-4">
                        <div class="content px-xl-5">
                            <div class="card mt-5" style="width: 18rem; hight: 30rem; ">
                                <div class="card-body">
                                    <h5 class="card-header mt-3 mb-3">Data diri</h5>

                                    <div class="row mb-2 mt-2">
                                        <div class="col-md-4">Nama :
                                        </div>
                                        <div class="col-md-8"> {{ $name }}
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">Umur :
                                        </div>
                                        <div class="col-md-8"> {{ $age }}
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-4"> Alamat :
                                        </div>
                                        <div class="col-md-8"> {{ $address }}
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
                                <div class="card shadow p-3 mb-5 bg-body rounded mt-5">
                                    <div class="card-body">
                                        <div class="card-header">Hasil </div>
                                        <div class="row mb-3 mt-3">
                                            <div class="col-md-2">
                                                Penyakit
                                            </div>
                                            <div class="col-md-10">
                                                : {{ $penyakit->nama_penyakit }}, dengan kemungkinan {{ $score }} %
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                Solusi
                                            </div>
                                            <div class="col-md-10">
                                                : {{ $penyakit->solusi }}
                                            </div>
                                        </div>
                                        <div class="mt-5 ">
                                          <a href="/" class="p-1"><button type="button " class="btn btn-secondary ">Konsultasi Lagi</button></a><a href=""><button type="button" class="btn btn-secondary">Cetak</button></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div><!-- # Faq item-->
                    </div>
                </div> --}}

            </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->
    </body>
@endsection
