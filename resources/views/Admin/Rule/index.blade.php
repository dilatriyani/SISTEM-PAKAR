@extends('Admin.Partials.index')
@section('container')
    <main id="main" class="main">
        <div>
            <h1>Data Rules</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Rules</a></li>
                    <li class="breadcrumb-item active">Data Rules</li>
                </ol>
            </nav>

            <div class="p-2 ">
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalTambah"> + Tambah</button>
            </div>

            <div class="card p-3">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nama Penyakit</th>
                            <th scope="col">Nama Gejala</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="p-2">
                                <button class="btn btn-primary col-sm-4">Edit</button>
                                <button class="btn btn-danger col-sm-4">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

        {{-- modal tambah data gejala --}}
        <div class="modal fade" id="exampleModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content p-3">
                    <div class="modal-header hader">
                        <h3 class="modal-title" id="exampleModalLabel">
                            Tambah Data Rules
                        </h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action=" " method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group mb-1">
                                <label for="nama_gejala">Gejala</label>
                                <textarea type="text" class="form-control" name="nama_gejala" id="nama_gelaja" placeholder=""
                                    @error('nama_gejala')
                                    is-invalid
                                @enderror
                                    value="{{ old('nama_gejala') }}"></textarea>
                                @error('nama_gejala')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="form-group mb-1">
                                <label for="kd_penyakit">Penyakit</label>
                                <input type="text" class="form-control" name="kd_penyakit" id="kd_penyakit"
                                    placeholder="" @error('kd_penyakit') is-invalid @enderror
                                    value="{{ old('kd_penyakit') }}">
                                @error('kd_penyakit')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            {{-- <div class="form-group mb-1">
                      <label for="baris1">Pilih Kode</label>
                      <select class="form-select" aria-label="Default select example">
                          <option selected>Kode</option>
                          <option value="1">G1</option>
                          <option value="2">B1</option>
                          <option value="3">C1</option>
                      </select>

                  </div> --}}
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
