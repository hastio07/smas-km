@extends('auth.layout.default')
@section('title', 'Login')
@push('styles')
    <link href="{{ asset('assets/css/css-content/user/login.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="d-flex align-items-center justify-content-center vh-100">
        <div class="m-2 rounded bg-white p-4 shadow" style="width: 400px">
            <div class="gap-3">
                <div class="row">
                    <div class="col-sm-3 d-flex align-items-center justify-content-center">
                        <img alt="..." class="img-thumbnail border-0" height="90" src="{{ asset('assets/image/logo.jpg')}}" width="90">
                    </div>
                    <div class="col-sm-9">
                        <h4 class="mb-0 mt-3">SMAS Kartikatama</h4>
                        <p class="text-muted" style="font-size: small">Jl. Kapten Tendean, Margorejo, Kec. Metro Sel., Kota Metro, Lampung 34111</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @if (session()->has('failed'))
                    <div class="alert alert-danger" id="error-massage">
                        <p class="m-0 text-center">{{ session('failed') }}</p>
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="form bg-gray mt-5">
                <form action="/login" autocomplete="on" class="" class="form-example" id="form" method="post">
                    @csrf
                    <div class="mb-3">
                        @if (url()->current() == route('admin.login'))
                            <label class="form-label text-muted" for="email" style="font-size: small">Email</label>
                            <input class="form-control" id="email" name="email" required type="email">
                        @endif
                        @if (url()->current() == route('user.login'))
                            <label class="form-label text-muted" for="nisn" style="font-size: small">NISN/NISS</label>
                            <input class="form-control" id="nisn" name="nisn" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" required type="text">
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted" for="password" style="font-size: small">Password</label>
                        <input class="form-control" id="password" name="password" type="password">
                    </div>
                    <div class="d-flex align-items-center justify-content-center fw-bold mt-4">
                        <button class="btn custom-btn w-100 text-white" type="submit">Masuk</button>
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <p class="me-1">Punya masalah akun? </p><a href="/">Bantuan</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.getElementById('form').scrollIntoView({
            behavior: 'smooth'
        });
    </script>
@endpush
