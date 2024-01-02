.@extends('main.layout.default')

@section('title', 'Visi & Misi')

@push('styles')
@endpush

@extends('main.layout.includes.carousel')
@section('content')
    <div class="container">
        <div class="m-3 rounded p-3">
            <h5 class="text-center">Visi dan Misi</h5>
            <div class="mt-5">
                <h5 class="fw-bold">Visi</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, eligendi! Recusandae veniam quasi rerum quaerat nobis eius necessitatibus iste suscipit sint repudiandae officia, possimus molestiae neque repellat officiis quisquam omnis.</p>
            </div>
            <div class="mt-5">
                <h5 class="fw-bold">Misi</h5>
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
@endsection
