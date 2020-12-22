@extends('dashboard/template')

@section('title','Data Prestasi')

@section('siswa','active')

@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="title-5 m-b-35">Prestasi Siswa</h3>
                                  <button type="button" class="btn btn-success mr-3" data-toggle="modal" data-target="#tambahPrestasi" style="margin-bottom: 1%">
            Tambah Prestasi
        </button>

        <div class="modal fade" id="tambahPrestasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 2%;margin-left: 15%">
            <div class="modal-dialog" role="document">
                <form method="post" action="/dashboard/insertPrestasi">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Prestasi</h5>
                        </div>
                        <div class="modal-body">
 
                            {{ csrf_field() }}
 
                            <label>NIS</label>
                            <div class="form-group">
                                <input type="number" name="id" class="form-control" required placeholder="NIS">
                            </div>
                            <label>Nama Prestasi</label>
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" required placeholder="Nama Prestasi">
                            </div>
                            <label>Tanggal Prestasi</label>
                            <div class="form-group">
                                <input type="date" name="tanggal" class="form-control" required placeholder="Tanggal Prestasi">
                            </div>
                            <label>Jenis Prestasi</label>
                            <div class="form-group">
                                <input type="text" name="jenis" class="form-control" required placeholder="Jenis Prestasi">
                            </div>
                            <label>Tingkat Prestasi</label>
                            <div class="form-group">
                                <input type="number" name="tingkat" class="form-control" required placeholder="Tingkat Prestasi">
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
                                {{-- <div class="table-data__tool">
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
                                    <div class="table-data__tool-right">
                                        <div class="rs-select2--light rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Bulan</option>
                                                <option value="">Januari</option>
                                                <option value="">Februari</option>
                                                <option value="">Maret</option>
                                                <option value="">April</option>
                                                <option value="">Mei</option>
                                                <option value="">Juni</option>
                                                <option value="">Juli</option>
                                                <option value="">Agustus</option>
                                                <option value="">September</option>
                                                <option value="">Oktober</option>
                                                <option value="">November</option>
                                                <option value="">Desember</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Tahun</option>
                                                <option value="">2020</option>
                                                <option value="">2019</option>
                                                <option value="">2018</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning" id="searchtable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Prestasi</th>
                                                <th>Jenis</th>
                                                <th>Tingkat</th>
                                                <th>Tanggal</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($all as $row)
                                            <tr>
                                                <td>{{$row->idPrestasi}}</td>
                                                <td>{{$row->namaSiswa}}</td>
                                                <td>{{$row->namaPrestasi}}</td>
                                                <td>{{$row->jenisPrestasi}}</td>
                                                <td>{{$row->tingkatPrestasi}}</td>
                                                <td>{{$row->tanggalPrestasi}}</td>
                                                <td>
                                                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ubahPrestasi{{$row->idPrestasi}}" >
            Ubah
        </button>

        <div class="modal fade" id="ubahPrestasi{{$row->idPrestasi}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 5%;margin-left: 15%">
            <div class="modal-dialog" role="document">
                <form method="post" action="/dashboard/updatePrestasi">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah Prestasi</h5>
                        </div>
                        <div class="modal-body">
 
                            {{ csrf_field() }}
 
                            <label>NIS</label>
                            <input type="hidden" name="id" value="{{$row->idPrestasi}}">
                            <div class="form-group">
                                <input type="number" name="id" class="form-control" required placeholder="NIS" value="{{$row->idSiswa}}">
                            </div>
                            <label>Nama Prestasi</label>
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" required placeholder="Nama Prestasi" value="{{$row->namaPrestasi}}">
                            </div>
                            <label>Tanggal Prestasi</label>
                            <div class="form-group">
                                <input type="date" name="tanggal" class="form-control" required placeholder="Tanggal Prestasi" value="{{$row->tanggalPrestasi}}">
                            </div>
                            <label>Jenis Prestasi</label>
                            <div class="form-group">
                                <input type="text" name="jenis" class="form-control" required placeholder="Jenis Prestasi" value="{{$row->jenisPrestasi}}">
                            </div>
                            <label>Tingkat Prestasi</label>
                            <div class="form-group">
                                <input type="number" name="tingkat" class="form-control" required placeholder="Tingkat Prestasi" value="{{$row->tingkatPrestasi}}">
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
                                                    <button class="btn btn-danger" onclick="deletePrestasi({{$row->idPrestasi}})">
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
                                                <th>Prestasi</th>
                                                <th>Jenis</th>
                                                <th>Tingkat</th>
                                                <th>Tanggal</th>
                                                <td></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="section__content section__content--p30" style="z-index: 0">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="title-5 m-b-35">Prestasi Terbanyak</h3>
                                {{-- <div class="table-data__tool">
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
                                                <!-- <option value="">19</option>
                                                <option value="">18</option> -->
                                                <option value="">10 IPA A</option>
                                                <option value="">10 IPA B</option>
                                                <option value="">10 IPS A</option>
                                                <option value="">10 IPS B</option>
                                                <option value="">11 IPA A</option>
                                                <option value="">11 IPA B</option>
                                                <option value="">11 IPS A</option>
                                                <option value="">11 IPS B</option>
                                                <option value="">12 IPA A</option>
                                                <option value="">12 IPA B</option>
                                                <option value="">12 IPS A</option>
                                                <option value="">12 IPS B</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <div class="rs-select2--light rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Bulan</option>
                                                <option value="">Januari</option>
                                                <option value="">Februari</option>
                                                <option value="">Maret</option>
                                                <option value="">April</option>
                                                <option value="">Mei</option>
                                                <option value="">Juni</option>
                                                <option value="">Juli</option>
                                                <option value="">Agustus</option>
                                                <option value="">September</option>
                                                <option value="">Oktober</option>
                                                <option value="">November</option>
                                                <option value="">Desember</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Tahun</option>
                                                <option value="">2020</option>
                                                <option value="">2019</option>
                                                <option value="">2018</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning" id="example">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Jumlah Prestasi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($terbanyak as $row)
                                            @php
                                            $info=DB::table('Siswa')->select('namaSiswa','kelasSiswa')->where('idSiswa',$row->idSiswa)->get();
                                            @endphp
                                            <tr>
                                                <td>{{$info[0]->namaSiswa}}</td>
                                                <td>{{$info[0]->kelasSiswa}}</td>
                                                <td>{{$row->total}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>

@endsection