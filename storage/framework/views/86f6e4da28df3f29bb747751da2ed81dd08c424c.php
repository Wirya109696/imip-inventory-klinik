<style>
    .my-input {
        height: 28.3px;
        padding-top: 0;
    }
</style>
<div class="row">
    <div class="col-lg">
        <div class="form-group">
            <label class="form-label">Nama Gudang </label>
            <input class="form-control form-control-sm" type="text" id="gud_nama" placeholder="Gudang A Klinik 1...">
        </div>
        <div class="form-group mt-2">
            <label for="kategori" class="form-label">Lokasi Simpan </label>
            <select class="form-select my-input" id="penyimpanan_id" style="font-size: 12px; text-align: center;">
                <?php $__currentLoopData = $penyimpanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penyimpanans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($penyimpanans->id); ?>"
                        <?php echo e(old('penyimpanan_id') == $penyimpanans->id ? ' selected' : ' '); ?>>
                        <?php echo e($penyimpanans->pen_nama); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group mt-3">
            <label class="form-label">Deskripsi </label>
            
            <textarea class="form-control form-control-sm" type="text" id="gud_desc" placeholder="Keterangan Gudang Klinik..."></textarea>
        </div>
    </div>
</div>
</div>
<?php /**PATH C:\xampp\htdocs\gudang-klinik\resources\views/gudang/add.blade.php ENDPATH**/ ?>