@extends('actor.admin.layouts.LayoutAdmin')

@section('title', 'Admin News')

@push('thispageonly')
    <link href="{{ asset('vendor/datatables.net-dt/css/jquery.dataTables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/datatables.net-responsive-dt/css/responsive.dataTables.min.css') }}" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <link href="summernote-bs5.css" rel="stylesheet">
    <script src="summernote-bs5.js"></script>
@endpush

@push('styles')
    <link href="{{ asset('assets/css/css-content/user/news-admin.css') }}" rel="stylesheet">
@endpush

@section('main-content')
    <div class="content-wrapper rounded p-3 shadow">
        <div class="card">
            <div class="card-header">
                <h4>Data Berita</h4>
            </div>
            <div class="card-body">
                {{-- table list news --}}
                <p class="form-text mb-2">Tabel Yang Berisi terkait data berita</p>
                <table class="display table p-2 shadow" id="example2">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Tanggal</th>
                            <th>Kategori</th>
                            <th>Post By</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ashton Cox Juara 1 Lomba Mancing</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis delectus nisi id vero culpa.</td>
                            <td>13 Januari 2024</td>
                            <td>Lomba</td>
                            <td>Administrator</td>
                            <td>Image.jpeg</td>
                            <td>
                                <div class="row">
                                    <div class="col-md-6 p-0">
                                        <button class="btn">
                                            <i class="fa-solid fa-trash text-danger"></i>
                                        </button>
                                    </div>
                                    <div class="col-md-6 p-0">
                                        <button class="btn">
                                            <i class="fa-solid fa-pen-to-square text-info"></i>
                                        </button>
                                    </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Ashton Cox Juara 1 Lomba Mancing</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. </td>
                            <td>13 Januari 2024</td>
                            <td>Lomba</td>
                            <td>Administrator</td>
                            <td>Image.jpeg</td>
                            <td>
                                <div class="row">
                                    <div class="col-md-6 p-0">
                                        <button class="btn">
                                            <i class="fa-solid fa-trash text-danger"></i>
                                        </button>
                                    </div>
                                    <div class="col-md-6 p-0">
                                        <button class="btn">
                                            <i class="fa-solid fa-pen-to-square text-info"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Tanggal</th>
                            <th>Kategori</th>
                            <th>Post By</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>

                {{-- input Berita & Kategori Berita --}}
                <div class="row my-3">
                    <div class="col-md-6">
                        <div class="h-100 mt-2 rounded p-3 shadow"">
                            <p class="fw-bold">Form Tambah Berita</p>
                            <form action="">
                                <div class="mt-1">
                                    <div class="mb-2">
                                        <label class="form-label" for="judul">Judul Berita</label>
                                        <input class="form-control" id="judul" placeholder="Judul Berita" type="text">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label" for="kategori">Kategori</label>
                                        <select aria-label="Kategori Berita" class="form-select form-select-lg mb-3" id="kategori">
                                            <option selected>Kategori Berita</option>
                                            <option value="1">Kepala Sekolah</option>
                                            <option value="2">Waka Kurikulum</option>
                                            <option value="3">Waka Kesiswaan</option>
                                        </select>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label" for="deskripsi">Deskripsi</label>
                                        <textarea class="form-control" id="deskripsi" placeholder="Deskripsi Berita"></textarea>
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
                                                <img class="img-thumbnail" id="imagePreview" style="display: none; max-height:150px">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </form>
                            <button class="btn btn-primary">Upload <i class="fa-solid fa-cloud-arrow-up"></i></button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="h-100 mt-2 rounded p-3 shadow">
                            <p class="fw-bold">List Kategori Berita</p>
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
                                    <li class="border-bottom d-flex justify-content-between align-items-center p-0">PNS <button class="btn"><i class="fa-solid fa-trash text-danger"></i></button></li>
                                    <li class="border-bottom d-flex justify-content-between align-items-center p-0">P3K <button class="btn"><i class="fa-solid fa-trash text-danger"></i></button></li>
                                    <li class="border-bottom d-flex justify-content-between align-items-center p-0">Honorer <button class="btn"><i class="fa-solid fa-trash text-danger"></i></button></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#deskripsi').summernote({
            placeholder: '',
            tabsize: 2,
            height: 300
        });
    </script>

    <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables.net/js/jquery.dataTables.min.js') }} "></script>
    <script src="{{ asset('vendor/datatables.net-responsive/js/dataTables.responsive.min.js') }} "></script>
    <script src="{{ asset('assets/js/page/datatables.js') }}"></script>

    <script>
        $('.date').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: 'dd-mm-yyyy'
        }).on('changeDate', function(e) {
            console.log(e.target.value);
        });
    </script>
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
