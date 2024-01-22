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
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<form class="form-inline">
    <?php echo csrf_field(); ?>
    <div class="form-group row align-items-center">
        <label for="trx_code" class="col-form-label col-sm-3" style="width: 19%; font-weight:bold;">
            Kode Transaksi
        </label>
        <div class="col-sm-3">

            <input class="form-control form-control-sm" type="text" id="trx_code" name="trx_code"
                value="<?php echo e($transaksi->trx_code); ?>" readonly>
        </div>
        <div class="col-sm-2">
            
        </div>
        <label for="tanggal" class="col-form-label col-sm-1" style="width: 12%; font-weight:bold;">Tanggal</label>
        <div class="col-sm-3">
            <input class="form-control form-control-sm" type="date" id="tanggal" name="tanggal"
                value="<?php echo e($transaksi->tanggal); ?>">
        </div>
    </div>
</form>



<form class="form-inline" style="margin-bottom: 20px; margin-top:15px;">
    <div class="form-group row align-items-center">
        <label for="supplier" class="col-form-label" style="width: 19%; font-weight:bold;">Supplier</label>
        <div class="col-sm-3">
            <input class="form-control form-control-sm" type="text" id="sup_phone" name="sup_phone"
                value="<?php echo e($transaksi->supplier->sup_name); ?>" readonly>
            
        </div>
        <div class="col-sm-2">
            
        </div>
        <label for="gudang" class="form-label col-sm-1" style="width: 12%; font-weight:bold;">No Handphone </label>
        <div class="col-sm-3">
            <input class="form-control form-control-sm" type="text" id="sup_phone" name="sup_phone"
                value="<?php echo e($transaksi->supplier->sup_phone); ?>" readonly>
        </div>
    </div>
</form>

<hr class="hr-space" style="border-top: 2px solid rgb(231, 228, 228); margin-bottom: 30px;">


<table class="table" id="tabledetail" style="width:100%">
    <thead>
        <tr>
            <th style="font-size: 11px;">Kode Barang</th>
            <th style="font-size: 11px;">Nama Barang</th>
            <th style="font-size: 11px;">Tempat</th>
            <th style="font-size: 11px;">Gudang</th>
            <th style="font-size: 11px;">Jumlah</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td style="font-size: 11px;"><?php echo e($details->barang->brg_kode); ?></td>
                <td style="font-size: 11px;"><?php echo e($details->barang->brg_nama); ?></td>
                <td style="font-size: 11px;"><?php echo e($details->penyimpanan->pen_nama); ?></td>
                <td style="font-size: 11px;"><?php echo e($details->penyimpanan->gudang->gud_nama); ?></td>
                <td style="font-size: 11px;"><?php echo e($details->dtl_jumlah); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<div class="col-12">
    <div class="row mt-3">
        <h5 style="padding-left: 680px">
            <small class="text text-small" style="font-size: 10px;">
                Total
            </small>
            <span id="total_barang" name="total_barang[]"
                value="<?php echo e($transaksi->total_barang); ?>"><?php echo e(old('total_barang', $transaksi->total_barang)); ?></span>
        </h5>
    </div>
</div>
<hr class="hr-space" style="border-top: 2px solid rgb(231, 228, 228); margin-bottom: 30px;">
<?php /**PATH C:\xampp\htdocs\inventory-imip-klinik\resources\views/barangmasuk/detail.blade.php ENDPATH**/ ?>