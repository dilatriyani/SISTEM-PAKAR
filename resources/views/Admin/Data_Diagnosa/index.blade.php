@extends('Admin.Partials.index')
@section('container')
<main id="main" class="main">
<div >
    <h1>Data Diagnosa</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
            <li class="breadcrumb-item active">Data Diagnosa</li>
        </ol>
    </nav>
    
   <div class="card p-3">
    <table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">Umur</th>
            <th scope="col">Diagnosa</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Mark</td>
            <td>23</td>
            <td>HDL</td>
            <td class="p-2">
                <button class="btn btn-danger col-sm-4">Hapus</button>
            </td>
        </tr>
    </tbody>
    </table>
      
   </div>
</div>


</main>
@endsection