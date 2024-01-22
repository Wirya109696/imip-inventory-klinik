<div class="row">
    <div class="col-lg">

        <div class="form-group">
            <label class="form-label">Nama Supplier </label>
            <input class="form-control form-control-sm" type="text" id="sup_name" value="<?php echo e($data->sup_name); ?>">
        </div>
        <div class="form-group">
            <label class="form-label">No Handphone</label>
            <input class="form-control form-control-sm" type="text" id="sup_phone" value="<?php echo e($data->sup_phone); ?>">
        </div>
        <div class="form-group">
            <label class="form-label">Alamat </label>
            <textarea class="form-control form-control-sm" type="text" id="sup_addres"><?php echo e(old('sup_addres', $data->sup_addres)); ?></textarea>

        </div>
    </div>
</div>

<input class="form-control" type="hidden" id="id" value="<?php echo e($data->id); ?>">
<input class="form-control" type="hidden" id="sup_name_old" value="<?php echo e($data->sup_name); ?>">
<?php /**PATH C:\xampp\htdocs\inventory-imip-klinik\resources\views/supplier/edit.blade.php ENDPATH**/ ?>