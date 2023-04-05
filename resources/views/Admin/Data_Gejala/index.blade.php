@extends('Admin.Partials.index')
@section('container')
<main id="main" class="main">
<div >
    <h1>Data Gejala</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
            <li class="breadcrumb-item active">Data Gejala</li>
        </ol>
    </nav>
    <div class="p-2 ">
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalTambah"> + Tambah</button>
    </div>

    @if (session('berhasil'))
    <div class="alert alert-success">
        {{ session('berhasil')}}
    </div>
    @endif

   <div class="card p-3">
    <table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Gejala</th>
            <th scope="col">Kode</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mengalami Pegal dan sakit di bagian tengkuk</td>
            <td>G1</td>
            <td class="p-2">
                <button class="btn btn-primary col-sm-4">Edit</button>
                <button class="btn btn-danger ">Hapus</button>
            </td>
        </tr>
    </tbody>
    </table>
      
   </div>
</div>

<div class="modal fade" id="exampleModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content p-3">
        <div class="modal-header hader">
            <h3 class="modal-title" id="exampleModalLabel">
                Tambah Data Gejala
            </h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action=" " method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="form-group mb-1">
                    <label for="gejala">Tambahkan Gejala</label>
                    <textarea type="text" class="form-control" name="gejala" id="gelaja" placeholder=""></textarea>
                    {{-- @error('judul') is-invalid @enderror value="{{ old('judul') }}">
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror --}}
                </div>
                <div class="form-group mb-1">
                    <label for="baris1">Pilih Kode</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Kode</option>
                        <option value="1">G1</option>
                        <option value="2">B1</option>
                        <option value="3">C1</option>
                      </select>
                    
                    </div>
            </div>
            <div class="modal-footer d-md-block">
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                <button type="button" class="btn btn-danger btn-sm">Batal</button>
            </div>
        </form>
      </div>
    </div>
</div>
</main>
@endsection