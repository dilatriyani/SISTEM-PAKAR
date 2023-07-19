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
                        
                                <div class="col-md-10">
                                    @foreach ($gejala_list as $gejala)
                                    <p> - {{ $gejala }}</p>
                                    @endforeach
                                </div>
                            </div>
                             
                                <h6>Pengobatan/Solusi : </h6>
                                <p>
                                    <textarea readonly cols="100" rows="10"> {{ $penyakit->solusi }}</textarea>
                                </p>
            
                            </div>
                           
                            <a href="{{ url('/Pengguna/Diagnosa/GeneratePdf') }}" target="_blank">
                                <button type="button" class="btn btn-secondary">Print</button>
                            </a>
                            
                          
                        </div>
                       
                    </div>

                    
        </section>
           

            </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->
    </body>
@endsection
