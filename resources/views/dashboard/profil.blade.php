@extends('dashboard/template')

@section('title','Profil Siswa')

@section('siswa','active')

@section('content')
          <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4">
                                <div class="table-responsive table--no-card m-b-30">
                                    <h4>Profil Siswa</h4>
                                    <table class="table table-borderless table-striped table-earning mt-3">
                                        <tbody>
                                            <tr>
                                                <td>NIS</td>
                                                <td>: {{$all->idSiswa}}</td>
                                            </tr>
                                            <tr>
                                                <td><NAV>NISN</NAV></td>
                                                <td>: {{$all->nisnSiswa}}</td>
                                            </tr>
                                            <tr>
                                                <td>Nama</td>
                                                <td>: {{$all->namaSiswa}}</td>
                                            </tr>
                                            <tr>
                                                <td>Kelas</td>
                                                <td>: {{$all->kelasSiswa}}</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>: {{$all->emailSiswa}}</td>
                                            </tr>
                                            <tr>
                                                <td>Angkatan</td>
                                                <td>: {{$all->angkatanSiswa}}</td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Lahir</td>
                                                <td>: {{$all->tanggalLahirSiswa}}</td>
                                            </tr>
                                            <tr>
                                                <td>Tempat Lahir</td>
                                                <td>: {{$all->tempatLahirSiswa}} </td>
                                            </tr>
                                            <tr>
                                                <td>Wali Siswa</td>
                                                <td>: {{$all->namaWali}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-4"></div>
                        </div>
                       
                    </div>
                </div>
            </div>

@endsection