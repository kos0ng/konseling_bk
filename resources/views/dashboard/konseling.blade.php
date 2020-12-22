@extends('dashboard/template')

@section('title','Data Konseling')

@section('konseling','active')

@section('content')
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="title-5 m-b-35">Data Konseling   </h3>
                                <button type="button" class="btn btn-success mr-3" data-toggle="modal" data-target="#tambahData" style="margin-bottom: 1%">
            Tambah Data
        </button>

        <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 5%">
            <div class="modal-dialog" role="document">
                <form method="post" action="/dashboard/insertHasil">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                        </div>
                        <div class="modal-body">
 
                            {{ csrf_field() }}
 
                            <label>NIS</label>
                            <div class="form-group">
                                <input type="number" name="idSiswa" class="form-control" required placeholder="NIS">
                            </div>
                            <label>Tanggal Konseling</label>
                            <div class="form-group">
                                <input type="date" name="tanggal" class="form-control" required placeholder="Tanggal Konseling">
                            </div>
                            <label>Jam Konseling</label>
                            <div class="form-group">
                                <input type="time" name="jam" class="form-control" required placeholder="Tanggal Konseling">
                            </div>
                            <label>Hasil Konseling</label>
                            <div class="form-group">
                                <textarea class="form-control" style="height: 300px" name="hasil"></textarea>
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
                                                <th>Hasil Konseling</th>
                                                <th>Tangal</th>
                                                <th>Tim BK</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($all as $row)
                                            <tr>
                                                <td>{{$row->idKonseling}}</td>
                                                <td>{{$row->namaSiswa}}</td>
                                                <td>
                                                    <textarea disabled class="form-control">{{$row->hasilKonseling}}
                                                    </textarea>
                                                </td>
                                                <td>{{$row->tanggalKonseling}}</td>
                                                <td>{{$row->namaBK}}</td>
                                                <td>
                                                    {{-- <button class="btn btn-success">Detail</button> --}}
                                                             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ubahData{{$row->idKonseling}}" style="margin-bottom: 1%">
            Ubah
        </button>

        <div class="modal fade" id="ubahData{{$row->idKonseling}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 5%">
            <div class="modal-dialog" role="document">
                <form method="post" action="/dashboard/updateKonseling">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah Data</h5>
                        </div>
                        <div class="modal-body">
 
                            {{ csrf_field() }}
 
                            <label>NIS</label>
                            <div class="form-group">
                                <input type="number" name="idSiswa" class="form-control" required placeholder="NIS" value="{{$row->idSiswa}}">
                            </div>
                            <label>Tanggal Konseling</label>
                            <div class="form-group">
                                <input type="date" name="tanggal" class="form-control" required placeholder="Tanggal Konseling" value="{{date("Y-m-d",strtotime($row->tanggalKonseling))}}">
                            </div>
                            <label>Jam Konseling</label>
                            <div class="form-group">
                                <input type="time" name="jam" class="form-control" required placeholder="Tanggal Konseling">
                            </div>
                            <label>Hasil Konseling</label>
                            <div class="form-group">
                                <textarea class="form-control" style="height: 300px" name="hasil">{{$row->hasilKonseling}}</textarea>
                            </div>
                            <label>Tim BK</label>
                            <div class="form-group">
                                <select name="idBK" class="form-control">
                                    @foreach($timbk as $row2)
                                    <option value="{{$row2->idBK}}" @php if($row->idBK==$row2->idBK){echo "selected";} @endphp >{{$row2->namaBK}}</option>
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
                                                    <button class="btn btn-danger" onclick="deleteKonseling({{$row->idKonseling}})">
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
                                                <th>Hasil Konseling</th>
                                                <th>Tangal</th>
                                                <th>Tim BK</th>
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