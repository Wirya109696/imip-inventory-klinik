<div class="row">
    <div class="col-lg">
        <div class="form-group">
            <label class="form-label">Tempat Simpan </label>
            <input class="form-control form-control-sm" type="text" id="pen_nama" value="<?php echo e($data->pen_nama); ?>">
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <div class="form-group">
            <label for="kategori" class="form-label">Gudang </label>
            <select class="form-select" id="gudang_id" name="gudang_id">
                <?php $__currentLoopData = $gudang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gudangs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($gudangs->id); ?>"
                        <?php echo e(old('gudang_id', $data->gudang_id) == $gudangs->id ? 'selected' : ''); ?>>
                        <?php echo e($gudangs->gud_nama); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="form-label">Deskripsi </label>
        <textarea class="form-control form-control-sm" type="text" id="pen_desc"><?php echo e(old('pen_desc', $data->pen_desc)); ?></textarea>
    </div>
</div>
</div>


<input class="form-control" type="hidden" id="id" value="<?php echo e($data->id); ?>">
<input class="form-control" type="hidden" id="pen_nama_old" value="<?php echo e($data->pen_nama); ?>">
<?php /**PATH C:\xampp\htdocs\inventory-imip-klinik\resources\views/penyimpanan/edit.blade.php ENDPATH**/ ?>