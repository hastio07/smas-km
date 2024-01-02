@extends('main.layout.default')

@section('title', 'Sambutan Kepala Sekolah')

@push('styles')
    <link href="{{ asset('assets/css/css-content/user/TeacherList.css') }}" rel="stylesheet">
@endpush

@extends('main.layout.includes.carousel')
@section('content')
    <section>
        <div class="container mt-4">
            <div class="m-3 rounded p-3">
                <h5>Guru dan Staf</h5>
                <div class="smooth-line"></div>
                <div class="mt-5">
                    <h5 class="fw-bold"><i class="fa-solid fa-person-chalkboard"></i> Guru</h5>
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 mt-2">
                                    <a class="text-decoration-none text-black" href="/DetailGuru">
                                        <div class="card custom-card rounded-4 border-0 p-2">
                                            <img alt="..." class="card-img-top image-fluid rounded-4 object-fit-cover" src="{{ asset('assets/image/guru/guru1.jpg') }}">
                                            <div class="card-body text-start">
                                                <p class="card-text fw-bold mb-0 text-start">Aisyah Mutamani M.Pd</p>
                                                <div class="card-line"></div>
                                                <p class="card-text mt-2">NIP. 1532166346336</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="fw-bold mt-4"><i class="fa-solid fa-person-booth"></i> Staf</h5>
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 mt-2">
                                    <a class="text-decoration-none text-black" href="/DetailGuru">
                                        <div class="card custom-card rounded-4 border-0 p-2">
                                            <img alt="..." class="card-img-top image-fluid rounded-4 object-fit-cover" src="{{ asset('assets/image/guru/TU2.jpeg') }}">
                                            <div class="card-body text-start">
                                                <p class="card-text fw-bold mb-0 text-start">Aisyah Mutamani M.Pd</p>
                                                <div class="card-line"></div>
                                                <p class="card-text mt-2">NIP. 1532166346336</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 mt-2">
                                    <a class="text-decoration-none text-black" href="/DetailGuru">
                                        <div class="card custom-card rounded-4 border-0">
                                            <img alt="..." class="card-img-top image-fluid rounded-4 object-fit-cover" src="{{ asset('assets/image/guru/TU1.jpeg') }}">
                                            <div class="card-body text-start">
                                                <p class="card-text fw-bold mb-0 text-start">Aisyah Mutamani M.Pd</p>
                                                <div class="card-line"></div>
                                                <p class="card-text mt-2">NIP. 1532166346336</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
