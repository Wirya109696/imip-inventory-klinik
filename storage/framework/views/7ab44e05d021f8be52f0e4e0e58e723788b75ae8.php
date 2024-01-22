<div class="row">
    <div class="col-lg">
        <div class="form-group">
            <label class="form-label">Nama Gudang</label>
            <input class="form-control form-control-sm" type="text" id="gud_nama" value="<?php echo e($data->gud_nama); ?>">
        </div>
        <div class="form-group">
            <label class="form-label">Deskripsi </label>
            <textarea class="form-control form-control-sm" type="text" id="gud_desc"><?php echo e(old('gud_desc', $data->gud_desc)); ?></textarea>
        </div>
    </div>
</div>

<input class="form-control" type="hidden" id="id" value="<?php echo e($data->id); ?>">
<input class="form-control" type="hidden" id="gud_nama_old" value="<?php echo e($data->gud_nama); ?>">
<?php /**PATH C:\xampp\htdocs\inventory-imip-klinik\resources\views/gudang/edit.blade.php ENDPATH**/ ?>