<input type="hidden" name="id" value="{{ $edit->id }}">
<div class="form-group">
    <label>Kode Penyakit</label>
    <input type="text" name="kd_penyakit" class="form-control @error('kd_penyakit') is-invalid @enderror" value="{{ $edit->kd_penyakit }}" required>
    @error('kd_penyakit')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Nama Penyakit</label>
    <input type="text" name="nama_penyakit" class="form-control @error('nama_penyakit') is-invalid @enderror" value="{{ $edit->nama_penyakit }}" required>
    @error('nama_penyakit')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Deskripsi</label>
    <input type="text" name="deskripsi" id="ubah" class="form-control @error('deskripsi') is-invalid @enderror" value="{{ $edit->deskripsi }}" required>
    @error('deskripsi')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label>Solusi</label>
    <input type="text" name="solusi" id="edit" class="form-control @error('solusi') is-invalid @enderror" value="{{ $edit->solusi }}" required>
    @error('solusi')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<script>
    CKEDITOR.replace('ubah');
</script>
<script>
    CKEDITOR.replace('edit');
</script>