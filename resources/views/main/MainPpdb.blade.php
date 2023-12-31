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
                <h4 class="mb-0">Daftarkan Diri Anda Disini </h4>
            </a>
            <div class="row my-5">
                <div class="col-md-6">
                    <div class="rounded-4 mb-3 p-3 shadow" data-aos-duration="2000" data-aos="fade-up" style="border-top: 10px solid #4a397e">
                        <div class="mb-3">
                            <img alt="upload baner ppdb" class="img-fluid rounded" src="{{ asset('assets/image/PPDB/alur.jpg') }}" style="max-width:100%; height:auto;">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="rounded-4 mb-3 p-3 shadow" data-aos-duration="2000" data-aos="fade-down" style="border-bottom: 10px solid #4a397e">
                        <div class="mb-3">
                            <img alt="upload baner ppdb" class="img-fluid rounded" src="{{ asset('assets/image/PPDB/syarat.jpg') }}" style="max-width:100%; height:auto;">
                        </div>
                    </div>
                </div>

                <div class="my-5">
                    <h3>Jalur Penerimaan</h3>
                    <div class="smooth-line"></div>
                    <div class="rounded-4 my-3 p-3 shadow">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-3 border-0 shadow">
                                    <img alt="..." class="m-2 rounded" src="{{ asset('assets/image/PPDB/syarat.jpg') }}">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Seleksei Jalur Prestasi</h5>
                                        <a class="btn btn-smas rounded-4 mt-2" href="#">Lihat Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-3 border-0 shadow">
                                    <img alt="..." class="m-2 rounded" src="{{ asset('assets/image/PPDB/syarat.jpg') }}">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Seleksei Jalur Umum</h5>
                                        <a class="btn btn-smas rounded-4 mt-2" href="#">Lihat Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-3 border-0 shadow">
                                    <img alt="..." class="m-2 rounded" src="{{ asset('assets/image/PPDB/syarat.jpg') }}">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Seleksei Jalur Hafiz</h5>
                                        <a class="btn btn-smas rounded-4 mt-2" href="#">Lihat Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="my-3">
                    <div class="">
                        <h3>Berita PPDB</h3>
                        <div class="smooth-line"></div>
                    </div>
                    <div class="rounded-4 my-3 p-3 shadow">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-3 border-0 shadow">
                                    <img alt="..." class="m-2 rounded" src="{{ asset('assets/image/PPDB/daftar2.jpg') }}">
                                    <div class="card-body">
                                        <h5 class="card-title">Pendaftaran PPDB SMA, SMK, dan SLB Tahun 2023 Tahap 1 Segera Dibuka</h5>
                                        <p style="font-size: small"><i class="fa-solid fa-calendar"></i> 30 Januari 2024</p>
                                        <a class="btn btn-smas rounded-4 mt-2" href="#">Lihat Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-3 border-0 shadow">
                                    <img alt="..." class="m-2 rounded" src="{{ asset('assets/image/PPDB/daftar1.jpeg') }}">
                                    <div class="card-body">
                                        <h5 class="card-title">Pendaftaran PPDB SMA, SMK, dan SLB Tahun 2023 Tahap 1 Segera Dibuka</h5>
                                        <p style="font-size: small"><i class="fa-solid fa-calendar"></i> 30 Januari 2024</p>
                                        <a class="btn btn-smas rounded-4 mt-2" href="#">Lihat Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-3 border-0 shadow">
                                    <img alt="..." class="m-2 rounded" src="{{ asset('assets/image/PPDB/syarat.jpg') }}">
                                    <div class="card-body">
                                        <h5 class="card-title mb-2">Persyaratan Peserta Didik Nonformal dan Informal" serta "Persyaratan bagi Lulusan dari Luar Negeri</h5>
                                        <p style="font-size: small"><i class="fa-solid fa-calendar"></i> 30 Januari 2024</p>
                                        <a class="btn btn-smas rounded-4 mt-2" href="#">Lihat Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-angles-left"></i></a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-angles-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
@endsection
