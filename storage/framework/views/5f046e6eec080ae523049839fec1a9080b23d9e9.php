<?php $__env->startSection('container'); ?>
<div class="container-fluid  pt-3 pb-2 mb-3">
    <div class="card">
        <div class="card-header">
            <?php echo $header; ?>

        </div>
        <div class="card-body">
            <button id="add_btnkeluar" class="btn btn-outline-success btn-sm"><i class="bi bi-file-earmark-plus"></i> Adds</button>
            
            <hr>
            
            <table class="table" id="tablekeluar" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Customer</th>
                        <th>Tanggal</th>
                        <th>Total Barang</th>
                        <th>Status</th>
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

<?php echo $__env->make('layouts.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventory-test\resources\views/barangkeluar/index.blade.php ENDPATH**/ ?>