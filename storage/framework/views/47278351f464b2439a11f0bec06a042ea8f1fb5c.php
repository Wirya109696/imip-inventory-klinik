<div class="row">
    <div class="col-lg">
        <div class="form-group">
            <label class="control-label">Menu Name </label>
            <input class="form-control form-control-sm" type="text" id="menu_name">
        </div>
        <div class="form-group">
            <label class="control-label">Role </label><br>
            <select class="select w-100" id="role" multiple>
                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label class="control-label">Parent Name </label><br>
            <select class="form-select form-select-sm" id="parent_id">
                <option value="">-- selected --</option>
                <?php $__currentLoopData = $parents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($parent->id); ?>"><?php echo e($parent->menu_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label class="control-label">Icon </label>
            <input class="form-control form-control-sm iconpicker" type="text" id="icon">
        </div>
    </div>
    <div class="col-lg">
        <div class="form-group">
            <label class="control-label">Order Line </label>
            <input class="form-control form-control-sm" type="text" id="order_line">
        </div>
        <div class="form-group">
            <label class="control-label">Is Route</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="flexRadioDefault1" id="is_routeY">
                <label class="form-check-label">
                    Y
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="flexRadioDefault1" id="is_routeN" checked>
                <label class="form-check-label">
                    N
                </label>
            </div>
        </div>
        <div class="form-group d-none" id="hd_route_name">
            <label class="control-label">Route Name </label>
            <input class="form-control form-control-sm" type="text" id="route_name">
        </div>
        <div class="form-group">
            <label class="control-label">Has Child</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="has_childY">
                <label class="form-check-label">
                    Y
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="has_childN" checked>
                <label class="form-check-label">
                    N
                </label>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label">Allow</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="index" checked>
                <label class="form-check-label">
                    Index
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="create">
                <label class="form-check-label">
                    Store
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="edit">
                <label class="form-check-label">
                    Edit
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="erase">
                <label class="form-check-label">
                    Erase
                </label>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\gudang-klinik\resources\views/permission/add.blade.php ENDPATH**/ ?>