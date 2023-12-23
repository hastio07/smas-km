@extends('user.layouts.layoutUser')

@section('title', 'Home')

@section('konten')
    <section>
        <div class="container" style="margin-top: 90px;">
            <div class="mt-4 p-3">
                <div class="carousel slide rounded-carousel" data-bs-ride="carousel" id="carouselExampleAutoplaying">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img alt="..." class="d-block w-100" src="{{ asset('assets/image/carousel/carousel.jpeg') }}">
                        </div>
                        <div class="carousel-item">
                            <img alt="..." class="d-block w-100" src="{{ asset('assets/image/carousel/carousel2.png') }}">
                        </div>
                    </div>
                    <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleAutoplaying" type="button">
                        <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleAutoplaying" type="button">
                        <span aria-hidden="true" class="carousel-control-next-icon"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="card mb-3 mt-3 border-0 p-2">
                <h3 class="fw-bold">Sambutan Kepala Sekolah</h3>
                <div class="row g-0">
                    <div class="col-md-4">
                        <img alt="..." class="img-fluid rounded-start rounded" src="{{ asset('assets/image/kepsek.jpg') }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <a href="/sambutan">
                                <button class="btn btn-success">Baca Selengkapnya</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <h3 class="text-center">Lorem Ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur fugiat numquam unde quos harum commodi, quam repudiandae a sequi, eveniet eaque blanditiis. Similique eos recusandae alias praesentium cum officia expedita!</p>
                <div class="row">
                    <div class="col-sm-3">
                        <img alt="..." class="img-thumbnail" src="https://images.freeimages.com/images/large-previews/d9c/bees-1391145.jpg">
                    </div>
                    <div class="col-sm-3">
                        <img alt="..." class="img-thumbnail" src="https://images.freeimages.com/images/large-previews/d9c/bees-1391145.jpg">
                    </div>
                    <div class="col-sm-3">
                        <img alt="..." class="img-thumbnail" src="https://images.freeimages.com/images/large-previews/d9c/bees-1391145.jpg">
                    </div>
                    <div class="col-sm-3">
                        <img alt="..." class="img-thumbnail" src="https://images.freeimages.com/images/large-previews/d9c/bees-1391145.jpg">
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <h3 class="text-center">Lorem Ipsum</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur fugiat numquam unde quos harum commodi, quam repudiandae a sequi, eveniet eaque blanditiis. Similique eos recusandae alias praesentium cum officia expedita!</p>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card h-100 mb-3 border-0" style="background: rgba(233, 232, 232, 0.336)">
                            <div class="row g-0">
                                <div class="col-md-4 d-flex align-items-center justify-content-center p-3">
                                    <img alt="..." class="img-fluid rounded" src="{{ asset('assets/image/siswa1.jpg') }}">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-body-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos possimus atque in inventore ipsum.</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card h-100 mb-3 border-0" style="background: rgba(233, 232, 232, 0.336)">
                            <div class="row g-0">
                                <div class="col-md-4 d-flex align-items-center justify-content-center p-3">
                                    <img alt="..." class="img-fluid rounded" src="{{ asset('assets/image/siswa2.jpg') }}">
                                </div>
                                <div class="col-md-8">
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
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center justify-content-center mt-3">
                        <iframe height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1" width="560"></iframe>
                    </div>
                    <div class="col-md-6 d-flex align-items-center justify-content-center mt-3">
                        <iframe height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1" width="560"></iframe>
                    </div>
                </div>
            </div>
            <div class="card mb-3 mt-5 border-0 p-2">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="fw-bold">Lorem Ipsum!</h3>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <button class="btn btn-success">Selengkapnya</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img alt="..." class="img-fluid rounded-start rounded" src="https://images.freeimages.com/images/large-previews/bca/bees-1239460.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
