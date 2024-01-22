<?php $__env->startSection('container'); ?>
<div class="container-fluid  pt-3 pb-2 mb-3">
    <div class="card">
        <div class="card-header">
            <?php echo $header; ?>

        </div>
        <div class="card-body">
            <button id="add_btnstock" class="btn btn-outline-success btn-sm"><i class="bi bi-file-earmark-plus"></i> Adds</button>
            <a href="<?php echo e(route('excel')); ?>" class="btn btn-outline-success btn-sm"><i class="bi bi-file-earmark-plus"></i> Spreadsheet</a> <hr>
            
            <table class="table" id="tablestocks" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Tanggal Masuk</th>
                        <th>Stock Masuk</th>
                        <th>Tanggal Keluar</th>
                        <th>Stock Keluar</th>
                        <th>Total Stock</th>
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

<?php echo $__env->make('layouts.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventory-test\resources\views/stock/index.blade.php ENDPATH**/ ?>