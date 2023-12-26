@extends('user.layouts.layoutUser')

@section('title', 'PPDB')

@push('styles')
    <link href="{{ asset('assets/css/ppdb.css') }}" rel="stylesheet">
@endpush

@section('konten')
    <Section style="margin-top: 100px;">
        <div class="container my-5 shadow">
            <div class="row">
                <div class="col-md-8">
                    <h5 class="text-center fw-bold my-5">Biodata Guru</h5>
                    <div class="row p-3">
                        <div class="col-md-7">
                            <img alt="..." class="img-thumbnail d-block mx-auto mb-3" src="{{ asset('assets/image/guru/guru3.jpg') }}" style="max-width: 270px; max-height: 290px;">
                        </div>
                        <div class="col-md-5">
                            <div class="mt-1">
                                <p class="fw-bold mb-0">Nama</p>
                                <p class="">Saiful Surjana M.Pd</p>
                            </div>
                            <div class="mt-1">
                                <p class="fw-bold mb-0">Jabatan</p>
                                <p class="">Waka kurikulum</p>
                            </div>
                            <div class="mt-1">
                                <p class="fw-bold mb-0">NIP</p>
                                <p class="">1532166346336</p>
                            </div>
                            <div class="mt-1">
                                <p class="fw-bold mb-0">Status</p>
                                <p class="">PNS</p>
                            </div>
                            <div class="mt-1">
                                <p class="fw-bold mb-0">Pendidikan</p>
                                <p class="">S1-Pendidikan Agama Islam</p>
                            </div>
                            <div class="mt-1">
                                <p class="fw-bold mb-0">Mataperlajaran</p>
                                <p class="">Kimia Syariah</p>
                            </div>
                            <div class="mt-1">
                                <p class="fw-bold mb-0">Tempat, Tanggal Lahir</p>
                                <p class="">Lampung, 30 Agustus 1981</p>
                            </div>
                            <div class="mt-1">
                                <p class="fw-bold mb-0">Alamat</p>
                                <p class="">Jl. Senopati, Blok A, No.12</p>
                            </div>
                            <div class="mt-1">
                                <p class="fw-bold mb-0">Telapon</p>
                                <p class="">-</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="px-3 border rounded my-4">
                        <h5 class="text-center fw-bold mb-5 my-4">Berita Terbaru</h5>
                        <a href="" class="text-decoration-none">
                            <div class="card border-0 shadow mb-2">
                                <div class="card-body d-flex">
                                    <img alt="..." class="img-thumbnail me-2" src="{{ asset('assets/image/guru/guru3.jpg') }}" style="max-width: 70px; max-height: 90px;">
                                    <div class="card-body p-0">
                                        <p class="card-title fw-bold">Prestasi Siswa Kelas XII</p>
                                        <p class="card-text mb-0" style="font-size: small">With supporting text below as a natural lead-in to additional content.</p>
                                        <p class="mb-0 mt-1 fst-italic text-muted" style="font-size: small"><i class="bi bi-calendar-event-fill"></i> 20-02-2024</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="text-decoration-none">
                            <div class="card border-0 shadow mb-2">
                                <div class="card-body d-flex">
                                    <img alt="..." class="img-thumbnail me-2" src="{{ asset('assets/image/guru/guru3.jpg') }}" style="max-width: 70px; max-height: 90px;">
                                    <div class="card-body p-0">
                                        <p class="card-title fw-bold">Antusias Class Meeting</p>
                                        <p class="card-text mb-0" style="font-size: small">With supporting text below as a natural lead-in to additional content.</p>
                                        <p class="mb-0 mt-1 fst-italic text-muted" style="font-size: small"><i class="bi bi-calendar-event-fill"></i> 20-02-2024</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
    </Section>
@endsection
