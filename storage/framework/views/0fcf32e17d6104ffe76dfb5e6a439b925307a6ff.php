<style>
    .my-input {
        height: 28.3px;
        padding-top: 0;
    }
</style>
<div class="row">
    <div class="col-lg">
        <div class="form-group">
            <label class="form-label">Nama Gudang</label>
            <input class="form-control form-control-sm" type="text" id="gud_nama" value="<?php echo e($data->gud_nama); ?>">
        </div>
        <div class="col">
            <div class="form-group">
                <label for="kategori" class="form-label">Lokasi Simpan </label>
                <select class="form-select my-input" id="penyimpanan_id" name="penyimpanan_id">
                    <?php $__currentLoopData = $penyimpanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penyimpanans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($penyimpanans->id); ?>"
                            <?php echo e(old('penyimpanan_id', $data->penyimpanan_id) == $penyimpanans->id ? 'selected' : ''); ?>>
                            <?php echo e($penyimpanans->pen_nama); ?>

                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="form-label">Deskripsi </label>
            <textarea class="form-control form-control-sm" type="text" id="gud_desc"><?php echo e(old('gud_desc', $data->gud_desc)); ?></textarea>
        </div>
    </div>
</div>

<input class="form-control" type="hidden" id="id" value="<?php echo e($data->id); ?>">
<input class="form-control" type="hidden" id="gud_nama_old" value="<?php echo e($data->gud_nama); ?>">
<?php /**PATH C:\xampp\htdocs\gudang-klinik\resources\views/gudang/edit.blade.php ENDPATH**/ ?>