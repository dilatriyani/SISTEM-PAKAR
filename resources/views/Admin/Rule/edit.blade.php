<input type="hidden" name="id" value="{{ $edit->id }}">
<div class="form-group">
    <label>Kode Penyakit</label>
    <select class="form-control select2 mb-3" aria-label="Default select example" name="kd_penyakit" id="kd_penyakit">
        <option value="">Pilih kode penyakit {{ $edit->data_penyakit->data_penyakit}}</option>
        @foreach ($data_penyakits as $item)
            <option value="{{ $item->id }}">{{ $item->kd_penyakit }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label>Kode Gejala</label>
    <select class="form-control select2 mb-2" aria-label="Default select example" name="kd_gejala" id="kd_gejala">
        <option value="">Pilih kode gejala{{ $edit->gejala->gejala }}</option>
        @foreach ($gejalas as $item)
            <option value="{{ $item->id }}">{{ $item->kd_gejala }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label>Pertanyaan</label>
    <input type="text" name="pertanyaan" id="ubah"
        class="form-control @error('pertanyaan') is-invalid @enderror" value="{{ $edit->pertanyaan }}" required>
    @error('pertanyaan')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<script>
    CKEDITOR.replace('ubah');
</script>
