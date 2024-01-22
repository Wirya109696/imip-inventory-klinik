<div class="row">
    <div class="col-lg">
        <div class="form-group">
            <label class="control-label">Role Name </label>
            <input class="form-control form-control-sm" type="text" id="name" value="<?php echo e($data->name); ?>">
        </div>
        <div class="form-group">
            <label class="control-label">Guard Name </label>
            <input class="form-control form-control-sm" type="text" id="guard_name" value="<?php echo e($data->guard_name); ?>">
        </div>
        <div class="form-group">
            <label class="control-label">Description </label>
            <textarea id="description" class="form-control form-control-sm"><?php echo e($data->description); ?></textarea>
        </div>
    </div>
</div>

<input type="hidden" id="id" value="<?php echo e($data->id); ?>">
<input type="hidden" id="name_old" value="<?php echo e($data->name); ?>"><?php /**PATH C:\xampp\htdocs\gudang-klinik\resources\views/role/edit.blade.php ENDPATH**/ ?>