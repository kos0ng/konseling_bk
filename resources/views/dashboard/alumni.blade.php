@extends('dashboard/template')

@section('title','Data Alumni')

@section('alumni','active')

@section('content')
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="title-5 m-b-35">Data Alumni</h3>
                                  <button type="button" class="btn btn-success mr-3" data-toggle="modal" data-target="#tambahAlumni" style="margin-bottom: 1%">
            Tambah Data
        </button>

        <div class="modal fade" id="tambahAlumni" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 5%">
            <div class="modal-dialog" role="document">
                <form method="post" action="/dashboard/insertAlumni">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Alumni</h5>
                        </div>
                        <div class="modal-body">
 
                            {{ csrf_field() }}
 
                            <label>NIS</label>
                            <div class="form-group">
                                <input type="text" name="idSiswa" class="form-control" required placeholder="NIS">
                            </div>
                            <label>Nama</label>
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" required placeholder="Nama">
                            </div>
                            <label>Institusi</label>
                            <div class="form-group">
                                <input type="text" name="institusi" class="form-control" required placeholder="Institusi">
                            </div>
                            <label>Angkatan</label>
                            <div class="form-group">
                                <input type="number" name="angkatan" class="form-control" required placeholder="Angkatan">
                            </div>
                            <label>Email</label>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required placeholder="Email">
                            </div>
                            <label>No HP</label>
                            <div class="form-group">
                                <input type="text" name="nohp" class="form-control" required placeholder="No HP">
                            </div>
                            <label>Alamat Alumni</label>
                            <div class="form-group">
                                <textarea class="form-control" name="alamat"></textarea>
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
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">-</option>
                                                <option value="">16</option>
                                                <option value="">15</option>
                                                <option value="">14</option>
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
                                                <th>Institusi</th>
                                                <th>Kota</th>
                                                <th>Angkatan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($all as $row)
                                            <tr>
                                                <td>{{$row->idAlumni}}</td>
                                                <td>{{$row->namaAlumni}}</td>
                                                <td>{{$row->institusiAlumni}}</td>
                                                <td>{{$row->alamatAlumni}}</td>
                                                <td>{{$row->angkatanAlumni}}</td>
                                                <td>
                                                    <a href="{{ route('profilAlumni',['id'=>$row->idAlumni]) }}"><button class="btn btn-success">Detail</button></a>
                                                           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ubahAlumni{{$row->idAlumni}}">
            Ubah
        </button>

        <div class="modal fade" id="ubahAlumni{{$row->idAlumni}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 5%">
            <div class="modal-dialog" role="document">
                <form method="post" action="/dashboard/updateAlumni">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah Alumni</h5>
                        </div>
                        <div class="modal-body">
 
                            {{ csrf_field() }}
 
                            <input type="hidden" name="idAlumni" value="{{$row->idAlumni}}">
                            <label>NIS</label>
                            <div class="form-group">
                                <input type="text" name="idSiswa" class="form-control" required placeholder="NIS" value="{{$row->idSiswa}}">
                            </div>
                            <label>Nama</label>
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" required placeholder="Nama" value="{{$row->namaAlumni}}">
                            </div>
                            <label>Institusi</label>
                            <div class="form-group">
                                <input type="text" name="institusi" class="form-control" required placeholder="Institusi" value="{{$row->institusiAlumni}}">
                            </div>
                            <label>Angkatan</label>
                            <div class="form-group">
                                <input type="number" name="angkatan" class="form-control" required placeholder="Angkatan" value="{{$row->angkatanAlumni}}">
                            </div>
                            <label>Email</label>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required placeholder="Email" value="{{$row->emailAlumni}}">
                            </div>
                            <label>No HP</label>
                            <div class="form-group">
                                <input type="text" name="nohp" class="form-control" required placeholder="No HP" value="{{$row->teleponAlumni}}">
                            </div>
                            <label>Alamat Alumni</label>
                            <div class="form-group">
                                <textarea class="form-control" name="alamat">{{$row->alamatAlumni}}
                                </textarea>
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
                                                    <button class="btn btn-danger" onclick="deleteAlumni({{$row->idAlumni}})">
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
                                                <th>Institusi</th>
                                                <th>Kota</th>
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