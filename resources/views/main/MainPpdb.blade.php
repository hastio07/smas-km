@extends('main.layout.default')

@section('title', 'PPDB')

@push('styles')
    <link href="{{ asset('assets/css/css-content/user/ppdb.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet" />
@endpush

@section('content')
    <section class="mt-3">
        <div class="mb-3">
            <img alt="upload baner ppdb" class="img-fluid" src="{{ asset('assets/image/PPDB/baner.jpg') }}" style="max-width:100%; height:auto;">
        </div>
        <div class="container">
            <div class="my-5 text-center">
                <div class="fw-bold mb-5" style="color: #4a397e">
                    <h1 class="display-1">Informasi Seputar PPDB</h1>
                    <h4 class="">SMAS Kartikatama Metro</h4>
                    <div class="line m-auto"></div>
                </div>
                <div class="mt-3">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum obcaecati laudantium, neque cum, nemo commodi eligendi dolores temporibus eius accusantium dolor, fugiat harum vitae! Ex iure itaque natus maiores atque!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nobis explicabo itaque illo similique corporis sapiente accusamus laborum nisi doloremque a consequatur sit pariatur, eius animi voluptatum suscipit placeat fugit.</p>
                </div>
            </div>
            <a class="btn btn-smas rounded-4 justify-content-center align-items-center d-flex border-0 py-3 text-center shadow" href="/formppdb">
                <h4 class="mb-0"> <i class="fa-solid fa-user-pen"></i> Daftarkan Diri Anda Disini </h4>
            </a>
            <div class="justify-content-center align-items-center d-flex my-3">
                <h5 class="fw-bold mb-0" style="color: #4a397e">Atau</h5>
            </div>
            <a class="btn btn-smas rounded-4 justify-content-center align-items-center d-flex border-0 py-3 text-center shadow" href="/formppdb">
                <h4 class="mb-0">Cek Hasil Ujian Anda Disini <i class="fa-solid fa-magnifying-glass-arrow-right"></i></h4>
            </a>
            <div class="row my-5 mb-3">
                <div class="col-md-6">
                    <div class="rounded-4 h-100 d-flex justify-content-center align-items-center p-3 shadow" data-aos-duration="2000" data-aos="fade-up" style="border-top: 10px solid #4a397e">
                        <div class="mb-3">
                            <img alt="upload baner ppdb" class="img-fluid rounded" src="{{ asset('assets/image/PPDB/alur.jpg') }}" style="max-width:100%; height:auto;">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="rounded-4 h-100 d-flex justify-content-center align-items-center p-3 shadow" data-aos-duration="2000" data-aos="fade-down" style="border-bottom: 10px solid #4a397e">
                        <div class="mb-3">
                            <img alt="upload baner ppdb" class="img-fluid rounded" src="{{ asset('assets/image/PPDB/syarat.jpg') }}" style="max-width:100%; height:auto;">
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <h3>Jalur Penerimaan</h3>
                    <div class="smooth-line"></div>
                    <div class="rounded-4 my-3 p-3 shadow">
                        <div class="card mb-3 border-0 shadow" data-aos-duration="2000" data-aos="fade-left">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img alt="..." class="img-fluid rounded-4 p-2" src="{{ asset('assets/image/PPDB/syarat.jpg') }}" style="max-height: 300px">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold" style="color: #4a397e">Jalur Prestasi</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                        <div class="line" data-aos-duration="3000" data-aos="fade-right"></div>
                                        <button class="btn btn-smas mt-5">Lihat Selengkapnya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 border-0 shadow" data-aos-duration="2000" data-aos="fade-right">
                            <div class="row g-0">
                                <div class="col-md-8 order-md-1 order-2">
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold" style="color: #4a397e">Jalur Umum</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                        <div class="line" data-aos-duration="3000" data-aos="fade-left"></div>
                                        <button class="btn btn-smas mt-5">Lihat Selengkapnya</button>
                                    </div>
                                </div>
                                <div class="col-md-4 order-md-2 order-1">
                                    <img alt="..." class="img-fluid rounded-4 p-2" src="{{ asset('assets/image/PPDB/syarat.jpg') }}" style="max-height: 300px">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="">
                    <h3>Berita PPDB</h3>
                    <div class="smooth-line"></div>
                </div>
                <div class="carousel slide rounded-4 my-3 p-3 shadow" data-bs-interval="3000" data-bs-ride="carousel" id="ppdbCarousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="">
                                <div class="card ppdb-news text-bg-dark position-relative overflow-hidden border-0 shadow" onclick="handleCardClick()">
                                    <img alt="..." class="card-img" src="{{ asset('assets/image/PPDB/syarat.jpg') }}">
                                    <div class="card-img-overlay position-absolute">
                                        <h5 class="card-title">Pendaftaran PPDB SMA, SMK, dan SLB Tahun 2023 Tahap 1 Segera Dibuka</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer....</p>
                                        <p class="card-text" style="font-size: small"><i class="fa-solid fa-calendar"></i> 30 Januari 2024</p>
                                        <button class="btn d-sm-none text-white">Selengkapnya <i class="fa-solid fa-arrow-up-right-from-square"></i></button>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Add other cards as needed -->

                        <div class="carousel-item">
                            <a href="">
                                <div class="card ppdb-news text-bg-dark position-relative overflow-hidden border-0 shadow" onclick="handleCardClick()">

                                    <img alt="..." class="card-img" src="{{ asset('assets/image/PPDB/daftar1.jpeg') }}">
                                    <div class="card-img-overlay position-absolute">
                                        <h5 class="card-title">Pendaftaran PPDB SMA, SMK, dan SLB Tahun 2023 Tahap 1 Segera Dibuka</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer....</p>
                                        <p class="card-text" style="font-size: small"><i class="fa-solid fa-calendar"></i> 30 Januari 2024</p>
                                        <button class="btn d-sm-none text-white">Selengkapnya <i class="fa-solid fa-arrow-up-right-from-square"></i></button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#ppdbCarousel" type="button">
                        <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#ppdbCarousel" type="button">
                        <span aria-hidden="true" class="carousel-control-next-icon"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

    </section>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
@endsection
