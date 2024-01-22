<div class="row">
    <div class="col-lg">

        <div class="form-group">
            <label class="form-label">Nama Supplier </label>
            <input class="form-control form-control-sm" type="text" id="nama_supllier" value="<?php echo e($data->nama_supllier); ?>">
        </div>
        <div class="form-group">
            <label class="form-label">No Handphone</label>
            <input class="form-control form-control-sm" type="text" id="no_hp" value="<?php echo e($data->no_hp); ?>">
        </div>
        <div class="form-group">
            <label class="form-label">Alamat </label>
            <input class="form-control form-control-sm" type="text" id="alamat" value="<?php echo e($data->alamat); ?>">
        </div>
    </div>
</div>

<input class="form-control" type="hidden" id="id" value="<?php echo e($data->id); ?>">
<input class="form-control" type="hidden" id="nama_supllier_old" value="<?php echo e($data->nama_supllier); ?>">
<?php /**PATH C:\xampp\htdocs\inventory-test\resources\views/supplier/edit.blade.php ENDPATH**/ ?>