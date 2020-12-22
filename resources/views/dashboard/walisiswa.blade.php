@extends('dashboard/template')

@section('title','Data Wali Siswa')

@section('walisiswa','active')

@section('content')
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="title-5 m-b-35">Data Wali Siswa</h3>
                                <button type="button" class="btn btn-success mr-3" data-toggle="modal" data-target="#tambahWali" style="margin-bottom: 1%">
            Tambah Data
        </button>

        <div class="modal fade" id="tambahWali" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 5%">
            <div class="modal-dialog" role="document">
                <form method="post" action="/dashboard/insertWali">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Wali</h5>
                        </div>
                        <div class="modal-body">
 
                            {{ csrf_field() }}
 
                            <label>Nama</label>
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" required placeholder="Nama">
                            </div>
                            <label>Pekerjaan</label>
                            <div class="form-group">
                                <input type="text" name="pekerjaan" class="form-control" required placeholder="Pekerjaan">
                            </div>
                            <label>Nomor HP</label>
                            <div class="form-group">
                                <input type="text" name="nohp" class="form-control" required placeholder="Nomor HP">
                            </div>
                            <label>Gaji</label>
                            <div class="form-group">
                                <input type="number" name="gaji" class="form-control" required placeholder="Gaji">
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
                                </div> --}}
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning" id="searchtable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Pekerjaan</th>
                                                <th>No. HP</th>
                                                <th>Gaji</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($all as $row)
                                             <tr>  
                                                <td>{{ $row->idWali }}</td>
                                                <td>{{ $row->namaWali }}</td>
                                                <td>
                                                    {{ $row->pekerjaanWali }}
                                                </td>
                                                <td>
                                                    {{ $row->noWali }}
                                                </td>
                                                <td>
                                                    {{ $row->gajiWali }}
                                                </td>
                                                <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ubahWali{{$row->idWali}}">
            Ubah
        </button>

        <div class="modal fade" id="ubahWali{{$row->idWali}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 5%">
            <div class="modal-dialog" role="document">
                <form method="post" action="/dashboard/updateWali">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah Wali</h5>
                        </div>
                        <div class="modal-body">
 
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $row->idWali }}">
                            <label>Nama</label>
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" required placeholder="Nama" value="{{ $row->namaWali }}">
                            </div>
                            <label>Pekerjaan</label>
                            <div class="form-group">
                                <input type="text" name="pekerjaan" class="form-control" required placeholder="Pekerjaan" value="{{ $row->pekerjaanWali }}">
                            </div>
                            <label>Nomor HP</label>
                            <div class="form-group">
                                <input type="text" name="nohp" class="form-control" required placeholder="Nomor HP" value="{{ $row->noWali }}">
                            </div>
                            <label>Gaji</label>
                            <div class="form-group">
                                <input type="number" name="gaji" class="form-control" required placeholder="Gaji" value="{{ $row->gajiWali }}">
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
                                                    <button class="btn btn-danger" onclick="deleteWali({{$row->idWali}})">
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
                                                <th>Pekerjaan</th>
                                                <th>No. HP</th>
                                                <th>Gaji</th>
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