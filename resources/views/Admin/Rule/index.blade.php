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


            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kode Penyakit</th>
                        <th>Kode Gejala</th>
                        <th>Pertanyaan</th>
                        <!-- Tambahkan kolom untuk field lainnya sesuai kebutuhan -->
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rules as $rule)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $rule->data_penyakit->kd_penyakit }}</td>
                            <td>{{ $rule->gejala->kd_gejala }}</td>
                            <td>{{ $rule->pertanyaan }}</td>
                            <!-- Tambahkan kolom untuk field lainnya sesuai kebutuhan -->
                            <td>
                                <td style="size: 30px;" class="row">
                                    <div class="col-md-4 text-end">
                                        <button onclick="editrule({{ $rule->id }})" class="btn btn-primary"
                                            data-bs-toggle="modal" data-bs-target="#exampleModalEdit"
                                            class="btn btn-primary fw-bold rounded-pill px-4 shadow float-end">
                                            <i class='bx bx-edit'></i>
                                        </button>
                                    </div>

                                    <div class="col-md-4 text-start">
                                        {{-- <form onsubmit="return confirm('Apakah anda yakin ?');"
                                            action="{{ route('Data_Gejala.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">
                                                <a href="/Gejala/{{ $item->id }}" method="post"
                                                    onsubmit="return confirm('Apakah anda yakin ?');"><i
                                                        class="bx bxs-trash" style=color:white></i>
                                                </a>
                                            </button>
                                        </form> --}}
                                    </div>
                                </td>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
                <form action="{{ url('Admin/Rule') }}" method="POST" >
                    @csrf
                    <div class="modal-body">

                      

        
                    <div class="form-group mb-1">
                        <label for="pertanyaan " class="mb-2">Pilih Kode Gejala</label>
                        <select class="form-control select2 mb-3" aria-label="Default select example" name="kd_penyakit"
                            id="kd_penyakit">
                            <option selected>Pilih kode penyakit</option>
                            @foreach ($data_penyakits as $item)
                                <option value="{{ $item->id }}">{{ $item->kd_penyakit }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-1">
                        <label for="pertanyaan" class="mb-2">Pilih Kode Gejala</label>
                        <select class="form-control select2 mb-2" aria-label="Default select example" name="kd_gejala"
                            id="kd_gejala">
                            <option selected>Pilih kode gejala</option>
                            @foreach ($gejalas as $item)
                                <option value="{{ $item->id }}">{{ $item->kd_gejala }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-1">
                    <label for="pertanyaan">Pertanyaan</label>
                    <textarea type="text" class="form-control" name="pertanyaan" id="tambah" placeholder=""
                        @error('pertanyaan') is-invalid @enderror value="{{ old('pertanyaan') }}"></textarea>
                    @error('pertanyaan')
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
    </div>
    

    {{-- modal edit --}}
    <div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="width: 50%">
            <div class="modal-content">
                <div class="modal-header hader">
                    <h3 class="modal-title" id="exampleModalLabel">
                        Edit Data Gejala
                    </h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('/Rule/simpan') }}" method="POST" enctype="multipart/form-data">
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


    {{-- js ajax --}}
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript">
    function editrule(id) {
        $.ajax({
            url: "{{ url('/Rule/edit') }}",
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
    CKEDITOR.replace('tambah');
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </main>
@endsection
