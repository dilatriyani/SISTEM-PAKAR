
@extends('Pengguna.Partials.index')
@section('container')

<section id="services" class="services sections-bg">

  <h2 class="text-center"><b><u>DETAIL ARTIKEL</u></b></h2>
  
  <div class="card mb-3 m-4 pe-3 p-4" style="max-width: 100%;">
    <div class="row g-0">
      <div class="col-md-4">
        <div class="p-4">
          <img src="{{ asset('storage/'.$artikels['image']) }}" class="img-fluid text-center" alt="..." style="width: 100%; height: 100%;">
        </div>
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><b>{{ $artikels['judul'] }}</b></h5><br>
          <p class="card-text" style="no-border">{!! $artikels['isi'] !!}</p>
          <hr>
         
          <p class="card-text"><small class="text-muted">Terakhir diperbarui: {{ $artikels['updated_at'] }}</small></p>
         
        </div>
      </div>
    </div>
  </div>

</section>
@endsection
