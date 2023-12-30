@extends('actor.admin.layouts.LayoutAdmin')

@section('title', 'Admin')

@push('styles')
    <link href="{{ asset('assets/css/css-content/admin/dashboard.css') }}" rel="stylesheet">
@endpush
@section('main-content')
    <section>
        <div class="content-wrapper rounded p-3 shadow">
            <div class="row">
                <div class="col-md-3">
                    <div class="card rounded-2 count-teach mb-3 p-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="fw-bold mt-2">Total Guru</h5>
                            <div class="rounded-2 bg-primary d-flex justify-content-center align-items-center m-1 p-4 text-white shadow" style="height:30px; width: 30px;">
                                <i class="fa-solid fa-chalkboard-user"></i>
                            </div>
                        </div>
                        <h4>35</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card rounded-2 mb-3 p-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="fw-bold mt-2">Total Siswa</h5>
                            <div class="rounded-2 bg-success d-flex justify-content-center align-items-center m-1 p-4 text-white shadow" style="height:30px; width: 30px;">
                                <i class="fa-solid fa-users-line"></i>
                            </div>
                        </div>
                        <h4>235</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card rounded-2 mb-3 p-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="fw-bold mt-2">Total Foto</h5>
                            <div class="rounded-2 bg-warning d-flex justify-content-center align-items-center m-1 p-4 text-white shadow" style="height:30px; width: 30px;">
                                <i class="fa-solid fa-images"></i>
                            </div>
                        </div>
                        <h4>35</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card rounded-2 mb-3 p-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="fw-bold mt-2">Total Video</h5>
                            <div class="rounded-2 bg-danger d-flex justify-content-center align-items-center m-1 p-4 text-white shadow" style="height:30px; width: 30px;">
                                <i class="fa-solid fa-film"></i>
                            </div>
                        </div>
                        <h4>35</h4>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card rounded-2 mb-3 p-3">
                        <h5>Statitistik PPDB </h5>
                        <div class="position-absolute bg-success d-flex justify-content-center align-items-center rounded-2 end-0 top-0 m-2 p-4 text-white" style="height: 30px; width: 30px; margin-left: 10px;">
                            <i class="fa-solid fa-chart-column"></i>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <div class="d-flex">
                                    <div class="rounded-2 bg-info d-flex justify-content-center align-items-center p-4 text-white shadow" style="height: 30px; width: 30px; margin-left: 10px;">
                                        <i class="fa-solid fa-users-viewfinder"></i>
                                    </div>
                                    <div class="m-1 ms-2">
                                        <p class="fw-bold mb-0">543</p>
                                        <p class="text-muted" style="font-size: small;">Pendaftar</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="d-flex">
                                    <div class="rounded-2 bg-success d-flex justify-content-center align-items-center p-4 text-white shadow" style="height: 30px; width: 30px; margin-left: 10px;">
                                        <i class="fa-solid fa-check-double"></i>
                                    </div>
                                    <div class="m-1 ms-2">
                                        <p class="fw-bold mb-0">350</p>
                                        <p class="text-muted" style="font-size: small;">Diterima</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="d-flex">
                                    <div class="rounded-2 bg-danger d-flex justify-content-center align-items-center p-4 text-white shadow" style="height: 30px; width: 30px; margin-left: 10px;">
                                        <i class="fa-solid fa-x"></i>
                                    </div>
                                    <div class="m-1 ms-2">
                                        <p class="fw-bold mb-0">193</p>
                                        <p class="text-muted" style="font-size: small;">Ditolak</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card rounded-2 mb-3 p-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="fw-bold mt-2">Total Berita</h5>
                            <div class="rounded-2 bg-info d-flex justify-content-center align-items-center m-1 p-4 text-white shadow" style="height:30px; width: 30px;">
                                <i class="fa-regular fa-newspaper"></i>
                            </div>
                        </div>
                        <h4>35</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
