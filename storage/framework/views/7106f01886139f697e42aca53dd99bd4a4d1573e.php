<div class="row">
    <div class="col-lg">
        <div class="form-group">
            <label class="form-label">Nama Divisi </label>
            <input class="form-control form-control-sm" type="text" id="div_nama" value="<?php echo e($data->div_nama); ?>">
        </div>
        <div class="form-group">
            <label class="form-label">Deskripsi </label>
            
            <textarea class="form-control form-control-sm" type="text" id="div_deskripsi"><?php echo e(old('div_deskripsi', $data->div_deskripsi)); ?></textarea>
        </div>
    </div>
</div>

<input class="form-control" type="hidden" id="id" value="<?php echo e($data->id); ?>">
<input class="form-control" type="hidden" id="div_nama_old" value="<?php echo e($data->div_nama); ?>">
<?php /**PATH C:\xampp\htdocs\inventory-imip-klinik\resources\views/divisi/edit.blade.php ENDPATH**/ ?>