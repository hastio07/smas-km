@extends('layouts.default')
@section('title', 'Home')
@push('styles')
    <link href="{{ asset('assets/css/css-content/user/home.css') }}" rel="stylesheet">
@endpush
@section('header')
    @include('layouts.includes.header')
@endsection
@section('content')
    <div class="container" style="padding-bottom: 70px;">
        <div class="mt-5">
            <div class="carousel slide rounded-4" data-bs-ride="carousel" id="caraousel">
                <div class="carousel-indicators">
                    <button aria-current="true" aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#caraousel" type="button"></button>
                    <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#caraousel" type="button"></button>
                    <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#caraousel" type="button"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <img alt="..." class="mh-100 object-fit-cover rounded-4 d-block w-100" height="500" src="{{ asset('assets/image/carousel/carousel.jpeg') }}">
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <img alt="..." class="mh-100 object-fit-cover rounded-4 d-block w-100" height="500" src="{{ asset('assets/image/carousel/carousel2.png') }}">
                    </div>
                </div>
                <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#caraousel" type="button">
                    <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#caraousel" type="button">
                    <span aria-hidden="true" class="carousel-control-next-icon"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="mt-5">
            <div class="mb-4">
                <h3 class="fw-bold">Sambutan Kepala Sekolah</h3>
            </div>
            <div class="row">
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <img alt="..." class="mw-100 h-100 object-fit-cover d-block rounded-4" src="{{ asset('assets/image/kepsek.jpg') }}">
                </div>
                <div class="col-md-8">
                    <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="/sambutan">
                        <button class="btn bg-smas">Baca Selengkapnya</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <h3 class="text-center">Lorem Ipsum</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur fugiat numquam unde quos harum commodi, quam repudiandae a sequi, eveniet eaque blanditiis. Similique eos recusandae alias praesentium cum officia expedita!</p>
            <div class="row">
                <div class="col-md-4 col-lg-3 mb-2">
                    <img alt="..." class="img-thumbnail img-fluid d-block" src="https://images.freeimages.com/images/large-previews/d9c/bees-1391145.jpg">
                </div>
                <div class="col-md-4 col-lg-3 mb-2">
                    <img alt="..." class="img-thumbnail img-fluid d-block" src="https://images.freeimages.com/images/large-previews/d9c/bees-1391145.jpg">
                </div>
                <div class="col-md-4 col-lg-3 mb-2">
                    <img alt="..." class="img-thumbnail img-fluid d-block" src="https://images.freeimages.com/images/large-previews/d9c/bees-1391145.jpg">
                </div>
                <div class="col-md-4 col-lg-3 mb-2">
                    <img alt="..." class="img-thumbnail img-fluid d-block" src="https://images.freeimages.com/images/large-previews/d9c/bees-1391145.jpg">
                </div>
            </div>

        </div>
        <div class="mt-5">
            <h3 class="text-center">Lorem Ipsum</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur fugiat numquam unde quos harum commodi, quam repudiandae a sequi, eveniet eaque blanditiis. Similique eos recusandae alias praesentium cum officia expedita!</p>
            <div class="row">
                <div class="col-sm-6 mb-2">
                    <div class="card h-100 mb-3 border-0" style="background: rgba(233, 232, 232, 0.336)">
                        <div class="row g-0">
                            <div class="col-xl-4 d-flex align-items-center justify-content-center p-3">
                                <img alt="..." class="img-fluid rounded" src="{{ asset('assets/image/siswa1.jpg') }}">
                            </div>
                            <div class="col-xl-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-body-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos possimus atque in inventore ipsum.</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mb-2">
                    <div class="card h-100 mb-3 border-0" style="background: rgba(233, 232, 232, 0.336)">
                        <div class="row g-0">
                            <div class="col-xl-4 d-flex align-items-center justify-content-center p-3">
                                <img alt="..." class="img-fluid rounded" src="{{ asset('assets/image/siswa2.jpg') }}">
                            </div>
                            <div class="col-xl-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-body-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia voluptatum et aliquid repellendus non molestiae.</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <h3 class="text-center">Lorem Ipsum</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur fugiat numquam unde quos harum commodi, quam repudiandae a sequi, eveniet eaque blanditiis. Similique eos recusandae alias praesentium cum officia expedita!</p>
            <div class="row my-3">
                <div class="col-md-6 mb-sm-3">
                    <div style="height: 315px;">
                        {{-- <iframe class="h-100 w-100" src="https://www.youtube-nocookie.com/embed/tgbNymZ7vqY?autoplay=0"></iframe> --}}
                    </div>
                </div>
                <div class="col-md-6 mb-sm-3">
                    <div style="height: 315px;">
                        {{-- <iframe class="h-100 w-100" src="https://www.youtube-nocookie.com/embed/tgbNymZ7vqY?autoplay=0"></iframe> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class="row">
                <div class="col-md-8 mt-2">
                    <h3 class="fw-bold ">Lorem Ipsum!</h3>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <button class="btn bg-smas">Selengkapnya</button>
                </div>
                <div class="col-md-4 mt-2 ord d-flex justify-content-center align-items-center">
                    <img alt="Kepala Sekolah" class="w-100 h-100 object-fit-cover d-block rounded-4" src="https://images.freeimages.com/images/large-previews/bca/bees-1239460.jpg">
                </div>
            </div>
        </div>

    </div>
@endsection
@section('footer')
    @include('layouts.includes.footer')
@endsection
