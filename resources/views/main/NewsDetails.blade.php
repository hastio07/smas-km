@extends('main.layout.default')

@section('title', 'Detail Berita')

@push('styles')
@endpush

@section('content')
    <section class="container my-5">
        <div class="row">
            <div class="col-lg-8 mb-3" data-aos-duration="3000" data-aos="fade-up">
                <div class="rounded p-4 shadow">
                    <img alt="" class="img-fluid d-block img-thumbnail rounded-4 mx-auto mb-3" src="{{ asset('assets/image/PPDB/daftar1.jpeg') }}">
                    <h3 class="fw-bold mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ipsum enim quod quasi ut deserunt.</h3>
                    <p class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque excepturi, cumque, doloremque ipsum quia aperiam officiis quos distinctio soluta, animi reiciendis fugiat nostrum. Blanditiis ipsam dolore hic explicabo in magnam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil vel distinctio quos qui quis? Dolore architecto, nemo magni voluptate nulla, odit cumque tempore doloremque delectus, cupiditate repellendus. Libero, aspernatur labore!</p>
                    <p class="text-muted" style="font-size: small"> <i class="fa-regular fa-clock"></i> 1 Jam yang lalu</p>
                    <div class="border-bottom mt-3 pb-3">
                        <div class="row">
                            <div class="col-sm-4 mb-3">
                                <p class="mb-0"><i class="fa-regular fa-calendar"></i> 30/01/2024</p>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <p class="mb-0"><i class="fa-solid fa-tag"></i> PPDB</p>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <p class="mb-0"><i class="fa-regular fa-user"></i> Admin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3" data-aos-duration="3000" data-aos="fade-down">
                <form class="form-inline mb-4">
                    <div class="input-group">
                        <input class="form-control" placeholder="Search..." type="text">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <a class="text-decoration-none" href="">
                    <div class="card mb-2 border-0 shadow">
                        <div class="card-body d-flex">
                            <img alt="..." class="img-thumbnail me-2" src="{{ asset('assets/image/guru/guru3.jpg') }}" style="max-width: 70px; max-height: 90px;">
                            <div class="card-body p-0">
                                <p class="card-title fw-bold">Prestasi Siswa Kelas XII</p>
                                <p class="card-text mb-0" style="font-size: small">With supporting text below as a natural lead-in to additional content.</p>
                                <p class="text-muted mb-0 mt-1" style="font-size: small ;"><i class="bi bi-calendar-event-fill"></i> 20-02-2024</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="text-decoration-none" href="">
                    <div class="card mb-2 border-0 shadow">
                        <div class="card-body d-flex">
                            <img alt="..." class="img-thumbnail me-2" src="{{ asset('assets/image/guru/guru3.jpg') }}" style="max-width: 70px; max-height: 90px;">
                            <div class="card-body p-0">
                                <p class="card-title fw-bold">Antusias Class Meeting</p>
                                <p class="card-text mb-0" style="font-size: small">With supporting text below as a natural lead-in to additional content.</p>
                                <p class="text-muted mb-0 mt-1" style="font-size: small"><i class="bi bi-calendar-event-fill"></i> 20-02-2024</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="text-decoration-none" href="">
                    <div class="card mb-2 border-0 shadow">
                        <div class="card-body d-flex">
                            <img alt="..." class="img-thumbnail me-2" src="{{ asset('assets/image/guru/guru3.jpg') }}" style="max-width: 70px; max-height: 90px;">
                            <div class="card-body p-0">
                                <p class="card-title fw-bold">Prestasi Siswa Kelas XII</p>
                                <p class="card-text mb-0" style="font-size: small">With supporting text below as a natural lead-in to additional content.</p>
                                <p class="text-muted mb-0 mt-1" style="font-size: small ;"><i class="bi bi-calendar-event-fill"></i> 20-02-2024</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="text-decoration-none" href="">
                    <div class="card mb-2 border-0 shadow">
                        <div class="card-body d-flex">
                            <img alt="..." class="img-thumbnail me-2" src="{{ asset('assets/image/guru/guru3.jpg') }}" style="max-width: 70px; max-height: 90px;">
                            <div class="card-body p-0">
                                <p class="card-title fw-bold">Antusias Class Meeting</p>
                                <p class="card-text mb-0" style="font-size: small">With supporting text below as a natural lead-in to additional content.</p>
                                <p class="text-muted mb-0 mt-1" style="font-size: small"><i class="bi bi-calendar-event-fill"></i> 20-02-2024</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection
