<div class="row">
    <div class="col-lg">
        <div class="form-group">
            <label class="form-label">Nama Kategori </label>
            <input class="form-control form-control-sm" type="text" id="kat_nama" value="<?php echo e($data->kat_nama); ?>">
        </div>
        <div class="form-group">
            <label class="form-label">Deskripsi </label>
            <textarea class="form-control form-control-sm" type="text" id="kat_deskripsi"><?php echo e(old('kat_deskripsi', $data->kat_deskripsi)); ?></textarea>
        </div>
    </div>
</div>

<input class="form-control" type="hidden" id="id" value="<?php echo e($data->id); ?>">
<input class="form-control" type="hidden" id="kat_nama_old" value="<?php echo e($data->kat_nama); ?>">
<?php /**PATH C:\xampp\htdocs\gudang-klinik\resources\views/kategori/edit.blade.php ENDPATH**/ ?>