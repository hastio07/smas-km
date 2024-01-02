@extends('main.layout.default')

@section('title', 'Sambutan Kepala Sekolah')

@extends('main.layout.includes.carousel')
@section('content')
    <section>
        <div class="container" style="padding-bottom: 70px;">
            <div class="my-5 py-5">
                <div class="mb-4">
                    <h3 class="fw-bold">Sambutan Kepala Sekolah</h3>
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
