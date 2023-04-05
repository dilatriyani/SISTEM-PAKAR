@extends('Admin.Partials.index')
@section('container')
<main id="main" class="main">
<div >
    <h1>Data Admin</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
            <li class="breadcrumb-item active">Data Admin</li>
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
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Username</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>mark@gmail.com</td>
            <td>Markkeuuu</td>
            <td class="p-2">
                <button class="btn btn-primary col-sm-4">Edit</button>
                <button class="btn btn-danger col-sm-4">Hapus</button>
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
                Tambah Data Admin
            </h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action=" " method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="form-group mb-1">
                    <label for="Username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="">
                    {{-- @error('judul') is-invalid @enderror value="{{ old('judul') }}">
                    @error('judul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror --}}
                </div>
                <div class="form-group mb-1">
                    <label for="baris1">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Example@gmail.com">
                    {{-- @error('subjudul') is-invalid @enderror value="{{ old('subjudul') }}">
                    @error('subjudul')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror --}}
                </div>
                <div class="form-group">
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" name="isi" class="my-editor form-control" id="my-editor" cols="30" rows="10">
                    </div>
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