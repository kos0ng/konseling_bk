<?php $__env->startSection('title','Data Siswa'); ?>

<?php $__env->startSection('siswa','active'); ?>

<?php $__env->startSection('content'); ?>

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="title-5 m-b-35">Data Siswa</h3>
                            <button type="button" class="btn btn-success mr-3" data-toggle="modal" data-target="#tambahSiswa" style="margin-bottom: 1%">
            Tambah Data
        </button>

        <div class="modal fade" id="tambahSiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 5%">
            <div class="modal-dialog" role="document">
                <form method="post" action="/dashboard/insertSiswa">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
                        </div>
                        <div class="modal-body">
 
                            <?php echo e(csrf_field()); ?>

 
                            <label>NISN</label>
                            <div class="form-group">
                                <input type="text" name="nisn" class="form-control" required placeholder="NISN">
                            </div>
                            <label>Nama</label>
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" required placeholder="Nama">
                            </div>
                            <label>Kelas</label>
                            <div class="form-group">
                                <input type="text" name="kelas" class="form-control" required placeholder="Kelas">
                            </div>
                            <label>Email</label>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required placeholder="Email">
                            </div>
                            <label>Angkatan</label>
                            <div class="form-group">
                                <input type="number" name="angkatan" class="form-control" required placeholder="Angkatan">
                            </div>
                            <label>Tanggal Lahir</label>
                            <div class="form-group">
                                <input type="date" name="tgl_lahir" class="form-control" required placeholder="Tanggal Lahir">
                            </div>
                            <label>Tempat Lahir</label>
                            <div class="form-group">
                                <input type="text" name="tempat_lahir" class="form-control" required placeholder="Tempat Lahir">
                            </div>
                            <label>Wali Siswa</label>
                            <div class="form-group">
                                <select name="wali" class="form-control">
                                <?php $__currentLoopData = $wali; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($row->idWali); ?>"><?php echo e($row->namaWali); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                                <th>Kelas</th>
                                                <th>Angkatan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($row->idSiswa); ?></td>
                                                <td><?php echo e($row->namaSiswa); ?></td>
                                                <td><?php echo e($row->kelasSiswa); ?></td>
                                                <td><?php echo e($row->angkatanSiswa); ?></td>
                                                <td>
                                                    <a href="<?php echo e(route('profil',['id'=>$row->idSiswa])); ?>"><button class="btn btn-success">Detail</button></a>
                                                    <a href="<?php echo e(route('perkembangan',['id'=>$row->idSiswa])); ?>"><button class="btn btn-warning">Perkembangan</button></a>
                                                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ubahSiswa<?php echo e($row->idSiswa); ?>" >
            Ubah
        </button>

        <div class="modal fade" id="ubahSiswa<?php echo e($row->idSiswa); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 5%">
            <div class="modal-dialog" role="document">
                <form method="post" action="/dashboard/updateSiswa">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah Siswa</h5>
                        </div>
                        <div class="modal-body">
 
                            <?php echo e(csrf_field()); ?>

 
                            <label>NISN</label>
                            <input type="hidden" name="id" value="<?php echo e($row->idSiswa); ?>">
                            <div class="form-group">
                                <input type="text" name="nisn" class="form-control" required placeholder="NISN" value="<?php echo e($row->nisnSiswa); ?>">
                            </div>
                            <label>Nama</label>
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" required placeholder="Nama" value="<?php echo e($row->namaSiswa); ?>">
                            </div>
                            <label>Kelas</label>
                            <div class="form-group">
                                <input type="text" name="kelas" class="form-control" required placeholder="Kelas" value="<?php echo e($row->kelasSiswa); ?>">
                            </div>
                            <label>Email</label>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required placeholder="Email" value="<?php echo e($row->emailSiswa); ?>">
                            </div>
                            <label>Angkatan</label>
                            <div class="form-group">
                                <input type="number" name="angkatan" class="form-control" required placeholder="Angkatan" value="<?php echo e($row->angkatanSiswa); ?>">
                            </div>
                            <label>Tanggal Lahir</label>
                            <div class="form-group">
                                <input type="date" name="tgl_lahir" class="form-control" required placeholder="Tanggal Lahir" value="<?php echo e($row->tanggalLahirSiswa); ?>">
                            </div>
                            <label>Tempat Lahir</label>
                            <div class="form-group">
                                <input type="text" name="tempat_lahir" class="form-control" required placeholder="Tempat Lahir" value="<?php echo e($row->tempatLahirSiswa); ?>">
                            </div>
                            <label>Wali Siswa</label>
                            <div class="form-group">
                                <select name="wali" class="form-control">
                                <?php $__currentLoopData = $wali; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($row->idWali); ?>"><?php echo e($row->namaWali); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

                                                    <button class="btn btn-danger">Hapus</button>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                          <tfoot>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Kelas</th>
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
<?php echo $__env->make('dashboard/template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kosong/project/konseling_bk/resources/views/dashboard/siswa.blade.php ENDPATH**/ ?>