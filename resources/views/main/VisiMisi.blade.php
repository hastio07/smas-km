.@extends('main.layout.default')

@section('title', 'Visi & Misi')

@push('styles')
@endpush

@extends('main.layout.includes.carousel')
@section('content')
    <div class="container">
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
    </div>
@endsection
