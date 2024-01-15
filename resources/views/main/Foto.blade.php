@extends('main.layout.default')
@section('title', 'Foto Gallery')
@push('styles')
    <link href="{{ asset('assets/css/css-content/user/Gallery.css') }}" rel="stylesheet">
@endpush

@extends('main.layout.includes.carousel')
@section('content')
    <div class="photo container mt-4">
        <h3 class="fw-bold mb-4">Lorem Ipsum is simply dummy</h3>
        <div class="row my-4">
            <div class="col-md-4 col-lg-3 h-100 mb-2">
                <div class="card rounded-4 p-2">
                    <a class='d-flex justify-content-center align-items-center' data-lightbox="gallery" data-title="Image 1" href="{{ asset('assets/image/PPDB/daftar1.jpeg') }}">
                        <img alt="Image 1" class="img-fluid img-thumbnail object-fit-cover rounded" src="{{ asset('assets/image/PPDB/daftar1.jpeg') }}" style="width: 300px; height: 300px;">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 h-100 mb-2">
                <div class="card rounded-4 p-2">
                    <a class='d-flex justify-content-center align-items-center' data-lightbox="gallery" data-title="Image 2" href="{{ asset('assets/image/PPDB/daftar2.jpg') }}">
                        <img alt="Image 2" class="img-fluid img-thumbnail object-fit-cover rounded" src="{{ asset('assets/image/PPDB/daftar2.jpg') }}" style="width: 300px; height: 300px;">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 h-100 mb-2">
                <div class="card rounded-4 p-2">
                    <a class='d-flex justify-content-center align-items-center' data-lightbox="gallery" data-title="Image 3" href="{{ asset('assets/image/PPDB/alur.jpg') }}">
                        <img alt="Image 3" class="img-fluid img-thumbnail object-fit-cover rounded" src="{{ asset('assets/image/PPDB/alur.jpg') }}" style="width: 300px; height: 300px;">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 h-100 mb-2">
                <div class="card rounded-4 p-2">
                    <a class='d-flex justify-content-center align-items-center' data-lightbox="gallery" data-title="Image 4" href="{{ asset('assets/image/PPDB/baner.jpg') }}">
                        <img alt="Image 4" class="img-fluid img-thumbnail object-fit-cover rounded" src="{{ asset('assets/image/PPDB/baner.jpg') }}" style="width: 300px; height: 300px;">
                    </a>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
