@extends('Admin.Partials.index')
@section('container')
    <main id="main" class="main">
        <div>
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
                    {{ session('berhasil') }}
                </div>
            @endif

            <div class="card p-3">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Gejala</th>
                            <th scope="col">Kode Gejala</th>
                            <th scope="col">Kode penyakit</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_gejala as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{!! $item->nama_gejala !!}</td>
                                <td>{{ $item->kd_gejala }}</td>
                                <td>{{ $item->data_penyakit->kd_penyakit }}</td>
                                <td style="size: 30px;" class="row">
                                    <div class="col-md-4 text-end">
                                        <button onclick="editgejala({{ $item->id }})" class="btn btn-primary"
                                            data-bs-toggle="modal" data-bs-target="#exampleModalEdit"
                                            class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end">
                                            <i class='bx bx-edit'></i>
                                        </button>
                                    </div>

                                    <div class="col-md-4 text-start">
                                        <form onsubmit="return confirm('Apakah anda yakin ?');"
                                            action="{{ route('Data_Gejala.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">
                                                <a href="/Gejala/{{ $item->id }}" method="post"
                                                    onsubmit="return confirm('Apakah anda yakin ?');"><i
                                                        class="bx bxs-trash" style=color:white></i>
                                                </a>
                                            </button>
                                        </form>
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
            <div class="modal-dialog" style="width: 125%">
                <div class="modal-content p-3" style="width: 125%">
                    <div class="modal-header hader">
                        <h3 class="modal-title" id="exampleModalLabel">
                            Tambah Data Gejala
                        </h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ url('/Admin/Data_Gejala') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group mb-1">
                                <label for="nama_gejala">Tambahkan Gejala</label>
                                <textarea type="text" class="form-control" name="nama_gejala" id="nama_gelaja" placeholder="""
                                    @error('nama_gejala') is-invalid @enderror value="{{ old('nama_gejala') }}"></textarea>
                                @error('nama_gejala')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mb-1">
                                <label for="gejala">Kode gejala</label>
                                <input type="text" class="form-control" name="kd_gejala" id="kd_gelaja" placeholder=""
                                    @error('kd_gejala') is-invalid @enderror value="{{ old('kd_gejala') }}">
                                @error('kd_gejala')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group mb-1">
                            <select class="form-control select2" aria-label="Default select example" name="kd_penyakit"
                                id="kd_penyakit">
                                <option selected>Pilih kode penyakit</option>
                                @foreach ($data_penyakit as $item)
                                    <option value="{{ $item->id }}">{{ $item->kd_penyakit }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="modal-footer d-md-block">
                            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                            <button type="button" class="btn btn-danger btn-sm">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- modal edit  --}}
        <div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="width: 50%">
                <div class="modal-content">
                    <div class="modal-header hader">
                        <h3 class="modal-title" id="exampleModalLabel">
                            Edit Data Gejala
                        </h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ url('/Data_Gejala/simpan') }}" method="POST" enctype="multipart/form-data">
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
            function editgejala(id) {
                $.ajax({
                    url: "{{ url('/Data_Gejala/edit') }}",
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
            CKEDITOR.replace('nama_gejala');
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </main>
@endsection
 