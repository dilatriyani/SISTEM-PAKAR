@extends('Pengguna.Partials.index')
@section('container')

<body>
    <div class="container p-5">
      <div class="card p-4">
        <div class="card-header p-3">
            <div class=" row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Nama </label>
              <div class="col-sm-8">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": HIKUN">
              </div>
            </div>
            <div class=" row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Usia </label>
              <div class="col-sm-8">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": 25 thn">
              </div>
            </div>
        </div>
            <div class=" card-body mb-2">
                <div class="col-sm-10 MT-2 mb-4">
                  <h3>Pilih gejala yang dirasakan</h3>
                </div>
    
              <div class="mb-1 row" style="font-family: inherit">
                <div class="col-sm-9 mt-2">
                  <div>Apakah anda mengalami sakit kepala?</div>
                </div>
                <div class="col-sm-1">
                  <div class="form-check ">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Ya
                    </label>
                  </div>
                </div>
                <div class="col-sm-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                     Tidak
                    </label>
                  </div>
                </div>
              </div>

              <div class="mb-1 row" >
                <div class="col-sm-9 mt-2">
                  <div>Apakah Anda mengalami sakit leher hingga tengkuk?</div>
                </div>
                <div class="col-sm-1">
                  <div class="form-check ">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Ya
                    </label>
                  </div>
                </div>
                <div class="col-sm-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                     Tidak
                    </label>
                  </div>
                </div>
              </div>

              <div class="mb-1 row" >
                <div class="col-sm-9 mt-2">
                  <div>Apakah anda mengalami mual?</div>
                </div>
                <div class="col-sm-1">
                  <div class="form-check ">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Ya
                    </label>
                  </div>
                </div>
                <div class="col-sm-1">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                     Tidak
                    </label>
                  </div>
                </div>
              </div>
            </div>
      </div>
    </div>
    </div>
</body>
@endsection
    