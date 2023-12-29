@extends('actor.admin.layouts.LayoutAdmin')

@section('title', 'Admin')

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
                <p class="form-text mb-2">Datatables also provide responsive table</p>
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
                            <th>Telephone</th>
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
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
