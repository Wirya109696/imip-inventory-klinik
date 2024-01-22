<div class="row">
    <div class="col-lg">
        <div class="form-group">
            <label class="form-label">Username </label>
            <input class="form-control form-control-sm" type="text" id="username" value="<?php echo e($data->username); ?>">
        </div>
        <div class="form-group">
            <label class="form-label">Name </label>
            <input class="form-control form-control-sm" type="text" id="name" value="<?php echo e($data->name); ?>" disabled>
        </div>
        <div class="form-group">
            <label class="form-label">Email</label>
            <input class="form-control form-control-sm" type="text" id="email" value="<?php echo e($data->email); ?>" disabled>
        </div>
        <div class="form-group">
            <label class="form-label">Role </label>
            <select class="form-select form-select-sm autocomplete" id="role_id">
                <option value="">--  Selected --</option>
                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(old('role_id', $data->role_id) == $role->id): ?>
                <option value="<?php echo e($role->id); ?>" selected><?php echo e($role->name); ?></option>
                <?php endif; ?>
                <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
</div>

<input class="form-control" type="hidden" id="id" value="<?php echo e($data->id); ?>">
<input class="form-control" type="hidden" id="username_old" value="<?php echo e($data->username); ?>"><?php /**PATH C:\xampp\htdocs\core-imip\resources\views/user/edit.blade.php ENDPATH**/ ?>