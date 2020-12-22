@extends('dashboard/template')

@section('title','Data Tim BK')

@section('timbk','active')

@section('content')
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="title-5 m-b-35">Data Tim BK</h3>
                                 <button type="button" class="btn btn-success mr-3" data-toggle="modal" data-target="#tambahBK" style="margin-bottom: 1%">
            Tambah Data
        </button>

        <div class="modal fade" id="tambahBK" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 5%">
            <div class="modal-dialog" role="document">
                <form method="post" action="/dashboard/insertBK">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Tim BK</h5>
                        </div>
                        <div class="modal-body">
 
                            {{ csrf_field() }}
 
                            <label>Nama</label>
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" required placeholder="Nama">
                            </div>
                            <label>No HP</label>
                            <div class="form-group">
                                <input type="nohp" name="nohp" class="form-control" required placeholder="No Handphone">
                            </div>
                            <label>Email</label>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required placeholder="Email">
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
                                                <th>No. HP</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($all as $row)
                                            <tr>
                                                <td>{{$row->idBK}}</td>
                                                <td>{{$row->namaBK}}</td>
                                                <td>{{$row->noBK}}</td>
                                                <td>{{$row->emailBK}}</td>
                                                <td>
                                                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ubahBK{{$row->idBK}}">
            Ubah
        </button>

        <div class="modal fade" id="ubahBK{{$row->idBK}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 5%">
            <div class="modal-dialog" role="document">
                <form method="post" action="/dashboard/updateBK">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah Tim BK</h5>
                        </div>
                        <div class="modal-body">
 
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{$row->idBK}}">
                            <label>Nama</label>
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" required placeholder="Nama" value="{{$row->namaBK}}">
                            </div>
                            <label>No HP</label>
                            <div class="form-group">
                                <input type="nohp" name="nohp" class="form-control" required placeholder="No Handphone" value="{{$row->noBK}}">
                            </div>
                            <label>Email</label>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required placeholder="Email" value="{{$row->emailBK}}">
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
                                                    <button class="btn btn-danger" onclick="deleteBK({{$row->idBK}})">
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
                                                <th>No. HP</th>
                                                <th>Email</th>
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