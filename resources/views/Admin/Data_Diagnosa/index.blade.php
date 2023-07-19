@extends('Admin.Partials.index')
@section('container')
    <main id="main" class="main">
        <div>
            <h1>Data Diagnosa</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                    <li class="breadcrumb-item active">Data Diagnosa</li>
                </ol>
            </nav>

            <div class="card p-3">
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="filterStartDate" class="form-label">Dari Tanggal:</label>
                        <input type="date" id="filterStartDate" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="filterEndDate" class="form-label">Hingga Tanggal:</label>
                        <input type="date" id="filterEndDate" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="filterPeriode" class="form-label">Periode:</label>
                        <select id="filterPeriode" class="form-control">
                            <option value="bulan">Per Bulan</option>
                            <option value="minggu">Per Minggu</option>
                            <option value="tahun">Per Tahun</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button class="btn btn-primary float-end">Cetak</button>
                    </div>
                </div>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Penyakit</th>
                          
                            {{-- <th scope="col">Aksi</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($riwayat_diagnosa as $index => $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->umur }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->penyakit }}</td>
                              
                                {{-- <td class="p-2">
                <button class="btn btn-danger col-sm-4">Hapus</button>
            </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
