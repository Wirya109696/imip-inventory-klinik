<div class="row">
    <div class="col-lg">
        <div class="form-group">
            <label class="form-label">Id Karyawan</label>
            <input class="form-control form-control-sm" type="text" name="kar_idkar" id="kar_idkar"
                value="<?php echo e(old('kar_idkar', $data->kar_idkar)); ?>">
        </div>
        <div class="form-group mt-1">
            <label class="form-label">Nama Karyawan</label>
            <input class="form-control form-control-sm" type="text" name="kar_nama" id="kar_nama"
                value="<?php echo e(old('kar_nama', $data->kar_nama)); ?>">
        </div>
        
        <div class="form-group mt-1">
            <label class="form-label">Jabatan Karyawan </label>
            <input class="form-control form-control-sm" type="text" name="kar_jabatan" id="kar_jabatan"
                value="<?php echo e(old('kar_jabatan', $data->kar_jabatan)); ?>">
        </div>
    </div>
</div>

<input class="form-control" type="hidden" id="id" value="<?php echo e($data->id); ?>">
<input class="form-control" type="hidden" id="kar_idkar_old" value="<?php echo e(old('kar_nama', $data->kar_idkar)); ?>">
<?php /**PATH C:\xampp\htdocs\gudang-klinik\resources\views/karyawan/edit.blade.php ENDPATH**/ ?>