<div class="row">
    <div class="col-lg">

        <div class="form-group">
            <label class="form-label">Name </label>
            <input class="form-control form-control-sm" type="text" id="name" value="<?php echo e($data->name); ?>">
        </div>
        <div class="form-group">
            <label class="form-label">Email</label>
            <input class="form-control form-control-sm" type="text" id="email" value="<?php echo e($data->email); ?>">
        </div>
        <div class="form-group">
            <label class="form-label">Alamat </label>
            <input class="form-control form-control-sm" type="text" id="alamat" value="<?php echo e($data->alamat); ?>">
        </div>
    </div>
</div>

<input class="form-control" type="hidden" id="id" value="<?php echo e($data->id); ?>">
<input class="form-control" type="hidden" id="name_old" value="<?php echo e($data->name); ?>">
<?php /**PATH C:\xampp\htdocs\core-imip\resources\views/karyawan/edit.blade.php ENDPATH**/ ?>