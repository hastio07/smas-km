@extends('user.layouts.layoutUser')

@section('title', 'PPDB')

@push('styles')
    <link href="{{ asset('assets/css/ppdb.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@10" rel="stylesheet">
@endpush

@section('konten')
    <section style="margin-top: 100px;">
        <div class="container my-3 rounded p-3 pt-5 shadow">
            <div class="progress-container d-flex justify-content-between position-relative container mb-5">
                <div class="progress position-absolute" id="progress"></div>
                <div class="circle d-flex align-items-center justify-content-center active bg-primary-emphasis"><i class="bi bi-person-fill"></i></div>
                <div class="circle d-flex align-items-center justify-content-center bg-smas shadow"><i class="bi bi-arrow-clockwise"></i></div>
                <div class="circle d-flex align-items-center justify-content-center bg-smas shadow"><i class="bi bi-file-earmark-break"></i></div>
                <div class="circle d-flex align-items-center justify-content-center bg-smas shadow"><i class="bi bi-check2-all"></i></div>
            </div>
            <div class="output-message active mt-4" id="pesan1">
                <h3>Formulir Penerimaan Siswa Baru</h3>
                <h5>SMAS Kartikatama Kota Metro</h5>
                <form class="mt-4">
                    <div class="bg-danger my-4 rounded p-1 ps-3 text-white shadow">
                        <div class="d-flex gap-2">
                            <i class="bi bi-megaphone"></i>
                            <p class="fw-bold">Penting !</p>
                        </div>
                        <p class="mb-0">Pastika data yang anda masukan sesuai dengan sebagaimana adanya, jika terjadi kesalahan maka diluar tanggung jawab pihak PPDB SMAS Kartikatama Kota Metro</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <img alt="..." class="img-thumbnail d-block mx-auto mb-3" src="{{ asset('assets/image/siswa.jpg') }}" style="max-width: 170px; max-height: 190px;">
                            <div class="mb-3">
                                <label class="form-label" for="foto">Upload Foto</label>
                                <input class="form-control" id="foto" type="file">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="nama">Nama</label>
                                <input class="form-control" id="nama" placeholder="Nama Lengkap" type="text">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="ttl">Tanggal Lahir</label>
                                <input class="form-control" id="ttl" placeholder="dd-mm-yy" type="password">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="nisn">NISN</label>
                                <input class="form-control" id="nisn" placeholder="NISN" type="number">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="alamat">Alamat</label>
                                <input class="form-control" id="alamat" placeholder="Alamat" type="text">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="asal">Asal Sekolah</label>
                                <input class="form-control" id="alamat" placeholder="asal" type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="jenis">Jenis Pendaftaran</label>
                                <select class="form-select" id="jenis">
                                    <option selected>-- Pilih Jenis Pendaftaran --</option>
                                    <option value="1">Siswa Baru</option>
                                    <option value="2">Siswa Pindahan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="jenis">Jurusan</label>
                                <select class="form-select" id="jenis">
                                    <option selected>-- Pilih Jurusan</option>
                                    <option value="1">IPA</option>
                                    <option value="2">IPS</option>
                                </select>
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
                                <label class="form-label" for="ayah">Nama Ayah</label>
                                <input class="form-control" id="ayah" placeholder="Nama Ayah" type="text">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="hasil_ayh">Penghasilan Ayah</label>
                                <input class="form-control" id="hasil_ayh" placeholder="Pengasilan Ayah" type="text">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="ibu">Nama Ibu</label>
                                <input class="form-control" id="ibu" placeholder="Nama Ibu" type="text">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="hasil_ibu">Penghasilan Ibu</label>
                                <input class="form-control" id="hasil_ibu" placeholder="Penghasilan Ibu" type="text">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="telephone">No. Telephone/WA</label>
                                <input class="form-control" id="telephone" placeholder="No. Telephone/WA" type="text">
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="output-message my-5" id="pesan2">
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
            <div class="output-message" id="pesan3">
                <div class="bg-danger my-4 rounded p-1 ps-3 text-white shadow">
                    <div class="d-flex gap-2">
                        <i class="bi bi-megaphone"></i>
                        <p class="fw-bold">Penting !</p>
                    </div>
                    <p class="mb-0">Pastikan berkas yang anda upload sesuai dengan sebagaimana adanya, jika terjadi kesalahan maka diluar tanggung jawab pihak PPDB SMAS Kartikatama Kota Metro</p>
                </div>

                <label class="fw-bold text-muted mb-1" for="foto">Foto 3x4</label>
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

                <label class="fw-bold text-muted mb-1" for="ijazah">Ijazah/Surat Keterangan Lulus</label>
                <div class="inpt-doc d-flex justify-content-between align-items-center mb-3 rounded p-3" id="ijazah">
                    <div class="bg-secondary d-flex justify-content-center align-items-center" style="height: 30px; width:30px; border-radius: 50%;">
                        <i class="bi bi-file-earmark-minus-fill text-muted"></i>
                    </div>
                    <p class="mb-0 ms-3" id="uploadStatus2">Dokumen Belum Diupload</p>
                    <form action="#" class="d-flex align-items-center" enctype="multipart/form-data" method="post">
                        <input class="form-control-file" id="fileInput2" onchange="updateUploadStatus(2)" style="display: none;" type="file">
                        <label class="btn btn-secondary mb-0 text-white" for="fileInput2">Upload</label>
                    </form>
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
            <div class="output-message" id="pesan4">
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

            </div>
            <div class="row mt-4">
                <div class="col">
                    <button class="btn bg-smas" disabled id="prev"><i class="bi bi-arrow-left"></i> Prev</button>
                </div>
                <div class="col text-end">
                    <button class="btn bg-smas" id="next">Next <i class="bi bi-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Sertakan jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Sertakan SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        // bring elements from the DOM
        const progress = document.getElementById("progress");
        const prev = document.getElementById("prev");
        const next = document.getElementById("next");
        const circles = document.querySelectorAll(".circle");
        const outputMessages = document.querySelectorAll(".output-message");

        let currentActive = 1;

        next.addEventListener("click", () => {
            if (currentActive < circles.length) {
                currentActive++;
                update();
            }
        });

        prev.addEventListener("click", () => {
            if (currentActive > 1) {
                currentActive--;
                update();
            }
        });

        function update() {
            const progressWidth = ((currentActive - 1) / (circles.length - 1)) * 100 + "%";
            progress.style.width = progressWidth;

            circles.forEach((circle, ind) => {
                if (ind < currentActive) {
                    circle.classList.add("active");
                } else {
                    circle.classList.remove("active");
                }
            });

            outputMessages.forEach((pesan, ind) => {
                if (ind === currentActive - 1) {
                    pesan.classList.add("active");
                } else {
                    pesan.classList.remove("active");
                }
            });

            prev.disabled = currentActive === 1;
            next.disabled = currentActive === circles.length;
        }

        // Inisialisasi tampilan awal
        update();
    </script>
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
        $(document).ready(function() {
            // Tambahkan event click pada tombol "Next"
            $('#next').click(function() {
                Swal.fire({
                    title: "Selamat",
                    text: "Anda Behasil Melaju Ketahap Selanjutnya",
                    icon: "success"
                });
            });
        });
    </script>
@endsection
