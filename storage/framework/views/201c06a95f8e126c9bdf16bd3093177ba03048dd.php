<?php $__env->startSection('title','Data Konseling'); ?>

<?php $__env->startSection('konseling','active'); ?>

<?php $__env->startSection('content'); ?>
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="title-5 m-b-35">Data Konseling   </h3>
                                <button type="button" class="btn btn-success mr-3" data-toggle="modal" data-target="#tambahData" style="margin-bottom: 1%">
            Tambah Data
        </button>

        <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 5%">
            <div class="modal-dialog" role="document">
                <form method="post" action="/dashboard/insertHasil">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                        </div>
                        <div class="modal-body">
 
                            <?php echo e(csrf_field()); ?>

 
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
                            <label>Hasil Konseling</label>
                            <div class="form-group">
                                <textarea class="form-control" style="height: 300px" name="hasil"></textarea>
                            </div>
                            <label>Tim BK</label>
                            <div class="form-group">
                                <select name="idBK" class="form-control">
                                    <?php $__currentLoopData = $timbk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($row2->idBK); ?>"><?php echo e($row2->namaBK); ?></option>
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
                                                <th>Hasil Konseling</th>
                                                <th>Tangal</th>
                                                <th>Tim BK</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($row->idKonseling); ?></td>
                                                <td><?php echo e($row->namaSiswa); ?></td>
                                                <td>
                                                    <textarea disabled class="form-control"><?php echo e($row->hasilKonseling); ?>

                                                    </textarea>
                                                </td>
                                                <td><?php echo e($row->tanggalKonseling); ?></td>
                                                <td><?php echo e($row->namaBK); ?></td>
                                                <td>
                                                    
                                                             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ubahData<?php echo e($row->idKonseling); ?>" style="margin-bottom: 1%">
            Ubah
        </button>

        <div class="modal fade" id="ubahData<?php echo e($row->idKonseling); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 5%">
            <div class="modal-dialog" role="document">
                <form method="post" action="/dashboard/updateKonseling">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah Data</h5>
                        </div>
                        <div class="modal-body">
 
                            <?php echo e(csrf_field()); ?>

 
                            <label>NIS</label>
                            <div class="form-group">
                                <input type="number" name="idSiswa" class="form-control" required placeholder="NIS" value="<?php echo e($row->idSiswa); ?>">
                            </div>
                            <label>Tanggal Konseling</label>
                            <div class="form-group">
                                <input type="date" name="tanggal" class="form-control" required placeholder="Tanggal Konseling" value="<?php echo e(date("Y-m-d",strtotime($row->tanggalKonseling))); ?>">
                            </div>
                            <label>Jam Konseling</label>
                            <div class="form-group">
                                <input type="time" name="jam" class="form-control" required placeholder="Tanggal Konseling">
                            </div>
                            <label>Hasil Konseling</label>
                            <div class="form-group">
                                <textarea class="form-control" style="height: 300px" name="hasil"><?php echo e($row->hasilKonseling); ?></textarea>
                            </div>
                            <label>Tim BK</label>
                            <div class="form-group">
                                <select name="idBK" class="form-control">
                                    <?php $__currentLoopData = $timbk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($row2->idBK); ?>" <?php if($row->idBK==$row2->idBK){echo "selected";} ?> ><?php echo e($row2->namaBK); ?></option>
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
                                                    <button class="btn btn-danger">Hapus</button>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                         <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Hasil Konseling</th>
                                                <th>Tangal</th>
                                                <th>Tim BK</th>
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
<?php echo $__env->make('dashboard/template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kosong/project/konseling_bk/resources/views/dashboard/konseling.blade.php ENDPATH**/ ?>