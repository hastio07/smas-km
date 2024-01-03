@extends('main.layout.default')

@section('title', 'Struktur Organisasi')

@push('styles')
@endpush

@extends('main.layout.includes.carousel')

@section('content')
    <div class="container mt-5">
        <div class="m-3 rounded p-3">
            <h3>Struktur Organisasi</h3>
            <div class="smooth-line"></div>
            <p class="my-5">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                It has survived not only five centuries, but also the leap into electronic typesetting
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                Lorem Ipsum is simply dummy text of the printing and typesetting industry
                Lorem Ipsum is simply dummy text of the printing and typesetting industry
            </p>
            <hr>
            <img alt="..." class="img-thumbnail d-block mx-auto my-5" src="{{ asset('assets/image/struktur.jpeg') }}">
            <hr>
            <div class="my-5">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    It has survived not only five centuries, but also the leap into electronic typesetting
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry
                </p>
            </div>
            <h3>Lorem Ipsum</h3>
        </div>
    </div>
@endsection
