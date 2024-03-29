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

    .green-border {
        border: 1px solid green !important;
    }
</style>

<form class="form-inline">
    <?php echo csrf_field(); ?>
    <div class="form-group row align-items-center">
        <label for="trx_code" class="col-form-label col-sm-3" style="width: 19%; font-weight:bold;">
            Kode Transaksi
        </label>
        <div class="col-sm-3">

            <input class="form-control form-control-sm" type="text" id="trx_code" name="trx_code"
                value="<?php echo e($dataTransaksi->trx_code); ?>" readonly>
        </div>
        <div class="col-sm-2">
            
        </div>
        <label for="tanggal" class="col-form-label col-sm-1" style="width: 12%; font-weight:bold;">Tanggal</label>
        <div class="col-sm-3">
            <input class="form-control form-control-sm green-border" type="date" id="tanggal" name="tanggal"
                value="<?php echo e($dataTransaksi->tanggal); ?>">
        </div>
    </div>
</form>



<form class="form-inline" style="margin-bottom: 20px; margin-top:15px;">
    <div class="form-group row align-items-center">
        <label for="supplier" class="col-form-label" style="width: 19%; font-weight:bold;">Supplier</label>
        <div class="col-sm-3">
            <select class="form-select my-input form-control-sm" id="supplier_id" style="font-size: 12px;">
                <?php $__currentLoopData = $supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $suppliers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($suppliers->id); ?>"
                        <?php echo e(old('supplier_id', $dataTransaksi->supplier_id) == $suppliers->id ? 'selected' : ''); ?>>
                        <?php echo e($suppliers->sup_name); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="col-sm-2">
            
        </div>
        <label for="gudang" class="form-label col-sm-1" style="width: 12%; font-weight:bold;">No Handphone </label>
        <div class="col-sm-3">
            <input class="form-control form-control-sm" type="text" id="sup_phone" name="sup_phone"
                value="<?php echo e($dataTransaksi->supplier->sup_phone); ?>" readonly>
        </div>
    </div>
</form>

<hr class="hr-space" style="border-top: 2px solid rgb(231, 228, 228); margin-bottom: 30px;">

<!-- Initial Form for a single item -->
<div class="row mt-3 text-center align-items-center">
    <div class="col">
        <label class="form-label">Kode Barang</label>
    </div>
    <div class="col">
        <label class="form-label">Nama Barang</label>
    </div>
    <div class="col">
        <label class="form-label">Gudang</label>
    </div>
    <div class="col">
        <label class="form-label">Tempat</label>
    </div>
    <div class="col">
        <label class="form-label">Jumlah</label>
    </div>
</div>

<?php $__currentLoopData = $detailTransaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div id="barang-container<?php echo e($index); ?>">
        <div class="row mt-3 text-center align-items-center">
            <div class="col">
                <div class="form-group">
                    <input class="form-control form-control-sm" type="text" name="brg_kode[]"
                        value="<?php echo e(old('brg_kode.' . $index, $details->barang->brg_kode)); ?>" readonly>
                    <input type="text" name="barang_id[]"
                        value="<?php echo e(old('barang_id.' . $index, $details->barang_id)); ?>" hidden>
                    <input type="text" name="id_detail[]" value="<?php echo e(old('id.' . $index, $details->id)); ?>" hidden>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <input class="form-control form-control-sm" type="text" name="brg_nama[]"
                        value="<?php echo e(old('brg_nama.' . $index, $details->barang->brg_nama)); ?>" readonly>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <input class="form-control form-control-sm" type="text" name="penyimpanan_id[id]"
                        value="<?php echo e(old('penyimpanan_id.' . $index, $details->penyimpanan->gudang->gud_nama)); ?>"
                        readonly>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <input class="form-control form-control-sm" type="text" name="penyimpanan_id[id]"
                        value="<?php echo e(old('penyimpanan_id.' . $index, $details->penyimpanan->pen_nama)); ?>" readonly>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <input class="form-control form-control-sm input-jumlah green-border"
                        oninput="validateJumlah(event)" onkeypress="return isNumberKey(event)" type="text"
                        name="dtl_jumlah[]" value="<?php echo e(old('dtl_jumlah.' . $index, $details->dtl_jumlah)); ?>">
                </div>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="col-12">
    <div class="row mt-3">
        <h5 style="padding-left: 670px">
            <small class="text text-small" style="font-size: 10px;">
                Total
            </small>
            <span id="total_barang" name="total_barang[]"
                value="<?php echo e($dataTransaksi->total_barang); ?>"><?php echo e(old('total_barang', $dataTransaksi->total_barang)); ?></span>
        </h5>
    </div>
</div>



<hr class="hr-space" style="border-top: 2px solid rgb(231, 228, 228); margin-bottom: 30px;">
<script>
    function validateJumlah(event) {
        var inputElement = event.target;
        var enteredValue = inputElement.value;

        // Parse the entered value as an integer
        var intValue = parseInt(enteredValue);

        // Check if the entered value is negative
        if (intValue < 0) {
            // Display an alert or handle it in any way you prefer
            alert("Please enter a non-negative value.");

            // Reset the input value to 0 or any other appropriate value
            inputElement.value = 0;
        }

        // Continue with other logic or calculations as needed
        calculateTotalBarang();
    }


    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode;

        // Check if the character entered is a number (0-9) or a backspace
        if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode !== 8) {
            // If not a number or backspace, prevent the input
            evt.preventDefault();
            return false;
        }

        return true;
    }
    // Initialize addedItems with existing details from the server
    var editItems = <?php echo json_encode($detailTransaksi, 15, 512) ?>;

    $(document).on('input', '.input-jumlah', function() {
        // When the value of dtl_jumlah changes, update addedItems and the table
        var index = $(this).closest('.row').index();
        editItems[index].dtl_jumlah = $(this).val();
        updateTables();
    });



    function updateTables() {
        // Get the table body
        var tbodys = $('#tabledetail tbodys');

        // Clear the existing rows
        tbodys.empty();

        // Iterate through the added items and append them to the table
        for (var i = 0; i < editItems.length; i++) {
            var item = editItems[i];

            // Append a new row to the table
            tbodys.append('<tr>' +
                '<td>' + item.brg_kode + '</td>' +
                '<td>' + item.brg_nama + '</td>' +
                '<td>' + item.penyimpanan.pen_nama + '</td>' +
                '<td>' + item.dtl_jumlah + '</td>' +
                '<td><button type="button" class="btn btn-danger btn-sm" onclick="removeTableItem(' + i +
                ')">Delete</button></td>' +
                '</tr>');
        }

        // Recalculate total_barang after adding or removing items
        calculateTotalBarangs();
    }

    function removeTableItems(index) {
        // Remove the item from the addedItems array
        editItems.splice(index, 1);

        // Update the table
        updateTables();
    }

    function calculateTotalBarangs() {
        var total_barang = 0;
        var dtl_jumlah = $("input[name='dtl_jumlah[]']").map(function() {
            return $(this).val();
        }).get();
        console.log(dtl_jumlah);
        // Iterate through all dtl_jumlah inputs and accumulate the values
        dtl_jumlah.forEach(function(item) {
            total_barang += parseInt(item) || 0;
            console.log(item);
        });

        // Update the total_barang input
        $('#total_barang').text(total_barang);
    }
</script>
<?php /**PATH C:\xampp\htdocs\inventory-imip-klinik\resources\views/barangmasuk/edit.blade.php ENDPATH**/ ?>