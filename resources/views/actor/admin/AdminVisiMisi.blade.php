@extends('actor.admin.layouts.LayoutAdmin')

@section('title', 'Admin Profile')

@push('thispageonly')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <link href="summernote-bs5.css" rel="stylesheet">
    <script src="summernote-bs5.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.8/dist/sweetalert2.min.css" rel="stylesheet"> <!-- SweetAlert CSS -->
@endpush

@push('styles')
@endpush

@section('main-content')
    <div class="content-wrapper rounded p-3 shadow">
        <div class="row">
            <div class="col-md-7">
                <div class="h-100 mb-2 rounded p-2 shadow">
                    <label class="form-label" for="visi">Visi</label>
                    <textarea class="form-control summernote" id="misi" placeholder="Deskripsi Berita 1"></textarea>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card h-100 p-3">
                    <div class="delete-icon position-absolute bg-danger rounded p-2 text-white shadow" onclick="confirmDelete(2)" style="  top: 10px; right: 10px; cursor: pointer;">
                        <i class="fas fa-trash-alt"></i>
                    </div>
                    <div class="card-title">
                        <h5 class="fw-bold text-center">Visi</h5>
                        <div class="card-body">
                            <ol>
                                <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus, aspernatur consequatur deserunt debitis nemo quibusdam exercitationem adipisci? Et dicta quaerat soluta beatae autem. Dolorum nihil facilis est libero ipsam adipisci!</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-7">
                <div class="h-100 mb-2 rounded p-2 shadow">
                    <label class="form-label" for="visi">Misi</label>
                    <textarea class="form-control summernote" id="misi" placeholder="Deskripsi Berita 1"></textarea>
                </div>
            </div>
            <div class="col-md-5 position-relative">
                <div class="card h-100 p-3">
                    <div class="delete-icon position-absolute delete-icon position-absolute bg-danger rounded p-2 text-white shadow" onclick="confirmDelete(1)" style="  top: 10px; right: 10px; cursor: pointer;">
                        <i class="fas fa-trash-alt"></i>
                    </div>
                    <div class="card-title">
                        <h5 class="fw-bold text-center">Misi</h5>
                        <div class="card-body">
                            <ol>
                                <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus, aspernatur consequatur deserunt debitis nemo quibusdam exercitationem adipisci? Et dicta quaerat soluta beatae autem. Dolorum nihil facilis est libero ipsam adipisci!</li>
                                <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis hic cumque, nam debitis, maiores, eum deleniti ipsa dicta voluptates odit assumenda. Aperiam sed quam impedit veniam nostrum exercitationem ea modi.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eum dignissimos, harum reprehenderit ab repellendus, ut ipsam optio perferendis fugiat consequatur saepe, atque totam eveniet veniam deserunt doloremque odit quo!</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-7">
                <div class="h-100 mb-2 rounded p-2 shadow">
                    <label class="form-label" for="tujuan">Tujuan</label>
                    <textarea class="form-control summernote" id="tujuan" placeholder="Deskripsi Berita 1"></textarea>
                </div>
            </div>
            <div class="col-md-5 position-relative">
                <div class="card h-100 p-3">
                    <div class="delete-icon position-absolute delete-icon position-absolute bg-danger rounded p-2 text-white shadow" onclick="confirmDelete(1)" style="  top: 10px; right: 10px; cursor: pointer;">
                        <i class="fas fa-trash-alt"></i>
                    </div>
                    <div class="card-title">
                        <h5 class="fw-bold text-center">Tujuan</h5>
                        <div class="card-body">
                            <ol>
                                <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus, aspernatur consequatur deserunt debitis nemo quibusdam exercitationem adipisci? Et dicta quaerat soluta beatae autem. Dolorum nihil facilis est libero ipsam adipisci!</li>
                                <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis hic cumque, nam debitis, maiores, eum deleniti ipsa dicta voluptates odit assumenda. Aperiam sed quam impedit veniam nostrum exercitationem ea modi.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eum dignissimos, harum reprehenderit ab repellendus, ut ipsam optio perferendis fugiat consequatur saepe, atque totam eveniet veniam deserunt doloremque odit quo!</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.8/dist/sweetalert2.min.js"></script> <!-- SweetAlert JS -->
    <script>
        // Inisialisasi Summernote untuk setiap textarea dengan class 'summernote'
        $('.summernote').summernote({
            placeholder: ' ',
            tabsize: 2,
            height: 300
        });
    </script>
    <script>
        function confirmDelete(cardNumber) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Tambahkan logika penghapusan di sini berdasarkan nomor kartu
                    deleteCard(cardNumber);
                }
            });
        }

        function deleteCard(cardNumber) {
            // Tambahkan logika penghapusan sesuai nomor kartu di sini
            Swal.fire(
                'Terhapus!',
                `Kartu ${cardNumber} telah dihapus.`,
                'success'
            );
        }
    </script>
@endsection
