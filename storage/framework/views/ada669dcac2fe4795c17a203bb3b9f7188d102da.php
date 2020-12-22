<?php $__env->startSection('title','Data Alumni'); ?>

<?php $__env->startSection('alumni','active'); ?>

<?php $__env->startSection('content'); ?>
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
 
                            <?php echo e(csrf_field()); ?>

 
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
                                            <?php $__currentLoopData = $all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($row->idAlumni); ?></td>
                                                <td><?php echo e($row->namaAlumni); ?></td>
                                                <td><?php echo e($row->institusiAlumni); ?></td>
                                                <td><?php echo e($row->alamatAlumni); ?></td>
                                                <td><?php echo e($row->angkatanAlumni); ?></td>
                                                <td>
                                                    <a href="<?php echo e(route('profilAlumni',['id'=>$row->idAlumni])); ?>"><button class="btn btn-success">Detail</button></a>
                                                           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ubahAlumni<?php echo e($row->idAlumni); ?>">
            Ubah
        </button>

        <div class="modal fade" id="ubahAlumni<?php echo e($row->idAlumni); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 5%">
            <div class="modal-dialog" role="document">
                <form method="post" action="/dashboard/updateAlumni">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah Alumni</h5>
                        </div>
                        <div class="modal-body">
 
                            <?php echo e(csrf_field()); ?>

 
                            <input type="hidden" name="idAlumni" value="<?php echo e($row->idAlumni); ?>">
                            <label>NIS</label>
                            <div class="form-group">
                                <input type="text" name="idSiswa" class="form-control" required placeholder="NIS" value="<?php echo e($row->idSiswa); ?>">
                            </div>
                            <label>Nama</label>
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" required placeholder="Nama" value="<?php echo e($row->namaAlumni); ?>">
                            </div>
                            <label>Institusi</label>
                            <div class="form-group">
                                <input type="text" name="institusi" class="form-control" required placeholder="Institusi" value="<?php echo e($row->institusiAlumni); ?>">
                            </div>
                            <label>Angkatan</label>
                            <div class="form-group">
                                <input type="number" name="angkatan" class="form-control" required placeholder="Angkatan" value="<?php echo e($row->angkatanAlumni); ?>">
                            </div>
                            <label>Email</label>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required placeholder="Email" value="<?php echo e($row->emailAlumni); ?>">
                            </div>
                            <label>No HP</label>
                            <div class="form-group">
                                <input type="text" name="nohp" class="form-control" required placeholder="No HP" value="<?php echo e($row->teleponAlumni); ?>">
                            </div>
                            <label>Alamat Alumni</label>
                            <div class="form-group">
                                <textarea class="form-control" name="alamat"><?php echo e($row->alamatAlumni); ?>

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
                                                    <button class="btn btn-danger">Hapus</button>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard/template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kosong/project/konseling_bk/resources/views/dashboard/alumni.blade.php ENDPATH**/ ?>