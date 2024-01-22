<?php $__env->startSection('container'); ?>
    <div id="konten">
        <div class="container-fluid konten-box">
            <div class="row">
                <div class="konten-kanan bg-img">
                </div>
                <div class="konten-kiri">

                    
                    <?php echo csrf_field(); ?>
                    <div class="login-box mt-5 mb-4">
                        <div class="card-body">
                            <h3 class="text-center mb-3"><a href=""><img width="40%"
                                        src="<?php echo e(asset(config('app.logo_app'))); ?>"></a></h3>
                            <h5 class="text-center mb-2" style="font-weight: 600;"><?php echo e(config('app.name')); ?></h5>
                            
                            <div class="form-group mb-2">
                                <label class="form-label" style="font-weight: 600;">Username</label>
                                <input class="form-control" type="text" placeholder="Username" name="username"
                                    id="username" required>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" style="font-weight: 600;"> Password</label>
                                <input class="form-control" type="password" placeholder="Password" name="password"
                                    id="password" required>
                                <div class="clearfix"></div>
                            </div>
                            <div class="mt-4 d-grid gap-2">
                                <button type="submit" class="btn btn-success" id="btn_login">Login</button>
                                <button class="btn btn-success d-none" type="button" id="btn_loding" disabled>
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Loading...
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <hr>
                    <div class="container text-footer mt-2">
                        
                        <a href="https://imip.co.id/" class="text-muted text-decoration-none">
                            <p class="text-center"> <?php echo e(env('APP_FOOTER')); ?> </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main_login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gudang-klinik\resources\views/login/index.blade.php ENDPATH**/ ?>