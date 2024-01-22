<div class="row">
    <div class="col-lg">

        <div class="form-group">
            <label class="form-label">Divisi </label>
            <input class="form-control form-control-sm" type="text" id="nama_divisi" value="<?php echo e($data->nama_divisi); ?>">
        </div>
        <div class="form-group">
            <label class="form-label">Lokasi </label>
            <input class="form-control form-control-sm" type="text" id="lokasi" value="<?php echo e($data->lokasi); ?>">
        </div>
    </div>
</div>

<input class="form-control" type="hidden" id="id" value="<?php echo e($data->id); ?>">
<input class="form-control" type="hidden" id="nama_divisi_old" value="<?php echo e($data->nama_divisi); ?>">
<?php /**PATH C:\xampp\htdocs\inventory-test\resources\views/customer/edit.blade.php ENDPATH**/ ?>