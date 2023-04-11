<input type="hidden" name="id" value="{{ $edit->id }}">
<div class="form-group">
    <label>Nama Gejala</label>
    <input type="text" name="nama_gejala" class="form-control @error('nama_gejala') is-invalid @enderror" value="{{ $edit->nama_gejala }}" required id="ubah">
    @error('nama_gejala')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Kode Gejala</label>
    <input type="text" name="kd_gejala" class="form-control @error('kd_gejala') is-invalid @enderror" value="{{ $edit->kd_gejala }}" required>
    @error('kd_gejala')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Kode Penyakit</label>
    <input type="text" name="kd_penyakit" class="form-control @error('kd_penyakit') is-invalid @enderror" value="{{ $edit->kd_penyakit }}" required>
    @error('kd_penyakit')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<script>
    CKEDITOR.replace('ubah');
</script>


{{-- <input type="hidden" name="id" value="{{ $edit->id }}">

<div class="form-group">
    <label>Nama Gejala</label>
    <input type="text" name="nama_gejala" class="form-control @error('nama_gejala') is-invalid @enderror" value="{{ $edit->nama_gejala }}" required>
    @error('nama_gejala')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Kode Gejala</label>
    <input type="text" name="kd_gejala" class="form-control @error('kd_gejala') is-invalid @enderror" value="{{ $edit->kd_gejala }}" required>
    @error('kd_gejala')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Kode Penyakit</label>
    <input type="text" name="kd_penyakit" class="form-control @error('kd_penyakit') is-invalid @enderror" value="{{ $edit->kd_penyakit }}" required>
    @error('kd_penyakit')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<script>
    CKEDITOR.replace('ubah');
</script> --}}