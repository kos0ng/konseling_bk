<?php $__env->startSection('title','Profil Siswa'); ?>

<?php $__env->startSection('siswa','active'); ?>

<?php $__env->startSection('content'); ?>
          <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4">
                                <div class="table-responsive table--no-card m-b-30">
                                    <h4>Profil Siswa</h4>
                                    <table class="table table-borderless table-striped table-earning mt-3">
                                        <tbody>
                                            <tr>
                                                <td>NIS</td>
                                                <td>: <?php echo e($all->idSiswa); ?></td>
                                            </tr>
                                            <tr>
                                                <td><NAV>NISN</NAV></td>
                                                <td>: <?php echo e($all->nisnSiswa); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nama</td>
                                                <td>: <?php echo e($all->namaSiswa); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Kelas</td>
                                                <td>: <?php echo e($all->kelasSiswa); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>: <?php echo e($all->emailSiswa); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Angkatan</td>
                                                <td>: <?php echo e($all->angkatanSiswa); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Lahir</td>
                                                <td>: <?php echo e($all->tanggalLahirSiswa); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Tempat Lahir</td>
                                                <td>: <?php echo e($all->tempatLahirSiswa); ?> </td>
                                            </tr>
                                            <tr>
                                                <td>Wali Siswa</td>
                                                <td>: <?php echo e($all->namaWali); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-4"></div>
                        </div>
                       
                    </div>
                </div>
            </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard/template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kosong/project/konseling_bk/resources/views/dashboard/profil.blade.php ENDPATH**/ ?>