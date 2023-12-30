@extends('main.layout.default')

@section('title', 'Sambutan Kepala Sekolah')

@section('content')
    <section>
        <div class="container" style="padding-bottom: 70px;">
            <div class="mt-5">
                <div class="carousel slide rounded-4" id="carousel-sambutan">
                    <div class="carousel-indicators">
                        <button aria-current="true" aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carousel-sambutan" type="button"></button>
                        <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carousel-sambutan" type="button"></button>
                        <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carousel-sambutan" type="button"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="5000">
                            <img alt="..." class="mh-100 object-fit-cover rounded-4 d-block w-100" height="500" src="{{ asset('assets/image/carousel/carousel.jpeg') }}">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img alt="..." class="mh-100 object-fit-cover rounded-4 d-block w-100" height="500" src="{{ asset('assets/image/carousel/carousel2.png') }}">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carousel-sambutan" type="button">
                        <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carousel-sambutan" type="button">
                        <span aria-hidden="true" class="carousel-control-next-icon"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="my-5 py-5">
                <div class="mb-4">
                    <h3 class="fw-bold text-center">Sambutan Kepala Sekolah</h3>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <img alt="..." class="object-fit-cover d-block rounded-4 float-start mw-100 me-3" height="250" src="{{ asset('assets/image/kepsek.jpg') }}" width="312">
                        <p class="text-break lh-lg" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae culpa assumenda fugit a neque minus omnis ipsa delectus ducimus repellendus facere quas expedita eaque, magnam reprehenderit adipisci cum sequi! Voluptatibus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus cupiditate alias nam earum deleniti officiis ut placeat veniam. Quas recusandae asperiores aperiam sapiente, amet ipsam officiis
                            rem unde ratione
                            accusamus. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat quo nostrum eius error repellat alias! Ratione magnam quod distinctio illo voluptatum ea repellat cumque atque? Praesentium repellat nulla explicabo fuga!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
