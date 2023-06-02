@extends('Admin.Partials.index')
@section('container')
    <main id="main" class="main">
        <div>
            <h1>Data Artikel</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Artikel</a></li>
                    <li class="breadcrumb-item active">Data Artikel</li>
                </ol>
            </nav>

            <div class="p-2 ">
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalTambah"> + Tambah</button>
            </div>

            <div class="card p-3">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Isi</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($artikel as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->judul }}</td>
                                <td>{!! $item->isi !!}</td>
                                <td><img src="{{ asset('storage/' . $item->image) }}" alt="image" width="60"></td>
                                <td >
                                    <div class="row">
                                    {{-- <div class="col-md-4 text-end">
                                        <button onclick="editartikel({{ $item->id }})" class="btn btn-primary"
                                            data-bs-toggle="modal" data-bs-target="#exampleModalEdit"
                                            class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end">
                                            <i class='bx bx-edit'></i>
                                        </button>
                                    </div> --}}

                                    <div class="col-md-4 text-start">
                                        <a href="{{ url('Artikel-hapus', $item->id) }}" class="btn btn-danger"><i
                                                class="bx bxs-trash" style=color:white></i></a>
                                    </div>
                                </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>

        {{-- modal tambah data gejala --}}
        <div class="modal fade" id="exampleModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" style="width:125%">
                <div class="modal-content p-3" style="width:125%">
                    <div class="modal-header hader">
                        <h3 class="modal-title" id="exampleModalLabel">
                            Tambah Data Artikel
                        </h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action=" " method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <textarea type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan judul"
                                @error('judul') is-invalid @enderror value="{{ old('judul') }}"></textarea>
                            @error('judul')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-1">
                            <label for="isi">isi</label>
                            <textarea type="text" class="form-control" name="isi" id="isi" placeholder=""
                                @error('isi')
                                    is-invalid
                                @enderror
                                value="{{ old('isi') }}"></textarea>
                            @error('isi')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-1">
                            <label for="image">Gambar</label>
                            <input type="file" class="form-control" name="image" id="image" placeholder=""
                                @error('iamge')
                                    is-invalid
                                @enderror
                                value="{{ old('image') }}">
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="modal-footer d-md-block">
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            <button type="button" class="btn btn-danger btn-sm">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="width: 50%">
                <div class="modal-content">
                    <div class="modal-header hader">
                        <h3 class="modal-title" id="exampleModalLabel">
                            Edit Data Gejala
                        </h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ url('/Artikel/simpan') }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        {{ csrf_field() }}
                        <div class="modal-body" id="modal-content-edit">
                        </div>
                        <div class="modal-footer d-md-block">
                            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                            <button type="button" class="btn btn-danger btn-sm">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            function editartikel(id) {
                $.ajax({
                    url: "{{ url('/Artikel/edit') }}",
                    type: "GET",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        $("#modal-content-edit").html(data);
                        return true;
                    }
                });
            }
        </script>

<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('isi');
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </main>
@endsection
