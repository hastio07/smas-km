<div class="carousel slide rounded mt-3" id="carousel-sambutan">
    <div class="carousel-indicators">
        <button aria-current="true" aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carousel-sambutan" type="button"></button>
        <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carousel-sambutan" type="button"></button>
        <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carousel-sambutan" type="button"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="5000">
            <img alt="..." class="mh-100 object-fit-cover rounded-4 d-block w-100" height="900" src="{{ asset('assets/image/carousel/carousel.jpeg') }}">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="5000">
            <img alt="..." class="mh-100 object-fit-cover rounded-4 d-block w-100" height="900" src="{{ asset('assets/image/carousel/carousel2.png') }}">
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
