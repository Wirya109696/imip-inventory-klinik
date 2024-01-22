<div class="row">
    <div class="col-lg">
        <div class="form-group">
            <label class="form-label">Username </label>
            <input class="form-control form-control-sm" type="text" id="username">
        </div>
        <div class="form-group">
            <label class="form-label">Password </label>
            <input class="form-control form-control-sm" type="password" id="password">
        </div>
        <div class="form-group">
            <label class="form-label">Confirm Password </label>
            <input class="form-control form-control-sm" type="password" id="confirm_password">
        </div>
    </div>
    <div class="col-lg">
        <div class="form-group">
            <label class="form-label">Name </label>
            <input class="form-control form-control-sm" type="text" id="name" >
        </div>
        <div class="form-group">
            <label class="form-label">Email</label>
            <input class="form-control form-control-sm" type="text" id="email">
        </div>
        <div class="form-group">
            <label class="form-label">Role </label>
            <select class="form-select form-select-sm autocomplete" id="role_id">
                <option value="">--  Selected --</option>
                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\core-imip\resources\views/datakar/add.blade.php ENDPATH**/ ?>