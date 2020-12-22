<?php $__env->startSection('title','Profil Alumni'); ?>

<?php $__env->startSection('alumni','active'); ?>

<?php $__env->startSection('content'); ?>
          <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4">
                                <div class="table-responsive table--no-card m-b-30">
                                    <h4>Profil Alumni</h4>
                                    <table class="table table-borderless table-striped table-earning mt-3">
                                        <tbody>
                                            <tr>
                                                <td>NIS</td>
                                                <td>: <?php echo e($all->idSiswa); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nama</td>
                                                <td>: <?php echo e($all->namaAlumni); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Institusi</td>
                                                <td>: <?php echo e($all->institusiAlumni); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>: <?php echo e($all->emailAlumni); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Telepon</td>
                                                <td>: <?php echo e($all->teleponAlumni); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td>: <?php echo e($all->alamatAlumni); ?></td>
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
<?php echo $__env->make('dashboard/template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kosong/project/konseling_bk/resources/views/dashboard/profilAlumni.blade.php ENDPATH**/ ?>