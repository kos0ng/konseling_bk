@extends('dashboard/template')

@section('title','Data Kasus')

@section('siswa','active')

@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="title-5 m-b-35">Kasus Siswa</h3>
                                  <button type="button" class="btn btn-success mr-3" data-toggle="modal" data-target="#tambahKasus" style="margin-bottom: 1%">
            Tambah Kasus
        </button>

        <div class="modal fade" id="tambahKasus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 2%;margin-left: 15%">
            <div class="modal-dialog" role="document">
                <form method="post" action="/dashboard/insertKasus">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Kasus</h5>
                        </div>
                        <div class="modal-body">
 
                            {{ csrf_field() }}
 
                            <label>NIS</label>
                            <div class="form-group">
                                <input type="number" name="idSiswa" class="form-control" required placeholder="NIS">
                            </div>
                            <label>Nama Kasus</label>
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" required placeholder="Nama Kasus">
                            </div>
                            <label>Tanggal Kasus</label>
                            <div class="form-group">
                                <input type="date" name="tanggal" class="form-control" required placeholder="Tanggal Kasus">
                            </div>
                            <label>Status Kasus</label>
                            <div class="form-group">
                                <select name="status" class="form-control">
                                    <option value="1">Pending</option>
                                    <option value="2">On Going</option>
                                    <option value="3">Done</option>
                                </select>
                            </div>
                            <label>Jenis Kasus</label>
                            <div class="form-group">
                                <input type="text" name="jenis" class="form-control" required placeholder="Jenis Kasus">
                            </div>
                            <label>Tingkat Kasus</label>
                            <div class="form-group">
                                <input type="number" name="tingkat" class="form-control" required placeholder="Tingkat Kasus">
                            </div>
                            <label>Tim BK</label>
                            <div class="form-group">
                                <select name="idBK" class="form-control">
                                    @foreach($timbk as $row2)
                                    <option value="{{$row2->idBK}}">{{$row2->namaBK}}</option>
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
                                                <th>Kelas</th>
                                                <th>Tanggal</th>
                                                <th>Jenis</th>
                                                <th>Tingkat</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($all as $row)
                                            <tr>
                                                <td>{{$row->idKasus}}</td>
                                                <td>{{$row->namaSiswa}}</td>
                                                <td>{{$row->kelasSiswa}}</td>
                                                <td>{{$row->tanggalKasus}}</td>
                                                <td>{{$row->jenisKasus}}</td>
                                                <td>{{$row->gradeKasus}}</td>
                                                <td><b>
                                                    @php
                                                    switch ($row->statusKasus) {
                                                        case 1:
                                                            echo "Pending";
                                                            break;
                                                        case 2:
                                                            echo "On Going";
                                                            break;
                                                        case 3:
                                                            echo "Done";
                                                            break;
                                                        default:
                                                            echo "Invalid";
                                                            break;
                                                    }
                                                    @endphp
                                                </b>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ubahKasus{{$row->idKasus}}" >
            Ubah
        </button>

        <div class="modal fade" id="ubahKasus{{$row->idKasus}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 5%;margin-left: 15%">
            <div class="modal-dialog" role="document">
                <form method="post" action="/dashboard/updateKasus">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah Kasus</h5>
                        </div>
                        <div class="modal-body">
 
                            {{ csrf_field() }}
 
                            <input type="hidden" name="id" value="{{$row->idKasus}}">
                            <label>NIS</label>
                            <div class="form-group">
                                <input type="number" name="idSiswa" class="form-control" required placeholder="NIS" value="{{$row->idSiswa}}">
                            </div>
                            <label>Tanggal Kasus</label>
                            <div class="form-group">
                                <input type="date" name="tanggal" class="form-control" required placeholder="Tanggal Kasus"  value="{{$row->tanggalKasus}}">
                            </div>
                            <label>Status Kasus</label>
                            <div class="form-group">
                                <select name="status" class="form-control">
                                    <option value="1" @php if($row->statusKasus==1){echo "selected";} @endphp >Pending</option>
                                    <option value="2" @php if($row->statusKasus==2){echo "selected";} @endphp >On Going</option>
                                    <option value="3" @php if($row->statusKasus==3){echo "selected";} @endphp >Done</option>
                                </select>
                            </div>
                            <label>Jenis Kasus</label>
                            <div class="form-group">
                                <input type="text" name="jenis" class="form-control" required placeholder="Jenis Kasus" value="{{$row->jenisKasus}}">
                            </div>
                            <label>Tingkat Kasus</label>
                            <div class="form-group">
                                <input type="number" name="tingkat" class="form-control" required placeholder="Tingkat Kasus" value="{{$row->gradeKasus}}">
                            </div>
                            <label>Tim BK</label>
                            <div class="form-group">
                                <select name="idBK" class="form-control">
                                    @foreach($timbk as $row2)
                                    <option value="{{$row2->idBK}}" @php if($row->idBK==$row2->idBK){echo "selected";} @endphp>{{$row2->namaBK}}</option>
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
                                                    <button class="btn btn-danger" onclick="deleteKasus({{$row->idKasus}})">
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
                                                <th>Tanggal</th>
                                                <th>Jenis</th>
                                                <th>Tingkat</th>
                                                <th>Status</th>
                                                <td></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="section__content section__content--p30" style="margin-top: 3%;z-index: 0">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="title-5 m-b-35">Kasus Terbanyak</h3>
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Jumlah Kasus</th>
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