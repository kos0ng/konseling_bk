@extends('dashboard/template')

@section('title','Jadwal Konseling')

@section('konseling','active')

@section('content')
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="title-5 m-b-35">Jawdal Konseling</h3>
                                 <button type="button" class="btn btn-success mr-3" data-toggle="modal" data-target="#tambahJadwal" style="margin-bottom: 1%">
            Tambah Jadwal
        </button>

        <div class="modal fade" id="tambahJadwal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 5%">
            <div class="modal-dialog" role="document">
                <form method="post" action="/dashboard/insertKonseling">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal</h5>
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
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning" id="searchtable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Tanggal Konseling</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($all as $row)
                                            <tr>
                                                <td>{{$row->idKonseling}}</td>
                                                <td>{{$row->namaSiswa}}</td>
                                                <td>{{$row->tanggalKonseling}}</td>
                                                <td>
                                                          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#selesai{{$row->idKonseling}}">
            Selesai
        </button>

        <div class="modal fade" id="selesai{{$row->idKonseling}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 5%">
            <div class="modal-dialog" role="document">
                <form method="post" action="/dashboard/updateHasil">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hasil Konseling</h5>
                        </div>
                        <div class="modal-body">
 
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{$row->idKonseling}}">
                            <label>ID Konseling</label>
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" disabled="" placeholder="Nama" value="{{$row->idKonseling}}">
                            </div>
                            <label>Hasil Konseling</label>
                            <div class="form-group">
                                <textarea class="form-control" name="hasil" style="height: 300px"></textarea>
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
                                                <th>Tanggal Konseling</th>
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