<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login </title>
    <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="p-4 shadow m-2 rounded bg-white" style="width: 400px">
            <div class="gap-3">
                <div class="row">
                    <div class="col-sm-3 d-flex align-items-center justify-content-center">
                        <img alt="..." class="img-thumbnail border-0" height="90" src="{{ asset('assets/image/logo.png') }}" width="90">
                    </div>
                    <div class="col-sm-9">
                        <h4 class="mt-3 mb-0">SMAS Kartikatama</h4>
                        <p class="text-muted" style="font-size: small">Jl. Kapten Tendean, Margorejo, Kec. Metro Sel., Kota Metro, Lampung 34111</p>
                    </div>
                </div>
            </div>
            <div class="form mt-5 bg-gray">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-muted" style="font-size: small">NISN/NISS</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="inputPassword" class="form-label text-muted" style="font-size: small">Password</label>
                    <input type="password" class="form-control" id="inputPassword">
                </div>
                <div class="d-flex align-items-center justify-content-center mt-4 fw-bold">
                    <button class="btn custom-btn w-100 text-white">Masuk</button>
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <p class="me-1">Tidak punya akun? </p><a href="/">Daftar</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
