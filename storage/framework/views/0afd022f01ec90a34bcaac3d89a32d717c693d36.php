<style>
    .my-input {
        height: 28.3px;
        padding-top: 0;
    }
</style>
<div class="row">
    <div class="col-lg">
        <div class="form-group">
            <div class="form-group">
                <label class="form-label">Tempat Simpan </label>
                <input class="form-control form-control-sm" type="text" id="pen_nama"
                    placeholder="Rak 1 Gudang Klinik 1...">
            </div>
        </div>
        <div class="form-group mt-2">
            <label for="kategori" class="form-label">Gudang </label>
            <select class="form-select my-input" id="gudang_id" style="font-size: 12px; text-align: center;">
                <?php $__currentLoopData = $gudang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gudangs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($gudangs->id); ?>" <?php echo e(old('gudang_id') == $gudangs->id ? ' selected' : ' '); ?>>
                        <?php echo e($gudangs->gud_nama); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group mt-2">
            <label class="form-label">Deskripsi </label>
            
            <textarea class="form-control form-control-sm" type="text" id="pen_desc"
                placeholder="Masukan Keterangan Penyimpanan..."></textarea>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\inventory-imip-klinik\resources\views/penyimpanan/add.blade.php ENDPATH**/ ?>