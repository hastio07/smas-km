@extends('actor.admin.layouts.LayoutAdmin')

@section('title', 'Admin Teacher')

@push('thispageonly')
    <link href="{{ asset('vendor/datatables.net-dt/css/jquery.dataTables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/datatables.net-responsive-dt/css/responsive.dataTables.min.css') }}" rel="stylesheet" />
@endpush

@section('main-content')
    <div class="content-wrapper rounded p-3 shadow">
        <div class="card">
            <div class="card-header">
                <h4>Data Guru</h4>
            </div>
            <div class="card-body">
                <!-- Button trigger modal -->
                <button class="btn border-primary text-primary mb-2 shadow" data-bs-target="#exampleModal" data-bs-toggle="modal" type="button">
                    Tambah Data <i class="fa-solid fa-plus"></i>
                </button>

                <!-- Modal -->
                <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="exampleModal" tabindex="-1">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header bg-white">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Guru</h1>
                                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                            </div>
                            <div class="modal-body">
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-2">
                                                <label class="form-label" for="nama">Nama Guru</label>
                                                <input class="form-control" id="nama" placeholder="Nama Guru" type="text">
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label" for="jabatan">Jabatan</label>
                                                <select aria-label="Jabatan guru" class="form-select form-select-lg mb-3" id="status">
                                                    <option selected>Jabatan Guru</option>
                                                    <option value="1">Kepala Sekolah</option>
                                                    <option value="2">Waka Kurikulum</option>
                                                    <option value="3">Waka Kesiswaan</option>
                                                </select>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label" for="nip">NIP</label>
                                                <input class="form-control" id="nip" placeholder="NIP Guru" type="number">
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label" for="status">Status Kepegawaian</label>
                                                <select aria-label="Status Kepegawaian Guru" class="form-select form-select-lg mb-3" id="status">
                                                    <option selected>Status Kepegawaian Guru</option>
                                                    <option value="1">PNS</option>
                                                    <option value="2">Honorer</option>
                                                    <option value="3">P3K</option>
                                                </select>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label" for="mapel">Mata Pelajaran</label>
                                                <input class="form-control" id="mapel" placeholder="Mata Pelajaran Diampu" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-2">
                                                <label class="form-label" for="pendidikan">Pendidikan</label>
                                                <input class="form-control" id="pendidikan" placeholder="Pendidikan Terakhir Guru" type="text">
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label" for="ttl">Tempat, Tanggal Lahir</label>
                                                <input class="form-control" id="ttl" placeholder="Place, DD-Mont-YYYY" type="text">
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label" for="alamat">Alamat</label>
                                                <input class="form-control" id="alamat" placeholder="Alamat Guru" type="text">
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label" for="hp">Telephone</label>
                                                <input class="form-control" id="hp" placeholder="Nomor Handphone" type="text">
                                            </div>
                                        </div>
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
                            <th>Jabatan</th>
                            <th>NIP</th>
                            <th>Status</th>
                            <th>Pendidikan</th>
                            <th>Mata Pelajaran</th>
                            <th>TTL</th>
                            <th>Alamat</th>
                            <th>Handphone</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Waka Kurikulum</td>
                            <td>1532166346336</td>
                            <td>PNS</td>
                            <td>S1-Pendidikan Agama Islam</td>
                            <td>Kimia Syariah</td>
                            <td>Lampung, 30 Agustus 1981</td>
                            <td>Jl. Senopati, Blok A, No.12</td>
                            <td> - </td>
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
                            <td>Tenaga Pendidik</td>
                            <td>1532166312836</td>
                            <td>PNS</td>
                            <td>S1-Pendidikan Matematika</td>
                            <td>Kimia Syariah</td>
                            <td>Lampung, 30 Agustus 1981</td>
                            <td>Jl. Senopati, Blok A, No.12</td>
                            <td> - </td>
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
                            <th>Jabatan</th>
                            <th>NIP</th>
                            <th>Status</th>
                            <th>Pendidikan</th>
                            <th>Mata Pelajaran</th>
                            <th>TTL</th>
                            <th>Alamat</th>
                            <th>Handphone</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>

                {{-- jabatan dan status kepegawaian --}}
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="h-100 mt-2 rounded p-3 shadow">
                            <p class="fw-bold">List Jabatan</p>
                            <div class="mb-2">
                                <div class="row">
                                    <div class="col-xl-9">
                                        <input class="form-control" id="pendidikan" placeholder="Ex: Waka Kurikulum" type="text">
                                    </div>
                                    <div class="col-xl-3">
                                        <button class="btn border-success shadow"><i class="fa-solid fa-plus text-success"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2 mt-4">
                                <ol class="list-unstyled">
                                    <li class="border-bottom d-flex justify-content-between align-items-center p-0">waka Kurikulum<button class="btn"><i class="fa-solid fa-trash text-danger"></i></button></li>
                                    <li class="border-bottom d-flex justify-content-between align-items-center p-0">weka Kemahasiswaan <button class="btn"><i class="fa-solid fa-trash text-danger"></i></button></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="h-100 mt-2 rounded p-3 shadow">
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
                                    <li class="border-bottom d-flex justify-content-between align-items-center p-0">PNS <button class="btn"><i class="fa-solid fa-trash text-danger"></i></button></li>
                                    <li class="border-bottom d-flex justify-content-between align-items-center p-0">P3K <button class="btn"><i class="fa-solid fa-trash text-danger"></i></button></li>
                                    <li class="border-bottom d-flex justify-content-between align-items-center p-0">Honorer <button class="btn"><i class="fa-solid fa-trash text-danger"></i></i></button></li>
                                </ol>
                            </div>
                        </div>
                    </div>
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
@endsection
