<style>
    .hr-space {
        margin-top: 10px;
        /* Adjust the top margin as needed */
        margin-bottom: 10px;
        /* Adjust the bottom margin as needed */
    }

    .add-item-button {
        margin-top: 10px;
        /* Adjust the top margin as needed */
        margin-bottom: 10px;
        /* Adjust the bottom margin as needed */
        padding: 5px 10px;
        /* Adjust padding for a smaller button */
    }
</style>


<form class="form-inline">
    <div class="form-group row">
        <label for="trx_code" class="col-form-label col-sm-3" style="width: 14%; font-weight:bold;">Kode Transaksi</label>
        <div class="col-sm-2">
            <input class="form-control form-control-sm mb-3" type="text" id="trx_code" name="trx_code"
                value="<?php echo e($transaksi->trx_code); ?>" readonly>
        </div>
        <div class="col-sm-1">
            
        </div>
        <label for="divisi_id" class="col-form-label col-sm-1" style="width: 8%; font-weight:bold;">Tujuan </label>
        <div class="col-sm-2">
            <input class="form-control form-control-sm" type="text" id="divisi_id" name="divisi_id"
                value="<?php echo e($transaksi->divisi->div_nama); ?>" readonly>
            <p>
                <small class="form-text text-muted" style="font-size: 8px; ">* Divisi Tujuan Barang</small>
            </p>
        </div>
        <div class="col-sm-1">
            
        </div>
        <label for="tanggal" class="col-form-label col-sm-1" style="width: 8%; font-weight:bold;">Tanggal</label>
        <div class="col-sm-2">
            <input class="form-control form-control-sm" type="date" id="tanggal" name="tanggal"
                value="<?php echo e(old('tanggal', $transaksi->tanggal)); ?>">
        </div>
    </div>
</form>
<form class="form-inline" style="margin-top: 14px; margin-bottom:20px;">
    <div class="form-group row">

        <label for="kar_idkar" class="col-form-label col-sm-1" style="width: 14%; font-weight:bold;">ID Karyawan
        </label>
        <div class="col-sm-2">
            <input class="form-control form-control-sm" type="text" name="kar_idkar[]" id="kar_idkar"
                value="<?php echo e(old('kar_idkar', $transaksi->karyawan->kar_idkar)); ?>" readonly>
            
        </div>
        <div class="col-sm-1">
            <input type="text" id="karyawan_id" name="karyawan_id[]" hidden
                value="<?php echo e(old('karyawan_id', $transaksi->karyawan_id)); ?>">
        </div>

        <label for="kar_nama" class="col-form-label col-sm-1" style="width: 8%; font-weight:bold;">Nama</label>
        <div class="col-sm-2">
            <input class="form-control form-control-sm" type="text" name="kar_nama[]" id="kar_nama" readonly
                value="<?php echo e(old('kar_nama', $transaksi->karyawan->kar_nama)); ?>">
            
        </div>
        <div class="col-sm-1">
            
        </div>
        <label for="kar_jabatan" class="col-form-label col-sm-1" style="width: 8%; font-weight:bold;">Jabatan</label>
        <div class="col-sm-2">
            <input class="form-control form-control-sm" type="text" name="kar_jabatan[]" id="kar_jabatan" readonly
                value="<?php echo e(old('kar_nama', $transaksi->karyawan->kar_jabatan)); ?>">
            
        </div>
</form>



<hr class="hr-space" style="border-top: 2px solid rgb(231, 228, 228); margin-bottom: 30px; margin-top:15px;">

<table class="table" id="tabledetail" style="width:100%">
    <thead>
        <tr>
            <th style="font-size: 11px;">Kode Barang</th>
            <th style="font-size: 11px;">Nama Barang</th>
            <th style="font-size: 11px;">Gudang</th>
            <th style="font-size: 11px;">Tempat</th>
            <th style="font-size: 11px;">Jumlah</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td style="font-size: 11px;"><?php echo e($details->barang->brg_kode); ?></td>
                <td style="font-size: 11px;"><?php echo e($details->barang->brg_nama); ?></td>
                <td style="font-size: 11px;"><?php echo e($details->gudang->gud_nama); ?></td>
                <td style="font-size: 11px;"><?php echo e($details->gudang->penyimpanan->pen_nama); ?></td>
                <td style="font-size: 11px;"><?php echo e(abs($details->dtl_jumlah)); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<div class="col-12">
    <div class="row mt-3">
        <h5 style="padding-left: 960px">
            <small class="text text-small" style="font-size: 10px;">
                Total
            </small>
            <span id="total_barang" name="total_barang[]"
                value="<?php echo e($transaksi->total_barang); ?>"><?php echo e(old('total_barang', $transaksi->total_barang)); ?></span>
        </h5>
    </div>
</div>
<hr class="hr-space" style="border-top: 2px solid rgb(231, 228, 228); margin-bottom: 10px;">

<div class="row align-content-center">
    <div class="col-lg">
        <div class="form-group">
            <label class="form-label" style="font-weight:bold;">Keterangan </label>
            <textarea class="form-control form-control-sm" type="text" id="trx_ket"><?php echo e(old('trx_ket', $transaksi->trx_ket)); ?></textarea>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\gudang-klinik\resources\views/barangkeluar/detail.blade.php ENDPATH**/ ?>