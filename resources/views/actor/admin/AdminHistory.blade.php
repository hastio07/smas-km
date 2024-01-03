@extends('actor.admin.layouts.LayoutAdmin')

@section('title', 'Admin Sejarah')

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

    <section>
        <div class="">
            <label class="form-label" for="deskripsi2">Sejarah Sekolah</label>
            <textarea class="form-control summernote" id="deskripsi2" placeholder="Deskripsi Berita 2"></textarea>
        </div>
    </section>

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
