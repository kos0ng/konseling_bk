@extends('dashboard/template')

@section('title','Data Siswa')

@section('siswa','active')

@section('content')

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="title-5 m-b-35">Data Siswa</h3>
                            <button type="button" class="btn btn-success mr-3" data-toggle="modal" data-target="#tambahSiswa" style="margin-bottom: 1%">
            Tambah Data
        </button>

        <div class="modal fade" id="tambahSiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 5%">
            <div class="modal-dialog" role="document">
                <form method="post" action="/dashboard/insertSiswa">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
                        </div>
                        <div class="modal-body">
 
                            {{ csrf_field() }}
 
                            <label>NISN</label>
                            <div class="form-group">
                                <input type="text" name="nisn" class="form-control" required placeholder="NISN">
                            </div>
                            <label>Nama</label>
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" required placeholder="Nama">
                            </div>
                            <label>Kelas</label>
                            <div class="form-group">
                                <input type="text" name="kelas" class="form-control" required placeholder="Kelas">
                            </div>
                            <label>Email</label>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required placeholder="Email">
                            </div>
                            <label>Angkatan</label>
                            <div class="form-group">
                                <input type="number" name="angkatan" class="form-control" required placeholder="Angkatan">
                            </div>
                            <label>Tanggal Lahir</label>
                            <div class="form-group">
                                <input type="date" name="tgl_lahir" class="form-control" required placeholder="Tanggal Lahir">
                            </div>
                            <label>Tempat Lahir</label>
                            <div class="form-group">
                                <input type="text" name="tempat_lahir" class="form-control" required placeholder="Tempat Lahir">
                            </div>
                            <label>Wali Siswa</label>
                            <div class="form-group">
                                <select name="wali" class="form-control">
                                @foreach($wali as $row)
                                    <option value="{{$row->idWali}}">{{$row->namaWali}}</option>
                                @endforeach
                                </select>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


                               {{--  <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">Pilih Filter</option>
                                                <option value="">Angkatan</option>
                                                <option value="">Kelas</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">-</option>
                                                <option value="">19</option>
                                                <option value="">18</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                </div> --}}
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning" id="searchtable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Angkatan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($all as $row)
                                            <tr>
                                                <td>{{$row->idSiswa}}</td>
                                                <td>{{$row->namaSiswa}}</td>
                                                <td>{{$row->kelasSiswa}}</td>
                                                <td>{{$row->angkatanSiswa}}</td>
                                                <td>
                                                    <a href="{{ route('profil',['id'=>$row->idSiswa]) }}"><button class="btn btn-success">Detail</button></a>
                                                    <a href="{{ route('perkembangan',['id'=>$row->idSiswa]) }}"><button class="btn btn-warning">Perkembangan</button></a>
                                                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ubahSiswa{{$row->idSiswa}}" >
            Ubah
        </button>

        <div class="modal fade" id="ubahSiswa{{$row->idSiswa}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 5%">
            <div class="modal-dialog" role="document">
                <form method="post" action="/dashboard/updateSiswa">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah Siswa</h5>
                        </div>
                        <div class="modal-body">
 
                            {{ csrf_field() }}
 
                            <label>NISN</label>
                            <input type="hidden" name="id" value="{{$row->idSiswa}}">
                            <div class="form-group">
                                <input type="text" name="nisn" class="form-control" required placeholder="NISN" value="{{$row->nisnSiswa}}">
                            </div>
                            <label>Nama</label>
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" required placeholder="Nama" value="{{$row->namaSiswa}}">
                            </div>
                            <label>Kelas</label>
                            <div class="form-group">
                                <input type="text" name="kelas" class="form-control" required placeholder="Kelas" value="{{$row->kelasSiswa}}">
                            </div>
                            <label>Email</label>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required placeholder="Email" value="{{$row->emailSiswa}}">
                            </div>
                            <label>Angkatan</label>
                            <div class="form-group">
                                <input type="number" name="angkatan" class="form-control" required placeholder="Angkatan" value="{{$row->angkatanSiswa}}">
                            </div>
                            <label>Tanggal Lahir</label>
                            <div class="form-group">
                                <input type="date" name="tgl_lahir" class="form-control" required placeholder="Tanggal Lahir" value="{{$row->tanggalLahirSiswa}}">
                            </div>
                            <label>Tempat Lahir</label>
                            <div class="form-group">
                                <input type="text" name="tempat_lahir" class="form-control" required placeholder="Tempat Lahir" value="{{$row->tempatLahirSiswa}}">
                            </div>
                            <label>Wali Siswa</label>
                            <div class="form-group">
                                <select name="wali" class="form-control">
                                @foreach($wali as $row)
                                    <option value="{{$row->idWali}}">{{$row->namaWali}}</option>
                                @endforeach
                                </select>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Ubah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

                                                    <button class="btn btn-danger" onclick="deleteSiswa({{$row->idSiswa}})">
                                                        Hapus
                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                          <tfoot>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Angkatan</th>
                <td></td>
            </tr>
        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
@endsection