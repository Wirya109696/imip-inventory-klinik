<?php $__env->startSection('container'); ?>
    <div class="container-fluid  pt-3 pb-2 mb-3">
        <div class="card">
            <div class="card-body">
                <?php echo $header; ?>

                <button id="add_btncus" class="btn btn-outline-success btn-sm" style="float: right"><i
                        class="bi bi-file-earmark-plus"></i> Adds</button>
                
                <hr>
                
                <table class="table" id="tablecustomers" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pengambil</th>
                            <th>Divisi</th>
                            <th>Lokasi</th>
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

<?php echo $__env->make('layouts.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventory-imip-klinik\resources\views/customer/index.blade.php ENDPATH**/ ?>