@extends('main.layout.default')

@section('title', 'PPDB')

@push('styles')
    <link href="{{ asset('assets/css/css-content/user/profil.css') }}" rel="stylesheet">
@endpush

@section('content')
    @include('layouts.includes.carousel')
    <section>
        <div class="container mt-5">
            <div class="m-3 rounded p-3 shadow">
                <h3>Kata Pengantar</h3>
                <div class="smooth-line"></div>
                <p class="mt-4" style="text-align: justify">
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
            <div class="m-3 rounded p-3 shadow">
                <h3>Visi dan Misi</h3>
                <div class="smooth-line"></div>
                <div class="row mt-2">
                    <div class="col-md-6 mt-3">
                        <div class="h-100 rounded border p-3 shadow">
                            <h5 class="fw-bold text-center">Visi</h5>
                            <ol class="mt-3">
                                <li>Menciptakan lingkungan pembelajaran yang inspiratif dan inovatif.</li>
                                <li>Menjadi pusat pengembangan karakter dan kepribadian unggul.</li>
                                <li>Menjadi sekolah rujukan dalam meningkatkan mutu pendidikan.</li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="h-100 rounded border p-3 shadow">
                            <h5 class="fw-bold text-center">Misi</h5>
                            <ol class="mt-3">
                                <li>Mengembangkan potensi siswa dalam bidang akademis, seni, dan olahraga.</li>
                                <li>Menanamkan nilai-nilai moral, etika, dan kepemimpinan kepada seluruh anggota sekolah.</li>
                                <li>Melibatkan orang tua dan masyarakat dalam proses pendidikan.</li>
                                <li>Menerapkan teknologi modern dalam pembelajaran untuk menciptakan keterampilan yang relevan dengan masa depan.</li>
                                <li>Menyediakan sarana dan prasarana yang mendukung proses belajar-mengajar yang efektif.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-3 rounded p-3 shadow">
                <h3>Struktur Organisasi</h3>
                <div class="smooth-line"></div>
                <img alt="..." class="img-thumbnail d-block mx-auto mt-4" src="{{ asset('assets/image/struktur.jpeg') }}">
            </div>
            <div class="m-3 rounded p-3 shadow">
                <h3>Guru dan Karyawan</h3>
                <div class="smooth-line"></div>
                <div class="mt-3">
                    <h5 class="fw-bold"><i class="bi bi-mortarboard-fill"></i> Guru</h5>
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 mt-2">
                                    <a class="text-decoration-none text-black" href="/DetailGuru">
                                        <div class="card custom-card border-0 p-2">
                                            <img alt="..." class="card-img-top image-fluid" src="{{ asset('assets/image/guru/guru1.jpg') }}">
                                            <div class="card-body text-start">
                                                <p class="card-text fw-bold mb-0 text-start">Aisyah Mutamani M.Pd</p>
                                                <div class="card-line"></div>
                                                <p class="card-text mt-2">NIP. 1532166346336</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="fw-bold mt-4"><i class="bi bi-person-workspace"></i> Karyawan</h5>
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 mt-2">
                                    <a class="text-decoration-none text-black" href="/DetailGuru">
                                        <div class="card custom-card border-0 p-2">
                                            <img alt="..." class="card-img-top image-fluid" src="{{ asset('assets/image/guru/TU2.jpeg') }}">
                                            <div class="card-body text-start">
                                                <p class="card-text fw-bold mb-0 text-start">Aisyah Mutamani M.Pd</p>
                                                <div class="card-line"></div>
                                                <p class="card-text mt-2">NIP. 1532166346336</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 mt-2">
                                    <a class="text-decoration-none text-black" href="/DetailGuru">
                                        <div class="card custom-card border-0">
                                            <img alt="..." class="card-img-top image-fluid" src="{{ asset('assets/image/guru/TU1.jpeg') }}">
                                            <div class="card-body text-start">
                                                <p class="card-text fw-bold mb-0 text-start">Aisyah Mutamani M.Pd</p>
                                                <div class="card-line"></div>
                                                <p class="card-text mt-2">NIP. 1532166346336</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
