<?php $__env->startSection('container'); ?>
<div class="container-fluid  pt-3 pb-2 mb-3">
    <div class="card">
        <div class="card-header">
            <?php echo $header; ?>

        </div>
        <div class="card-body">
            <button id="add_btnbrng" class="btn btn-outline-success btn-sm"><i class="bi bi-file-earmark-plus"></i> Adds</button>
            
             <hr>
            
            <table class="table" id="tablebarangs" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Total Stock</th>
                        <th>Satuan</th>
                        <th>Minimal Stock</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventory-test\resources\views/barang/index.blade.php ENDPATH**/ ?>