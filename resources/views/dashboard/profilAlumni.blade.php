@extends('dashboard/template')

@section('title','Profil Alumni')

@section('alumni','active')

@section('content')
          <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4">
                                <div class="table-responsive table--no-card m-b-30">
                                    <h4>Profil Alumni</h4>
                                    <table class="table table-borderless table-striped table-earning mt-3">
                                        <tbody>
                                            <tr>
                                                <td>NIS</td>
                                                <td>: {{$all->idSiswa}}</td>
                                            </tr>
                                            <tr>
                                                <td>Nama</td>
                                                <td>: {{$all->namaAlumni}}</td>
                                            </tr>
                                            <tr>
                                                <td>Institusi</td>
                                                <td>: {{$all->institusiAlumni}}</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>: {{$all->emailAlumni}}</td>
                                            </tr>
                                            <tr>
                                                <td>Telepon</td>
                                                <td>: {{$all->teleponAlumni}}</td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td>: {{$all->alamatAlumni}}</td>
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