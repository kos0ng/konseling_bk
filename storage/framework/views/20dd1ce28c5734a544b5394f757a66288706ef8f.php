<?php $__env->startSection('title','Data Kasus'); ?>

<?php $__env->startSection('siswa','active'); ?>

<?php $__env->startSection('content'); ?>
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="title-5 m-b-35">Kasus Siswa</h3>
                                  <button type="button" class="btn btn-success mr-3" data-toggle="modal" data-target="#tambahKasus" style="margin-bottom: 1%">
            Tambah Kasus
        </button>

        <div class="modal fade" id="tambahKasus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 2%;margin-left: 15%">
            <div class="modal-dialog" role="document">
                <form method="post" action="/dashboard/insertKasus">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Kasus</h5>
                        </div>
                        <div class="modal-body">
 
                            <?php echo e(csrf_field()); ?>

 
                            <label>NIS</label>
                            <div class="form-group">
                                <input type="number" name="idSiswa" class="form-control" required placeholder="NIS">
                            </div>
                            <label>Nama Kasus</label>
                            <div class="form-group">
                                <input type="text" name="nama" class="form-control" required placeholder="Nama Kasus">
                            </div>
                            <label>Tanggal Kasus</label>
                            <div class="form-group">
                                <input type="date" name="tanggal" class="form-control" required placeholder="Tanggal Kasus">
                            </div>
                            <label>Status Kasus</label>
                            <div class="form-group">
                                <select name="status" class="form-control">
                                    <option value="1">Pending</option>
                                    <option value="2">On Going</option>
                                    <option value="3">Done</option>
                                </select>
                            </div>
                            <label>Jenis Kasus</label>
                            <div class="form-group">
                                <input type="text" name="jenis" class="form-control" required placeholder="Jenis Kasus">
                            </div>
                            <label>Tingkat Kasus</label>
                            <div class="form-group">
                                <input type="number" name="tingkat" class="form-control" required placeholder="Tingkat Kasus">
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
                                                <th>Kelas</th>
                                                <th>Tanggal</th>
                                                <th>Jenis</th>
                                                <th>Tingkat</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($row->idKasus); ?></td>
                                                <td><?php echo e($row->namaSiswa); ?></td>
                                                <td><?php echo e($row->kelasSiswa); ?></td>
                                                <td><?php echo e($row->tanggalKasus); ?></td>
                                                <td><?php echo e($row->jenisKasus); ?></td>
                                                <td><?php echo e($row->gradeKasus); ?></td>
                                                <td><b>
                                                    <?php
                                                    switch ($row->statusKasus) {
                                                        case 1:
                                                            echo "Pending";
                                                            break;
                                                        case 2:
                                                            echo "On Going";
                                                            break;
                                                        case 3:
                                                            echo "Done";
                                                            break;
                                                        default:
                                                            echo "Invalid";
                                                            break;
                                                    }
                                                    ?>
                                                </b>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ubahKasus<?php echo e($row->idKasus); ?>" >
            Ubah
        </button>

        <div class="modal fade" id="ubahKasus<?php echo e($row->idKasus); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false" style="margin-top: 5%;margin-left: 15%">
            <div class="modal-dialog" role="document">
                <form method="post" action="/dashboard/updateKasus">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah Kasus</h5>
                        </div>
                        <div class="modal-body">
 
                            <?php echo e(csrf_field()); ?>

 
                            <input type="hidden" name="id" value="<?php echo e($row->idKasus); ?>">
                            <label>NIS</label>
                            <div class="form-group">
                                <input type="number" name="idSiswa" class="form-control" required placeholder="NIS" value="<?php echo e($row->idSiswa); ?>">
                            </div>
                            <label>Tanggal Kasus</label>
                            <div class="form-group">
                                <input type="date" name="tanggal" class="form-control" required placeholder="Tanggal Kasus"  value="<?php echo e($row->tanggalKasus); ?>">
                            </div>
                            <label>Status Kasus</label>
                            <div class="form-group">
                                <select name="status" class="form-control">
                                    <option value="1" <?php if($row->statusKasus==1){echo "selected";} ?> >Pending</option>
                                    <option value="2" <?php if($row->statusKasus==2){echo "selected";} ?> >On Going</option>
                                    <option value="3" <?php if($row->statusKasus==3){echo "selected";} ?> >Done</option>
                                </select>
                            </div>
                            <label>Jenis Kasus</label>
                            <div class="form-group">
                                <input type="text" name="jenis" class="form-control" required placeholder="Jenis Kasus" value="<?php echo e($row->jenisKasus); ?>">
                            </div>
                            <label>Tingkat Kasus</label>
                            <div class="form-group">
                                <input type="number" name="tingkat" class="form-control" required placeholder="Tingkat Kasus" value="<?php echo e($row->gradeKasus); ?>">
                            </div>
                            <label>Tim BK</label>
                            <div class="form-group">
                                <select name="idBK" class="form-control">
                                    <?php $__currentLoopData = $timbk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($row2->idBK); ?>" <?php if($row->idBK==$row2->idBK){echo "selected";} ?>><?php echo e($row2->namaBK); ?></option>
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
                                                    <button class="btn btn-danger" onclick="deleteKasus(<?php echo e($row->idKasus); ?>)">
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
                                                <th>Kelas</th>
                                                <th>Tanggal</th>
                                                <th>Jenis</th>
                                                <th>Tingkat</th>
                                                <th>Status</th>
                                                <td></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="section__content section__content--p30" style="margin-top: 3%;z-index: 0">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="title-5 m-b-35">Kasus Terbanyak</h3>
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Jumlah Kasus</th>
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
<?php echo $__env->make('dashboard/template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kosong/project/konseling_bk/resources/views/dashboard/kasus.blade.php ENDPATH**/ ?>