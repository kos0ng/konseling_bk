<?php $__env->startSection('title','Perkembangan Siswa'); ?>

<?php $__env->startSection('siswa','active'); ?>

<?php $__env->startSection('content'); ?>
                      <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Perkembangan <?php echo e($all->namaSiswa); ?></h3>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>Semester 1</th>
                                                <th>Semester 2</th>
                                                <th>Semester 3</th>
                                                <th>Semester 4</th>
                                                <th>Semester 5</th>
                                                <th>Semester 6</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <?php
                                                    if($all->nilaiSiswaSmt1==null){
                                                        echo "-";
                                                    }
                                                    else{
                                                        echo $all->nilaiSiswaSmt1;
                                                    }
                                                    ?>
                                                </td>
                                                 <td>
                                                    <?php
                                                    if($all->nilaiSiswaSmt2==null){
                                                        echo "-";
                                                    }
                                                    else{
                                                        echo $all->nilaiSiswaSmt2;
                                                    }
                                                    ?>
                                                </td>
                                                 <td>
                                                    <?php
                                                    if($all->nilaiSiswaSmt3==null){
                                                        echo "-";
                                                    }
                                                    else{
                                                        echo $all->nilaiSiswaSmt3;
                                                    }
                                                    ?>
                                                </td>
                                                 <td>
                                                    <?php
                                                    if($all->nilaiSiswaSmt4==null){
                                                        echo "-";
                                                    }
                                                    else{
                                                        echo $all->nilaiSiswaSmt4;
                                                    }
                                                    ?>
                                                </td>
                                                 <td>
                                                    <?php
                                                    if($all->nilaiSiswaSmt5==null){
                                                        echo "-";
                                                    }
                                                    else{
                                                        echo $all->nilaiSiswaSmt5;
                                                    }
                                                    ?>
                                                </td>
                                                 <td>
                                                    <?php
                                                    if($all->nilaiSiswaSmt6==null){
                                                        echo "-";
                                                    }
                                                    else{
                                                        echo $all->nilaiSiswaSmt6;
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ubahNilaiSiswa" >
             <i class="zmdi zmdi-edit"></i>
        </button>

        <div class="modal fade" id="ubahNilaiSiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 5%">
            <div class="modal-dialog" role="document">
                <form method="post" action="/dashboard/updateNilai">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah Nilai Siswa</h5>
                        </div>
                        <div class="modal-body">
 
                            <?php echo e(csrf_field()); ?>

 
                            <input type="hidden" name="id" value="<?php echo e($all->idSiswa); ?>">
                            <label>Nilai Semester 1</label>
                            <div class="form-group">
                                <input type="text" name="nilaiSiswaSmt1" class="form-control" value="<?php echo e($all->nilaiSiswaSmt1); ?>">
                            </div>
                            <label>Nilai Semester 2</label>
                            <div class="form-group">
                                <input type="text" name="nilaiSiswaSmt2" class="form-control" value="<?php echo e($all->nilaiSiswaSmt2); ?>">
                            </div>
                            <label>Nilai Semester 3</label>
                            <div class="form-group">
                                <input type="text" name="nilaiSiswaSmt3" class="form-control" value="<?php echo e($all->nilaiSiswaSmt3); ?>">
                            </div>
                            <label>Nilai Semester 4</label>
                            <div class="form-group">
                                <input type="text" name="nilaiSiswaSmt4" class="form-control" value="<?php echo e($all->nilaiSiswaSmt4); ?>">
                            </div>
                            <label>Nilai Semester 5</label>
                            <div class="form-group">
                                <input type="email" name="nilaiSiswaSmt5" class="form-control" value="<?php echo e($all->nilaiSiswaSmt5); ?>">
                            </div>
                            <label>Nilai Semester 6</label>
                            <div class="form-group">
                                <input type="number" name="nilaiSiswaSmt6" class="form-control" value="<?php echo e($all->nilaiSiswaSmt6); ?>">
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
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4" style="margin-top: 5%">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Minat <?php echo e($all->namaSiswa); ?></strong>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">
                                            <?php echo e($all->minatSiswa); ?>

                                        </p>
                                                <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#ubahMinatSiswa" >
             <i class="zmdi zmdi-edit"></i>
        </button>

        <div class="modal fade" id="ubahMinatSiswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 5%">
            <div class="modal-dialog" role="document">
                <form method="post" action="/dashboard/updateMinat">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah Minat Siswa</h5>
                        </div>
                        <div class="modal-body">
 
                            <?php echo e(csrf_field()); ?>

 
                            <input type="hidden" name="id" value="<?php echo e($all->idSiswa); ?>">
                            <label>Minat <?php echo e($all->namaSiswa); ?></label>
                            <div class="form-group">
                                <textarea name="minatSiswa" class="form-control" style="height: 200px"></textarea>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard/template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kosong/project/konseling_bk/resources/views/dashboard/perkembangan.blade.php ENDPATH**/ ?>