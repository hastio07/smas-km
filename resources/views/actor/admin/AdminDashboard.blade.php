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
                    <div class="card rounded-2 mb-3 p-3 count-teach">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="fw-bold mt-2">Total Guru</h5>
                            <div class="rounded-2 bg-primary d-flex justify-content-center align-items-center m-1 p-4 text-white shadow" style="height:30px; width: 30px;">
                                <i class="bi bi-mortarboard-fill"></i>
                            </div>
                        </div>
                        <h4 style="color: white;">35</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card rounded-2 mb-3 p-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="fw-bold mt-2">Total Siswa</h5>
                            <div class="rounded-2 bg-success d-flex justify-content-center align-items-center m-1 p-4 text-white shadow" style="height:30px; width: 30px;">
                                <i class="bi bi-mortarboard-fill"></i>
                            </div>
                        </div>
                        <h4>235</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card rounded-2 mb-3 p-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="fw-bold mt-2">Total Guru</h5>
                            <div class="rounded-2 bg-warning d-flex justify-content-center align-items-center m-1 p-4 text-white shadow" style="height:30px; width: 30px;">
                                <i class="bi bi-mortarboard-fill"></i>
                            </div>
                        </div>
                        <h4>35</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card rounded-2 mb-3 p-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="fw-bold mt-2">Total Guru</h5>
                            <div class="rounded-2 bg-danger d-flex justify-content-center align-items-center m-1 p-4 text-white shadow" style="height:30px; width: 30px;">
                                <i class="bi bi-mortarboard-fill"></i>
                            </div>
                        </div>
                        <h4>35</h4>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card rounded-2 mb-3 p-3">
                        <h5>Statitistik PPDB </h5>
                        <div class="position-absolute bg-success d-flex justify-content-center align-items-center rounded-2 end-0 top-0 m-2 p-4 text-white" style="height: 30px; width: 30px; margin-left: 10px;">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <div class="d-flex">
                                    <div class="rounded-2 bg-info d-flex justify-content-center align-items-center p-4 text-white shadow" style="height: 30px; width: 30px; margin-left: 10px;">
                                        <i class="bi bi-pencil-square"></i>
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
                                        <i class="bi bi-check2-circle"></i>
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
                                        <i class="bi bi-pencil-square"></i>
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
                            <h5 class="fw-bold mt-2">Total Guru</h5>
                            <div class="rounded-2 bg-info d-flex justify-content-center align-items-center m-1 p-4 text-white shadow" style="height:30px; width: 30px;">
                                <i class="bi bi-mortarboard-fill"></i>
                            </div>
                        </div>
                        <h4>35</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
