<div class="row">
    <div class="col-lg">
        <div class="form-group">
            <label class="form-label">Kode Barang </label>
            <input class="form-control form-control-sm" type="text" id="kode_barang" value="<?php echo e($data->kode_barang); ?>">
        </div>
        <div class="form-group">
            <label class="form-label">Nama Barang </label>
            <input class="form-control form-control-sm" type="text" id="nama_barang" value="<?php echo e($data->nama_barang); ?>">
        </div>
        <div class="form-group">
            <label class="form-label">Merek </label>
            <input class="form-control form-control-sm" type="text" id="merk" value="<?php echo e($data->merk); ?>">
        </div>
        <div class="form-group">
            <label class="form-label">Satuan </label>
            <input class="form-control form-control-sm" type="text" id="satuan" value="<?php echo e($data->satuan); ?>">
        </div>
        <div class="form-group">
            <label class="form-label">Minimal Stock </label>
            <input class="form-control form-control-sm" type="text" id="min_stock" value="<?php echo e($data->min_stock); ?>">
        </div>
    </div>
</div>

<input class="form-control" type="hidden" id="id" value="<?php echo e($data->id); ?>">
<input class="form-control" type="hidden" id="kode_barang_old" value="<?php echo e($data->kode_barang); ?>">

<?php /**PATH C:\xampp\htdocs\inventory-test\resources\views/barang/edit.blade.php ENDPATH**/ ?>