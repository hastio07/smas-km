@extends('main.layout.default')

@section('title', 'PPDB')

@push('styles')
    <link href="{{ asset('assets/css/css-content/user/ppdb.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@10" rel="stylesheet">
@endpush

@section('content')
    <section class="pt-3">
        <div class="container">
            <div class="my-3 rounded p-3 shadow">
                <div class="output-message active mt-4" id="pesan">
                    <h3 class="display-4" style="color: #4a397e">Formulir Penerimaan Siswa Baru</h3>
                    <h5 style="color: #2d2150">SMAS Kartikatama Kota Metro</h5>
                    <div class="line"></div>
                    <form class="mt-4">
                        <div class="tolak text-muted my-4 rounded p-3 ps-3 shadow">
                            <h5 class="fw-bold mb-2"><i class="fa-solid fa-triangle-exclamation"></i> Penting !</h5>
                            <p>Pastika data yang anda masukan sesuai dengan sebagaimana adanya dan pastikan tidak ada kesalahan input, jika terjadi kesalahan maka diluar tanggung jawab pihak PPDB SMAS Kartikatama Kota Metro</p>
                            <p class="fst-italic">*Pastikan Email yang anda gunakan selalu aktif, karena hasil pendaftaran akan dikirimkan ke Email yang didaftarkan</p>
                            <p class="fst-italic mb-0">*Jika sudah melewati tanggal pengumuan yang sudah ditentukan tidak ada notifikasi email harap segera menghubungi tim PPDB SMAS kartikatama Kota Metro melalui kontak yang tertera</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                {{-- <img alt="..." class="img-thumbnail d-block mx-auto mb-3" src="{{ asset('assets/image/siswa.jpg') }}" style="max-width: 170px; max-height: 190px;"> --}}
                                <div class="mb-3">
                                    <label class="fw-bold text-muted mb-1" for="foto">Foto 3x4</label>
                                    <p class="fst-italic text-danger mb-0" style="font-size:small;">*Batas ukuran file 600Kb</p>
                                    <div class="inpt-doc d-flex justify-content-between align-items-center mb-4 rounded p-3" id="foto">
                                        <div class="bg-secondary d-flex justify-content-center align-items-center" style="height: 30px; width:30px; border-radius: 50%;">
                                            <i class="bi bi-file-earmark-minus-fill text-muted"></i>
                                        </div>
                                        <p class="mb-0 ms-3" id="uploadStatus1">Dokumen Belum Diupload</p>
                                        <form action="#" class="d-flex align-items-center" enctype="multipart/form-data" method="post">
                                            <input class="form-control-file" id="fileInput1" onchange="updateUploadStatus(1)" style="display: none;" type="file">
                                            <label class="btn btn-secondary mb-0" for="fileInput1">Upload</label>
                                        </form>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="nama">Nama</label>
                                    <input class="form-control" id="name" placeholder="Nama Lengkap" type="text">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="kelamin">Jenis Kelamin</label>
                                    <select class="form-select" id="kelamin">
                                        <option selected>-- Pilih Jenis Kelamin --</option>
                                        <option value="1">Laki-Laki</option>
                                        <option value="2">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="tl">Tempat Lahir</label>
                                    <input class="form-control" id="tl" placeholder="Jakarta" type="text">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="tgl-lhr">Tanggal Lahir</label>
                                    <input class="form-control" id="tgl-lhr" placeholder="dd-mm-yy" type="text">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="agama">Agama</label>
                                    <select class="form-select" id="agama">
                                        <option selected>-- Pilih Agama</option>
                                        <option value="1">Islam</option>
                                        <option value="2">Hindu</option>
                                        <option value="1">Katholik</option>
                                        <option value="4">Budha</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="kb-khusus">Kebutuhan Khusus</label>
                                    <p class="fst-italic text-danger mb-0" style="font-size:small;">*Tuliskan kebutuhan khusus siswa, jika tidak ada tuliskan "TIDAK ADA"</p>
                                    <input class="form-control" id="kb-khusus" placeholder="Kebutuhan Khusus" type="text">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="alamat">Alamat</label>
                                    <p class="fst-italic text-danger mb-0" style="font-size:small;">*Tuliskan alamat secara lengkap dan jelas</p>
                                    <textarea class="form-control" id="alamat" placeholder="Jl. A. Yani No.283, Kebonjati, Kec. Cikole, Kota Sukabumi, Jawa Barat 43111" rows="4"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="tlp-siswa">No. Telephone Siswa</label>
                                    <input class="form-control" id="tlp-siswa" placeholder="No. Telephone/WA" type="text">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="tlp-siswa">Email</label>
                                    <p class="fst-italic text-danger mb-0" style="font-size:small;">*Pastikan penulisan e-mail tidak salah dan pastikan email aktif</p>
                                    <input class="form-control" id="tlp-siswa" placeholder="email@gmail.com" type="email">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="asal">Asal Sekolah</label>
                                    <input class="form-control" id="alamat" placeholder="asal" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="tlp-ortu">No. Telephone Orang Tua</label>
                                    <input class="form-control" id="tlp-ortu" placeholder="No. Telephone/WA" type="text">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="ayah">Nama Ayah</label>
                                    <input class="form-control" id="ayah" placeholder="Nama Ayah" type="text">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="pd-ayah">Pendidikan Ayah</label>
                                    <p class="fst-italic text-danger mb-0" style="font-size:small;">*Tuliskan pendidikan terakhir</p>
                                    <input class="form-control" id="pd-ayah" placeholder="Pendidikan Ayah" type="text">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="pkj-ayah">Pekerjaan Ayah</label>
                                    <input class="form-control" id="pkj-ayah" placeholder="Pekerjaan Ayah" type="text">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="hasil_ayh">Penghasilan Ayah</label>
                                    <input class="form-control" id="hasil_ayh" placeholder="Pengasilan Ayah" type="text">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="ayh-khusus">Kebutuhan Khusus Ayah</label>
                                    <p class="fst-italic text-danger mb-0" style="font-size:small;">*Tuliskan kebutuhan khusus ayah, jika tidak ada tuliskan "TIDAK ADA"</p>
                                    <input class="form-control" id="ayh-khusus" placeholder="Kebutuhan Khusus" type="text">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="ibu">Nama Ibu</label>
                                    <input class="form-control" id="ibu" placeholder="Nama Ibu" type="text">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="pd-ayah">Pendidikan Ibu</label>
                                    <p class="fst-italic text-danger mb-0" style="font-size:small;">*Tuliskan pendidikan terakhir</p>
                                    <input class="form-control" id="pd-ayah" placeholder="Pendidikan Ibu" type="text">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="pkj-ibu">Pekerjaan Ibu</label>
                                    <input class="form-control" id="pkj-ibu" placeholder="Pekerjaan Ibu" type="text">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="hasil_ibu">Penghasilan Ibu</label>
                                    <input class="form-control" id="hasil_ibu" placeholder="Penghasilan Ibu" type="text">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="ibu-khusus">Kebutuhan Khusus Ibu</label>
                                    <p class="fst-italic text-danger mb-0" style="font-size:small;">*Tuliskan kebutuhan khusus ayah, jika tidak ada tuliskan "TIDAK ADA"</p>
                                    <input class="form-control" id="ibu-khusus" placeholder="Kebutuhan Khusus" type="text">
                                </div>
                                <div class="mb-3">
                                    <label class="fw-bold text-muted mb-1" for="skhu">Surat Keterangan Hasil Ujian(SKHU)</label>
                                    <div class="inpt-doc d-flex justify-content-between align-items-center mb-3 rounded p-3" id="skhu">
                                        <div class="bg-secondary d-flex justify-content-center align-items-center" style="height: 30px; width:30px; border-radius: 50%;">
                                            <i class="bi bi-file-earmark-minus-fill text-muted"></i>
                                        </div>
                                        <p class="mb-0 ms-3" id="uploadStatus2">Dokumen Belum Diupload</p>
                                        <form action="#" class="d-flex align-items-center" enctype="multipart/form-data" method="post">
                                            <input class="form-control-file" id="fileInput2" onchange="updateUploadStatus(2)" style="display: none;" type="file">
                                            <label class="btn btn-secondary mb-0 text-white" for="fileInput2">Upload</label>
                                        </form>
                                    </div>
                                </div>
                                <label class="fw-bold text-muted mb-1" for="akte">Akte Kelahiran</label>
                                <div class="inpt-doc d-flex justify-content-between align-items-center mb-3 rounded p-3" id="akte">
                                    <div class="bg-secondary d-flex justify-content-center align-items-center" style="height: 30px; width:30px; border-radius: 50%;">
                                        <i class="bi bi-file-earmark-minus-fill text-muted"></i>
                                    </div>
                                    <p class="mb-0 ms-3" id="uploadStatus3">Dokumen Belum Diupload</p>
                                    <form action="#" class="d-flex align-items-center" enctype="multipart/form-data" method="post">
                                        <input class="form-control-file" id="fileInput3" onchange="updateUploadStatus(3)" style="display: none;" type="file">
                                        <label class="btn btn-secondary mb-0 text-white" for="fileInput3">Upload</label>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </form>
                    <a class="btn btn-smas rounded-4 justify-content-center align-items-center d-flex mt-4 border-0 py-2 text-center shadow" id="btnDaftar">
                        <h4 class="mb-0"> Daftar <i class="fa-solid fa-user-pen"></i></h4>
                    </a>
                </div>
                {{-- pesan dan card cetak kartu peserta --}}
                {{-- <div class="output-message my-5" id="pesan2">
                    <div class="proses text-muted gap-2 rounded p-3 shadow">
                        <i class="bi bi-arrow-clockwise fw-bold"></i> <span class="fw-bold">Sedang Proses</span>
                        <p class="mb-0 mt-2">Pendaftaran anda sedang diproses, harap menunggu pengumuman berikutnya, pengumuman akan diberitahukan melalui halaman ini atau bisa cek E-mail yang terdaftar</p>
                    </div>
                    <div class="terima text-muted mt-4 gap-2 rounded p-3 shadow">
                        <i class="bi bi-check2-circle fw-bold"></i> <span class="fw-bold">Selamat anda dinyatakan memenuhi kualifikasi untuk mendaftar di SMAS Kartikatama Kota Metro</span>
                        <p class="mb-0 mt-2">Silahkan masuk ketahap selanjutnya untuk upload berkas yang dibutuhkan</p>
                    </div>
                    <div class="tolak text-muted mt-4 gap-2 rounded p-3 shadow">
                        <i class="bi bi-x-circle"></i> <span class="fw-bold">Maaf! Anda dinyatakan tidak memenuhi kualifikasi untuk mendaftar di SMAS Kartikatama Kota Metro</span>
                        <p class="mb-0 mt-2">"Penolakan bukanlah tanda bahwa ada sesuatu yang salah untukmu, itu adalah tanda bahwa mereka salah untukmu."
                        <p class="fst-italic mt-3">- Sonya Parker</p>
                        </p>
                    </div>
                </div>
                <div class="output-message">
                    <div class="my-4 gap-2 rounded p-3 text-center">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <div class="bg-success d-flex justify-content-center align-items-center center-element" style="width: 50px; height: 50px; border-radius: 50%">
                                        <i class="bi bi-check2-circle fw-bold fs-1 text-white"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-4">Selamat anda dinyatakan lolos seleksi berkas untuk mendaftar di SMAS Kartikatama Kota Metro</h5>
                    </div>
                    <div class="container rounded border p-4">
                        <div class="row">
                            <div class="col-md-7">
                                <h4>Informasi Peserta</h4>
                                <div class="smooth-line"></div>
                                <div class="mt-4">
                                    <p class="fw-bold mb-0"><i class="bi bi-geo-alt-fill"></i> lokasi test</p>
                                    <p class="ms-3">SMAS Kartikatama Kota Metro, Jl. Kapten Tendean, Margorejo, Kec. Metro Sel., Kota Metro, Lampung 34111</p>
                                </div>
                                <div class="mt-1">
                                    <p class="fw-bold mb-0"><i class="bi bi-house-door-fill"></i> Ruang Ujian</p>
                                    <p class="ms-3">Ruang IPA 1, Lt. 3</p>
                                </div>
                                <div class="mt-1">
                                    <p class="fw-bold mb-0"><i class="bi bi-calendar-range"></i> Tanggal test</p>
                                    <p class="ms-3">Senin, 15 Januari 2024</p>
                                </div>
                                <div class="mt-1">
                                    <p class="fw-bold mb-0"><i class="bi bi-clock-fill"></i> Sesi Ujian</p>
                                    <p class="mb-0 ms-3">Sesi-2 (13:00 - 15:00)</p>
                                    <p class="text-danger fst-italic ms-3" style="font-size: small">* Harap datang 1 jam sebelum ujian dimulai</p>
                                </div>
                                <div class="mt-4">
                                    <h5>Peraturan</h5>
                                    <div class="smooth-line"></div>
                                    <ol class="mt-2 ps-4" style="font-size: small;">
                                        <li>Siswa datang 1 jam sebelum ujian</li>
                                        <li>Membawa kartu ujian</li>
                                        <li>Menggunakan baju kemja putih</li>
                                        <li>Memakai celana dasar</li>
                                        <li>Menggunakan rok (Bagi Perempuan)</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <h4>Informasi Peserta</h4>
                                <div class="smooth-line"></div>
                                <img alt="..." class="img-thumbnail mt-4" src="{{ asset('assets/image/siswa.jpg') }}" style="max-width: 170px; max-height: 190px;">
                                <div class="mt-4">
                                    <p class="fw-bold mb-0"><i class="bi bi-person-fill"></i> Nama Peserta</p>
                                    <p class="ms-3">M. Abdul Hakim</p>
                                </div>
                                <div class="mt-1">
                                    <p class="fw-bold mb-0"><i class="bi bi-person-badge-fill"></i></i> NISN</p>
                                    <p class="ms-3">012819389183874193891</p>
                                </div>
                                <div class="mt-1">
                                    <p class="fw-bold mb-0"><i class="bi bi-person-vcard-fill"></i> No. Peserta</p>
                                    <p class="ms-3">0128-1938-9183</p>
                                </div>
                            </div>
                            <button class="btn btn-success bg-smas mt-4">Cetak Kartu Ujian <i class="bi bi-printer"></i></button>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="mt-3 rounded p-4 shadow">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                </p>
            </div>
            <h3 class="mt-4">Lorem Ipsum is simply dummy</h3>
            <p>Lorem Ipsum is simply dummy</p>
            <div class="d-flex my-5 flex-wrap gap-3">
                <div class="d-inline-block bg-smas rounded-4 d-flex align-items-center mb-3 p-3">
                    <i class="fa-solid fa-phone fs-1 me-3"></i>
                    <span>087726754356</span>
                </div>
                <div class="d-inline-block bg-smas d-flex align-items-center rounded-4 mb-3 p-3">
                    <i class="fa-brands fa-whatsapp fs-1 me-3"></i>
                    <span>087726754356</span>
                </div>
            </div>


        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        function updateUploadStatus(formNumber) {
            const fileInput = document.getElementById(`fileInput${formNumber}`);
            const uploadStatus = document.getElementById(`uploadStatus${formNumber}`);

            if (fileInput.files.length > 0) {
                uploadStatus.textContent = fileInput.files[0].name;
            } else {
                uploadStatus.textContent = `Dokumen Belum Diupload (${formNumber})`;
            }
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var btnDaftar = document.getElementById('btnDaftar');
            btnDaftar.addEventListener('click', function() {
                Swal.fire({
                    title: 'Apakah Anda Yakin?',
                    text: 'Pastikan Email yang digunakan selalu aktif, karena hasil pendaftaran akan dikirimkan ke Email',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, Saya Yakin!',
                    cancelButtonText: 'Tidak, Batal',
                }).then((result) => {
                    // Jika pengguna mengklik "Ya, Saya Yakin!"
                    if (result.isConfirmed) {
                        // Tambahkan logika atau kode yang perlu dijalankan jika dikonfirmasi
                        // Misalnya, pindahkan pengguna ke halaman pendaftaran
                        window.location.href = '/MainPpdb';
                    }
                });
            });
        });
    </script>
@endsection
