<style lang="scss">
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

    .ui-autocomplete {
        z-index: 10000;
    }

    .my-input {
        height: 28.3px;
        padding-top: 0;
    }

    .custom-row,
    .custom-form-group,
    .custom-label,
    .custom-input {
        font-size: 10px;
    }

    .green-border {
        border: 1px solid green !important;
    }
</style>



<form class="form-inline">
    <div class="form-group row">
        <label for="trx_code" class="col-form-label col-sm-3" style="width: 14%; font-weight:bold;">Kode Transaksi</label>
        <div class="col-sm-2">
            <input class="form-control form-control-sm mb-3" type="text" id="trx_code" name="trx_code"
                value="<?php echo e($dataTransaksi->trx_code); ?>" readonly>
        </div>
        <div class="col-sm-1">
            
        </div>
        <label for="divisi_id" class="col-form-label col-sm-1" style="width: 8%; font-weight:bold;">Divisi </label>
        <div class="col-sm-2">
            <select class="form-select my-input form-control-sm text-mt-3 green-border" id="divisi_id"
                style="font-size: 12px;">
                <option disabled selected>--Pilih Divisi--</option>
                <?php $__currentLoopData = $divisi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $divisis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($divisis->id); ?>"
                        <?php echo e(old('divisi_id', $dataTransaksi->divisi_id) == $divisis->id ? ' selected' : ' '); ?>>
                        <?php echo e($divisis->div_nama); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <p>
                <small class="form-text text-muted" style="font-size: 10px; ">* Divisi Tujuan Barang</small>
            </p>
        </div>
        <div class="col-sm-1">
            
        </div>
        <label for="tanggal" class="col-form-label col-sm-1" style="width: 8%; font-weight:bold;">Tanggal</label>
        <div class="col-sm-2">
            <input class="form-control form-control-sm green-border" type="date" id="tanggal" name="tanggal"
                value="<?php echo e(old('tanggal', $dataTransaksi->tanggal)); ?>">
        </div>
    </div>
</form>
<form class="form-inline" style="margin-top: 14px; margin-bottom:20px;">
    <div class="form-group row">

        <label for="kar_idkar" class="col-form-label col-sm-1" style="width: 14%; font-weight:bold;">ID Karyawan
        </label>
        <div class="col-sm-2">
            <input class="form-control form-control-sm" type="text" name="kar_idkar[]" id="kar_idkar"
                value="<?php echo e(old('kar_idkar', $dataTransaksi->karyawan->kar_idkar)); ?>" readonly>
            <p>
                <small class="form-text text-muted" style="font-size: 9px;">* ID Pengambil (Ketik ID lalu Enter)</small>
            </p>
        </div>
        <div class="col-sm-1">
            <input type="text" id="karyawan_id" name="karyawan_id[]" hidden
                value="<?php echo e(old('karyawan_id', $dataTransaksi->karyawan_id)); ?>">
        </div>

        <label for="kar_nama" class="col-form-label col-sm-1" style="width: 8%; font-weight:bold;">Nama
            Pengambil</label>
        <div class="col-sm-2">
            <input class="form-control form-control-sm" type="text" name="kar_nama[]" id="kar_nama" readonly
                value="<?php echo e(old('kar_nama', $dataTransaksi->karyawan->kar_nama)); ?>">
            <p>
                <small class="form-text text-muted" style="font-size: 9px;">* Nama Pengambil (Terisi Otomatis)</small>
            </p>
        </div>
        <div class="col-sm-1">
            
        </div>
        <label for="kar_dept" class="col-form-label col-sm-1" style="width: 8%; font-weight:bold;">Divisi
            Pengambil</label>
        <div class="col-sm-2">
            <input class="form-control form-control-sm" type="text" name="kar_dept[]" id="kar_dept" readonly
                value="<?php echo e(old('kar_nama', $dataTransaksi->karyawan->kar_dept)); ?>">
            <p>
                <small class="form-text text-muted" style="font-size: 9px;">* Nama divisi (Terisi Otomatis)</small>
            </p>
        </div>
</form>


<hr class="hr-space">

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
        <h5 style="padding-left: 960px">
            <small class="text text-small" style="font-size: 10px;">
                Total
            </small>
            <span id="total_barang" name="total_barang[]"
                value="<?php echo e($dataTransaksi->total_barang); ?>"><?php echo e(old('total_barang', $dataTransaksi->total_barang)); ?></span>
        </h5>

        <input class="form-control form-control-sm" type="hidden" id="karyawan" value="<?php echo e($karyawan); ?>"
            readonly>
    </div>
</div>
<hr class="hr-space" style="border-top: 2px solid rgb(231, 228, 228); margin-bottom: 30px;">
<script>
    var karyawan = $('#karyawan').val().split('.');

    $("#kar_idkar").autocomplete({
        // source: ["KD123", "KD321"],
        source: karyawan,
    });
    $("#kar_idkar").focus(function() {
        $("ui-autocomplete").css("display", "block");
    });
    $("#kar_idkar").focusout(function() {
        $("ui-autocomplete").css("display", "none");
    });

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
<?php /**PATH C:\xampp\htdocs\inventory-imip-klinik\resources\views/barangkeluar/edit.blade.php ENDPATH**/ ?>