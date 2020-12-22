<?php $__env->startSection('title','Data Tim BK'); ?>

<?php $__env->startSection('timbk','active'); ?>

<?php $__env->startSection('content'); ?>
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
 
                            <?php echo e(csrf_field()); ?>

 
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
                                            <?php $__currentLoopData = $all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($row->idBK); ?></td>
                                                <td><?php echo e($row->namaBK); ?></td>
                                                <td><?php echo e($row->noBK); ?></td>
                                                <td><?php echo e($row->emailBK); ?></td>
                                                <td>
                                                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ubahBK<?php echo e($row->idBK); ?>">
            Ubah
        </button>

        <div class="modal fade" id="ubahBK<?php echo e($row->idBK); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 5%">
            <div class="modal-dialog" role="document">
                <form method="post" action="/dashboard/updateBK">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah Tim BK</h5>
                        </div>
                        <div class="modal-body">
 
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="id" value="<?php echo e($row->idBK); ?>">
                            <label>Nama</label>
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" required placeholder="Nama" value="<?php echo e($row->namaBK); ?>">
                            </div>
                            <label>No HP</label>
                            <div class="form-group">
                                <input type="nohp" name="nohp" class="form-control" required placeholder="No Handphone" value="<?php echo e($row->noBK); ?>">
                            </div>
                            <label>Email</label>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required placeholder="Email" value="<?php echo e($row->emailBK); ?>">
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
                                                    <button class="btn btn-danger">Hapus</button>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard/template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kosong/project/konseling_bk/resources/views/dashboard/timbk.blade.php ENDPATH**/ ?>