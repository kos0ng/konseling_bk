<?php $__env->startSection('title','Data Prestasi'); ?>

<?php $__env->startSection('siswa','active'); ?>

<?php $__env->startSection('content'); ?>
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
 
                            <?php echo e(csrf_field()); ?>

 
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
                                            <?php $__currentLoopData = $all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($row->idPrestasi); ?></td>
                                                <td><?php echo e($row->namaSiswa); ?></td>
                                                <td><?php echo e($row->namaPrestasi); ?></td>
                                                <td><?php echo e($row->jenisPrestasi); ?></td>
                                                <td><?php echo e($row->tingkatPrestasi); ?></td>
                                                <td><?php echo e($row->tanggalPrestasi); ?></td>
                                                <td>
                                                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ubahPrestasi<?php echo e($row->idPrestasi); ?>" >
            Ubah
        </button>

        <div class="modal fade" id="ubahPrestasi<?php echo e($row->idPrestasi); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 5%;margin-left: 15%">
            <div class="modal-dialog" role="document">
                <form method="post" action="/dashboard/updatePrestasi">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah Prestasi</h5>
                        </div>
                        <div class="modal-body">
 
                            <?php echo e(csrf_field()); ?>

 
                            <label>NIS</label>
                            <input type="hidden" name="id" value="<?php echo e($row->idPrestasi); ?>">
                            <div class="form-group">
                                <input type="number" name="id" class="form-control" required placeholder="NIS" value="<?php echo e($row->idSiswa); ?>">
                            </div>
                            <label>Nama Prestasi</label>
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" required placeholder="Nama Prestasi" value="<?php echo e($row->namaPrestasi); ?>">
                            </div>
                            <label>Tanggal Prestasi</label>
                            <div class="form-group">
                                <input type="date" name="tanggal" class="form-control" required placeholder="Tanggal Prestasi" value="<?php echo e($row->tanggalPrestasi); ?>">
                            </div>
                            <label>Jenis Prestasi</label>
                            <div class="form-group">
                                <input type="text" name="jenis" class="form-control" required placeholder="Jenis Prestasi" value="<?php echo e($row->jenisPrestasi); ?>">
                            </div>
                            <label>Tingkat Prestasi</label>
                            <div class="form-group">
                                <input type="number" name="tingkat" class="form-control" required placeholder="Tingkat Prestasi" value="<?php echo e($row->tingkatPrestasi); ?>">
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
                                                    <button class="btn btn-danger" onclick="deletePrestasi(<?php echo e($row->idPrestasi); ?>)">
                                                        Hapus
                                                    </button>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                            <?php $__currentLoopData = $terbanyak; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                            $info=DB::table('Siswa')->select('namaSiswa','kelasSiswa')->where('idSiswa',$row->idSiswa)->get();
                                            ?>
                                            <tr>
                                                <td><?php echo e($info[0]->namaSiswa); ?></td>
                                                <td><?php echo e($info[0]->kelasSiswa); ?></td>
                                                <td><?php echo e($row->total); ?></td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard/template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kosong/project/konseling_bk/resources/views/dashboard/prestasi.blade.php ENDPATH**/ ?>