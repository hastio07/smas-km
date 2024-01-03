@extends('actor.admin.layouts.LayoutAdmin')

@section('title', 'Admin Teacher')

@push('thispageonly')
    <link href="{{ asset('vendor/datatables.net-dt/css/jquery.dataTables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/datatables.net-responsive-dt/css/responsive.dataTables.min.css') }}" rel="stylesheet" />
@endpush

@section('main-content')
    <div class="content-wrapper rounded-4 p-3 shadow" style="height: 100vh">
        <div class="row">
            <div class="col-md-8">
                <div class="h-100 my-3 rounded border p-3">
                    <div class="mt-3">
                        <h4>Data Tenaga Pendidik</h4>
                    </div>
                    <hr>
                    <div class="mt-3 border p-3">
                        <!-- Button trigger modal -->
                        <button class="btn border-primary text-primary mb-2 shadow" data-bs-target="#exampleModal" data-bs-toggle="modal" type="button">
                            Tambah Data <i class="fa-solid fa-plus"></i>
                        </button>

                        <!-- Modal -->
                        <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="exampleModal" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header bg-white">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Guru</h1>
                                        <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="">
                                            <div class="mb-2">
                                                <label class="form-label" for="nama">Nama Guru</label>
                                                <input class="form-control" id="nama" placeholder="Nama Guru" type="text">
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label" for="nip">NIP</label>
                                                <input class="form-control" id="nip" placeholder="NIP Guru" type="number">
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label" for="status">Status Kepegawaian</label>
                                                <select aria-label="Status Kepegawaian" class="form-select form-select-lg mb-3" id="status">
                                                    <option selected>Status Kepegawaian</option>
                                                    <option value="1">Guru</option>
                                                    <option value="2">Staf</option>
                                                </select>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label" for="mapel">Mata Pelajaran</label>
                                                <input class="form-control" id="mapel" placeholder="Mata Pelajaran Diampu" type="text">
                                            </div>
                                            <div class="mb-2" id="dropArea">
                                                <form id="imageUploadForm">
                                                    <div class="form-group rounded border p-2">
                                                        <label class="custom-file-label btn btn-primary ms-1" for="imageInput">
                                                            <i class="bi bi-cloud-arrow-up"></i>
                                                        </label>
                                                        <span id="uploadText"> or drag the image here</span>
                                                        <input accept="image/*" class="custom-file-input" id="imageInput" style="display: none;" type="file">
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <img class="img-thumbnail" id="imagePreview" style="display: none; max-height:250px">
                                                    </div>
                                                </form>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer border-0 bg-white">
                                        <button class="btn btn-secondary" data-bs-dismiss="modal" type="button">Close</button>
                                        <button class="btn btn-primary" type="button">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="form-text mb-2">Tabel Yang Berisi terkait data guru</p>
                        <table class="display table" id="example2">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Status Kepegawaian</th>
                                    <th>NIP</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Guru</td>
                                    <td>1532166346336</td>
                                    <td>Agama Islam</td>
                                    <td> Image.jpg </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-6 p-0">
                                                <button class="btn border-danger">
                                                    <i class="fa-solid fa-trash text-danger"></i>
                                                </button>
                                            </div>
                                            <div class="col-md-6 p-0">
                                                <button class="btn border-info">
                                                    <i class="fa-solid fa-pen-to-square text-info"></i>
                                                </button>
                                            </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Thor Walton</td>
                                    <td>Staf</td>
                                    <td>1532166312836</td>
                                    <td>Matematika</td>
                                    <td> Foto.jpg </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-6 p-0">
                                                <button class="btn border-danger">
                                                    <i class="fa-solid fa-trash text-danger"></i>
                                                </button>
                                            </div>
                                            <div class="col-md-6 p-0">
                                                <button class="btn border-info">
                                                    <i class="fa-solid fa-pen-to-square text-info"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nama</th>
                                    <th>Status Kepegawaian</th>
                                    <th>NIP</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                {{-- status kepegawaian --}}
                <div class="h-100 my-3 rounded border p-3">
                    <p class="fw-bold">List Status Kepegawaian</p>
                    <div class="mb-2">
                        <div class="row">
                            <div class="col-xl-9">
                                <input class="form-control" id="pendidikan" placeholder="Ex: Pegawai Negeri Sipil " type="text">
                            </div>
                            <div class="col-xl-3">
                                <button class="btn border-success shadow"><i class="fa-solid fa-plus text-success"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="mb-2 mt-4">
                        <ol class="list-unstyled">
                            <li class="border-bottom d-flex justify-content-between align-items-center p-0">Guru <button class="btn"><i class="fa-solid fa-trash text-danger"></i></button></li>
                            <li class="border-bottom d-flex justify-content-between align-items-center p-0">Staff <button class="btn"><i class="fa-solid fa-trash text-danger"></i></button></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/datatables.net/js/jquery.dataTables.min.js') }} "></script>
        <script src="{{ asset('vendor/datatables.net-responsive/js/dataTables.responsive.min.js') }} "></script>
        <script src="{{ asset('assets/js/page/datatables.js') }}"></script>
        <script>
            DataTable.init()
        </script>
        {{-- Javascript Untuk Preview Gambar --}}
        <script>
            $(document).ready(function() {
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $('#imagePreview').attr('src', e.target.result).show();
                            $('#uploadText').text(input.files[0].name);
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                }

                $("#imageInput").change(function() {
                    readURL(this);
                });

                var dropArea = document.getElementById('dropArea');

                ['dragover', 'dragleave', 'drop'].forEach(eventName => {
                    dropArea.addEventListener(eventName, function(e) {
                        e.preventDefault();
                        dropArea.classList.remove('dragover'); // Remove the 'dragover' class in all cases

                        if (eventName === 'dragover') {
                            dropArea.classList.add('dragover');
                        } else if (eventName === 'drop' && e.dataTransfer.files.length > 0) {
                            $("#imageInput")[0].files = e.dataTransfer.files;
                            readURL($("#imageInput")[0]);
                        }
                    });
                });

                $("#imageUploadForm").submit(function(e) {
                    e.preventDefault();
                    alert('Image uploaded!');
                });
            });
        </script>
    @endsection
