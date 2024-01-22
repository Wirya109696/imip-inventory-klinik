<div class="row">
    <div class="col-lg">
        <div class="form-group">
            <label class="form-label">Nama Pengambil</label>
            <input class="form-control form-control-sm" type="text" name="cus_nama" id="cus_nama"
                value="<?php echo e(old('cus_nama', $data->cus_nama)); ?>">
        </div>
        <div class="form-group">
            <label class="form-label">Divisi</label>
            <input class="form-control form-control-sm" type="text" id="cus_dept"
                value="<?php echo e(old('cus_dept', $data->cus_dept)); ?>">
        </div>
        <div class="form-group">
            <label class="form-label">cus_location</label>
            <select class="form-control form-control-sm" id="cus_location" name="cus_location">
                <option value="Klinik 1" <?php echo e(old('cus_location', $data->cus_location) == 'Klinik 1' ? 'selected' : ''); ?>>
                    Klinik 1
                </option>
                <option value="Klinik 2" <?php echo e(old('cus_location', $data->cus_location) == 'Klinik 2' ? 'selected' : ''); ?>>
                    Klinik 2
                </option>
            </select>
        </div>
    </div>
</div>

<input class="form-control" type="hidden" id="id" value="<?php echo e($data->id); ?>">
<input class="form-control" type="hidden" id="cus_nama_old" value="<?php echo e(old('cus_nama', $data->cus_nama)); ?>">
<?php /**PATH C:\xampp\htdocs\inventory-imip-klinik\resources\views/customer/edit.blade.php ENDPATH**/ ?>