@extends('main.layout.default')

@section('title', 'Sejarah Sekolah')

@push('styles')
@endpush

@extends('main.layout.includes.carousel')
@section('content')
    <div class="container mt-3">
        <div class="mt-5 rounded p-4">
            <h3>Kata Pengantar</h3>
            <div class="smooth-line"></div>
            <div class="row">
                <div class="col-md-7">
                    <p class="mt-5" style="text-align: justify">
                        Assalamu’alaikum Wr.Wb <br><br>

                        Puji syukur kami panjatkan kehadiran Allah SWT atas limpahan rahmat, hidayah dan inayahNya sehingga SD Muhammadiyah Wonogiri mampu mengimplementasi program managemen berbasis sekolah melalui optimalisasi digital. Menindaklanjuti instruksi/komitmen kementrian pendidikan dan kebudayaan nasional untuk melakukan perluasan dan pemerataan akses pendidikan, serta peningkatan tata kelola, akuntabilitas dan citra publik, maka upaya peningkatan pendidikan terus dilakukan dari tahun ke
                        tahun.

                        Era digital saat ini harus mampu menjadi sarana untuk mengembangkan program managemen berbasis sekolah, untuk bisa lebih cepat diakses oleh masyarakat dari berbagai informasi dalam dunia pendidikan. kemudahan dalam mengakses informasi pendidikan harus diberikan kepada masyarakat secara lengkap. Sehingga masyarakat bisa lebih detail mengetahui segala fasilitas dari berbagai lembaga pendidikan, Mulai dari kurikulum, sarana dan prasarana, tenaga pendidik, prestasi dan lain
                        sebagainya. Dengan demikian diharapkan dengan kemudahan itu masyarakat akan lebih cepat dalam memilih dan memilah lembaga pendidikan yang mana yang akan dituju.

                        Untuk itu SD Muhammadiyah Wonogiri memberikan kemudahan kepada masyarakat melalui website dengan laman : www.sdmuhwng.sch.id. Mudah mudahan Allah SWT memberikan petunjuk kepada kita semua dan SD Muhammadiyah Wonogiri semakin mendapat kepercayaan dari masyarakat.

                        Amin Ya Rabbal ‘Alamin <br><br>

                        Wassalamu’alaikum Wr.Wb
                    </p>
                </div>
            </div>
        </div>
        <hr>
        <div class="my-5 rounded p-4">
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-7">
                    <h3>Sejarah SMAS Kartikatama</h3>
                    <div class="line"></div>
                    <p class="mt-5" style="text-align: justify">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem corporis sapiente et esse rerum. Veniam voluptatem aliquam, distinctio architecto tempore dicta eius libero magnam cumque, dolorum ab sed quis saepe.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat recusandae numquam reiciendis officia consequuntur enim ut, sapiente, officiis cupiditate vitae aliquam architecto magni deleniti dignissimos qui ipsa quisquam iure illo. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas impedit blanditiis doloribus vero mollitia dicta expedita nemo cum voluptates magni voluptatem quasi eligendi architecto necessitatibus, sapiente, qui assumenda enim perspiciatis!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta eius adipisci facilis. Magnam illo libero animi at aut dolorem tenetur illum exercitationem dicta? Molestias earum, distinctio temporibus nisi ducimus debitis!
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi quidem voluptate impedit earum architecto necessitatibus repudiandae, perspiciatis temporibus nostrum assumenda ex ad minima eligendi accusamus facere quibusdam consequuntur excepturi nobis.
                    </p>
                    <img alt="..." class="img-fluid img-thumbnail rounded-4 mt-4" src="{{ asset('assets/image/carousel/carousel.jpeg') }}">
                </div>
            </div>
        </div>
    </div>
@endsection
