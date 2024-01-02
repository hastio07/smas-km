@extends('main.layout.default')

@section('title', 'Struktur Organisasi')

@push('styles')
@endpush

@extends('main.layout.includes.carousel')

@section('content')
    <div class="container mt-5">
        <div class="m-3 rounded p-3 shadow">
            <h3>Struktur Organisasi</h3>
            <div class="smooth-line"></div>
            <img alt="..." class="img-thumbnail d-block mx-auto mt-4" src="{{ asset('assets/image/struktur.jpeg') }}">
        </div>
    </div>
@endsection
