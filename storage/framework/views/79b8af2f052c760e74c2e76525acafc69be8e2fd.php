<div class="row">
    <div class="col-lg">
        <div class="form-group">
            <label class="form-label">Lokasi Simpan </label>
            <input class="form-control form-control-sm" type="text" id="pen_nama" value="<?php echo e($data->pen_nama); ?>">
        </div>
    </div>
    
    <div class="form-group">
        <label class="form-label">Deskripsi </label>
        <textarea class="form-control form-control-sm" type="text" id="pen_desc"><?php echo e(old('pen_desc', $data->pen_desc)); ?></textarea>
    </div>

</div>


<input class="form-control" type="hidden" id="id" value="<?php echo e($data->id); ?>">
<input class="form-control" type="hidden" id="pen_nama_old" value="<?php echo e($data->pen_nama); ?>">
<?php /**PATH C:\xampp\htdocs\gudang-klinik\resources\views/penyimpanan/edit.blade.php ENDPATH**/ ?>