<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Satrio Setiawan">
    <title><?php echo e($title); ?></title>

    
    <link href="<?php echo e(asset('/lib/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('/lib/bootstrap/css/bootstrap-icons.css')); ?>">
    
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
     
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />

    
    <?php $__currentLoopData = $data['css']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <link rel="stylesheet" href="<?php echo e(asset($dt)); ?>">
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <link rel="icon" href="<?php echo e(asset('img/favicon.ico')); ?>" type="image/x-icon">
</head>

<body>
    <?php echo $__env->yieldContent('container'); ?>
</body>

<script> window.url = "<?php echo url('/') ?>"</script>

<script src="<?php echo e(asset('/lib/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('/lib/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('/lib/sweetalert/sweetalert2.all.min.js')); ?>"></script>
<script src="<?php echo e(asset('/js/global.js')); ?>"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

 
<?php $__currentLoopData = $data['js']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<script src="<?php echo e(asset($dt)); ?>"></script>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</html>
<?php /**PATH C:\xampp\htdocs\gudang-klinik\resources\views/layouts/main_login.blade.php ENDPATH**/ ?>