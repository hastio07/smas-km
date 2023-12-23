@extends('user.layouts.layoutUser')

@section('title', 'Kepsek')

@section('konten')

    <section style="margin-top: 110px;">
        <div class="carousel slide" id="carouselExampleCaptions" style="height: 90vh">
            <div class="carousel-indicators">
                <button aria-current="true" aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleCaptions" type="button"></button>
                <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleCaptions" type="button"></button>
                <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleCaptions" type="button"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img alt="..." class="d-block w-100" src="{{ asset('assets/image/carousel/carousel.jpeg') }}">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img alt="..." class="d-block w-100" src="{{ asset('assets/image/carousel/carousel2.png') }}">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleCaptions" type="button">
                <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleCaptions" type="button">
                <span aria-hidden="true" class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container my-5">
            <h5 class="ps-4">Sambutan Kepala Sekolah</h5>
            <div class="row">
                <div class="col-sm-6 p-4">
                    <img alt="..." class="img-fluid rounded" src="{{ asset('assets/image/kepsek.jpg') }}">
                </div>
                <div class="col-sm-6 p-4">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae culpa assumenda fugit a neque minus omnis ipsa delectus ducimus repellendus facere quas expedita eaque, magnam reprehenderit adipisci cum sequi! Voluptatibus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus cupiditate alias nam earum deleniti officiis ut placeat veniam. Quas recusandae asperiores aperiam sapiente, amet ipsam officiis rem unde ratione accusamus. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat quo nostrum eius error repellat alias! Ratione magnam quod distinctio illo voluptatum ea repellat cumque atque? Praesentium repellat nulla explicabo fuga!</p>
                </div>
            </div>
        </div>
    </section>
@endsection
