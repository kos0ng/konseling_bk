<?php $__env->startSection('title','Data Wali Siswa'); ?>

<?php $__env->startSection('walisiswa','active'); ?>

<?php $__env->startSection('content'); ?>
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
 
                            <?php echo e(csrf_field()); ?>

 
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
                                            <?php $__currentLoopData = $all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <tr>  
                                                <td><?php echo e($row->idWali); ?></td>
                                                <td><?php echo e($row->namaWali); ?></td>
                                                <td>
                                                    <?php echo e($row->pekerjaanWali); ?>

                                                </td>
                                                <td>
                                                    <?php echo e($row->noWali); ?>

                                                </td>
                                                <td>
                                                    <?php echo e($row->gajiWali); ?>

                                                </td>
                                                <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ubahWali<?php echo e($row->idWali); ?>">
            Ubah
        </button>

        <div class="modal fade" id="ubahWali<?php echo e($row->idWali); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 5%">
            <div class="modal-dialog" role="document">
                <form method="post" action="/dashboard/updateWali">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah Wali</h5>
                        </div>
                        <div class="modal-body">
 
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="id" value="<?php echo e($row->idWali); ?>">
                            <label>Nama</label>
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" required placeholder="Nama" value="<?php echo e($row->namaWali); ?>">
                            </div>
                            <label>Pekerjaan</label>
                            <div class="form-group">
                                <input type="text" name="pekerjaan" class="form-control" required placeholder="Pekerjaan" value="<?php echo e($row->pekerjaanWali); ?>">
                            </div>
                            <label>Nomor HP</label>
                            <div class="form-group">
                                <input type="text" name="nohp" class="form-control" required placeholder="Nomor HP" value="<?php echo e($row->noWali); ?>">
                            </div>
                            <label>Gaji</label>
                            <div class="form-group">
                                <input type="number" name="gaji" class="form-control" required placeholder="Gaji" value="<?php echo e($row->gajiWali); ?>">
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
                                                    <button class="btn btn-danger" onclick="deleteWali(<?php echo e($row->idWali); ?>)">
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard/template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kosong/project/konseling_bk/resources/views/dashboard/walisiswa.blade.php ENDPATH**/ ?>