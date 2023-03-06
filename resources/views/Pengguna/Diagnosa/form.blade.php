
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('Pengguna.Partials.link')
</head>
<body>
    @include('Pengguna.Partials.header')
    <div class="container p-5">
        <div class="card p-5">
         
            <div class="mb-1 row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Nama </label>
              <div class="col-sm-8">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": HIKUN">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Usia </label>
              <div class="col-sm-8">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=": 25 thn">
              </div>
            </div><hr>
            <div class="mb-2">
              1.  Apakah anda mengalami sakit kepala?
              <div class="mb-3 row mt-3">
                <div class="col-sm-2">
                  <button type="button" class="btn btn-outline-success col-sm-12">Ya</button>
                </div>
                <div class="col-sm-2">
                  <button type="button" class="btn btn-outline-danger col-sm-12">Tidak</button>
                </div>
              </div> 
            </div><hr>
            <div class="mb-2">
              2.  Apakah anda mengalami pegal-pegal?
                <div class="mb-3 row mt-3">
                  <div class="col-sm-2">
                    <button type="button" class="btn btn-outline-success col-sm-12">Ya</button>
                  </div>
                  <div class="col-sm-2">
                    <button type="button" class="btn btn-outline-danger col-sm-12">Tidak</button>
                  </div>
                </div> 
            </div><hr>
            <div class="mb-2">
              3.  Apakah anda mengalami sakit leher?
                <div class="mb-3 row mt-3">
                  <div class="col-sm-2">
                    <button type="button" class="btn btn-outline-success col-sm-12">Ya</button>
                  </div>
                  <div class="col-sm-2">
                    <button type="button" class="btn btn-outline-danger col-sm-12">Tidak</button>
                  </div>
                </div> 
            </div>
        </div>
    </div>
    @include('Pengguna.Partials.footer')
</body>
</html>
    