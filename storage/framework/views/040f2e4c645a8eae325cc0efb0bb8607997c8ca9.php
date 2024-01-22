<?php $__env->startSection('container'); ?>



<script src="https://bossanova.uk/jspreadsheet/v4/jexcel.js"></script>
<script src="https://jsuites.net/v4/jsuites.js"></script>
<link rel="stylesheet" href="https://jsuites.net/v4/jsuites.css" type="text/css" />
<link rel="stylesheet" href="https://bossanova.uk/jspreadsheet/v4/jexcel.css" type="text/css" />
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<div class="container-fluid  pt-3 pb-2 mb-3">
    <div class="card">
        <div class="card-header">
            <?php echo $header; ?>

        </div>
        <div class="card-body">
            <button id="sbmit_btn" class="btn btn-outline-success btn-sm"><i class="bi bi-file-earmark-plus"></i> Submit</button>
            <button id="delet_btn" class="btn btn-outline-success btn-sm"><i class="bi bi-file-earmark-plus"></i> Delete</button> <hr>
            <div id="spreadsheet"></div>

        </div>

    </div>
</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\core-imip\resources\views/excel/index.blade.php ENDPATH**/ ?>