@extends('main.layout.default')

@section('title', 'Sambutan Kepala Sekolah')

@push('styles')
    <link href="{{ asset('assets/css/css-content/user/TeacherList.css') }}" rel="stylesheet">
@endpush

@extends('main.layout.includes.carousel')
@section('content')
    <section>

        <!-- Modal untuk menampilkan detail Guru-->
        <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="exampleModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                    </div>
                    <div class="modal-body mb-4 p-5">
                        <div class="row">
                            <div class="col-md-3">
                                <img alt="..." class="card-img-top image-fluid rounded-4 object-fit-cover" src="{{ asset('assets/image/guru/TU2.jpeg') }}">
                            </div>
                            <div class="col-md-9">
                                <h3 class="fw-bold">Lorem Ipsum is simply dummy</h3>
                                <p class="text-muted mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                <p class="border-bottom pb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                <p class="border-bottom pb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                <p class="border-bottom pb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                    <a class="text-decoration-none text-black" data-bs-target="#exampleModal" data-bs-toggle="modal">
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
                                    <a class="text-decoration-none text-black" data-bs-target="#exampleModal" data-bs-toggle="modal">
                                        <div class="card custom-card rounded-4 border-0 p-2">
                                            <img alt="..." class="card-img-top image-fluid rounded-4 object-fit-cover" src="{{ asset('assets/image/guru/TU2.jpeg') }}">
                                            <div class="card-body text-start">
                                                <p class="card-text fw-bold mb-0 text-start">Aisyah Mutaharah M.Pd</p>
                                                <div class="card-line"></div>
                                                <p class="card-text mt-2">NIP. 1532166346336</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 mt-2">
                                    <a class="text-decoration-none text-black" data-bs-target="#exampleModal" data-bs-toggle="modal">
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
