@extends('main.layout.default')
@section('title', 'Contact')
@push('styles')
    <link href="{{ asset('assets/css/css-content/user/Home.css') }}" rel="stylesheet">
@endpush

@extends('main.layout.includes.carousel')
@section('content')
    <section>
        <div class="container my-5 p-3 text-center">
            <h3 class="fw-bold">Lorem Ipsum is simply dummy</h3>
            <p class="text-muted" style="font-size: small">Lorem Ipsum is simply</p>
            {{-- <div class="row">
                <div class="col-md-4">
                    <div class="d-flex gap-4">
                        <div class='d-flex justify-content-center align-items-center'>
                            <i class="fa-solid fa-house fs-1"></i>
                        </div>
                        <ul class="list-unstyled mb-0">
                            <li>Lorem Ipsum is simply</li>
                            <li>Lorem Ipsum is simply</li>
                            <li>Lorem Ipsum is simply</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex gap-4">
                        <div class='d-flex justify-content-center align-items-center'>
                            <i class="fa-solid fa-envelope fs-1"></i>
                        </div>
                        <ul class="list-unstyled mb-0">
                            <li>Lorem Ipsum is simply</li>
                            <li>Lorem Ipsum is simply</li>
                            <li>Lorem Ipsum is simply</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex gap-4">
                        <div class='d-flex justify-content-center align-items-center'>
                            <i class="fa-solid fa-phone fs-1"></i>
                        </div>
                        <ul class="list-unstyled mb-0">
                            <li>Lorem Ipsum is simply</li>
                            <li>Lorem Ipsum is simply</li>
                            <li>Lorem Ipsum is simply</li>
                        </ul>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-sm-6 col-xl-4 d-flex align-items-center justify-content-center mb-3">
                    <div class="d-flex gap-4 text-center">
                        <div class='d-flex justify-content-center align-items-center'>
                            <i class="fa-solid fa-house fs-1"></i>
                        </div>
                        <ul class="list-unstyled mb-0">
                            <li>Lorem Ipsum is simply</li>
                            <li>Lorem Ipsum is simply</li>
                            <li>Lorem Ipsum is simply</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4 d-flex align-items-center justify-content-center mb-3">
                    <div class="d-flex gap-4 text-center">
                        <div class='d-flex justify-content-center align-items-center'>
                            <i class="fa-solid fa-envelope fs-1"></i>
                        </div>
                        <ul class="list-unstyled mb-0">
                            <li>Lorem Ipsum is simply</li>
                            <li>Lorem Ipsum is simply</li>
                            <li>Lorem Ipsum is simply</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4 d-flex align-items-center justify-content-center mb-3">
                    <div class="d-flex gap-4 text-center">
                        <div class='d-flex justify-content-center align-items-center'>
                            <i class="fa-solid fa-phone fs-1"></i>
                        </div>
                        <ul class="list-unstyled mb-0">
                            <li>Lorem Ipsum is simply</li>
                            <li>Lorem Ipsum is simply</li>
                            <li>Lorem Ipsum is simply</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <div class="rounded-4 container mb-4 border p-5">
            <h3 class="fw-bold">Lorem Ipsum is simply dummy</h3>
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1"> Lorem Ipsum is simply</label>
                        <input class="form-control" id="exampleFormControlInput1" placeholder="" type="text">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Lorem Ipsum is simply</label>
                        <input class="form-control" id="exampleFormControlInput1" placeholder="" type="text">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1"> Lorem Ipsum is simply</label>
                        <input class="form-control" id="exampleFormControlInput1" placeholder="" type="text">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label" for="exampleFormControlInput1">Lorem Ipsum is simply</label>
                        <input class="form-control" id="exampleFormControlInput1" placeholder="" type="text">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="15"></textarea>
            </div>
            <button class="btn btn-smas">Submit</button>
        </div>
        <div class="container mb-4 px-0" data-aos-duration="2000" data-aos='fade-down'>
            <iframe allowfullscreen="" class="rounded-4" height="450" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.7658533311255!2d105.2973815760268!3d-5.141356051993925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40b9464c8e1355%3A0xa18bf3f399f79a31!2sSMAS%20Kartikatama%20Metro!5e0!3m2!1sid!2sid!4v1705254976739!5m2!1sid!2sid" width="100%"></iframe>
        </div>
    </section>
@endsection
