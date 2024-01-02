<div class="carousel slide mt-3" id="carouselAll">
    <div class="carousel-indicators" id="carousel-indicators"></div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="5000">
            <img alt="..." class="mh-100 object-fit-cover d-block w-100" height="900" src="{{ asset('assets/image/carousel/carousel.jpeg') }}">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="5000">
            <img alt="..." class="mh-100 object-fit-cover d-block w-100" height="900" src="{{ asset('assets/image/carousel/carousel2.png') }}">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="5000">
            <img alt="..." class="mh-100 object-fit-cover d-block w-100" height="900" src="{{ asset('assets/image/PPDB/daftar2.jpg') }}">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="5000">
            <img alt="..." class="mh-100 object-fit-cover d-block w-100" height="900" src="{{ asset('assets/image/PPDB/daftar2.jpg') }}">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>

    </div>
    <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselAll" type="button">
        <span aria-hidden="true" class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Sebelumnya</span>
    </button>
    <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselAll" type="button">
        <span aria-hidden="true" class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Berikutnya</span>
    </button>
</div>

@push('scripts-carousel')
    <script>
        // Script to create carousel indicators dynamically
        document.addEventListener('DOMContentLoaded', function() {
            var carouselIndicators = document.getElementById('carousel-indicators');
            var carouselItems = document.querySelectorAll('.carousel-inner .carousel-item');
            var totalItems = carouselItems.length;

            for (var i = 0; i < totalItems; i++) {
                var button = document.createElement('button');
                button.setAttribute('aria-label', 'Slide ' + (i + 1));
                button.setAttribute('data-bs-slide-to', i);
                button.setAttribute('data-bs-target', '#carouselAll');
                button.type = 'button';
                carouselIndicators.appendChild(button);
            }

            // Add 'active' class to the first indicator
            carouselIndicators.children[0].classList.add('active');
        });
    </script>
@endpush
