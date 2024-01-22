<style>
    .hr-space {
        margin-top: 10px; /* Adjust the top margin as needed */
        margin-bottom: 10px; /* Adjust the bottom margin as needed */
    }

    .add-item-button {
        margin-top: 10px; /* Adjust the top margin as needed */
        margin-bottom: 10px; /* Adjust the bottom margin as needed */
        padding: 5px 10px; /* Adjust padding for a smaller button */
    }
</style>

<div class="row">
    <div class="col-lg">
        <div class="form-group">
            <label class="form-label">Kode Transaksi </label>
            <input class="form-control form-control-sm" type="text" id="kode_transaksi" name="kode_transaksi">
        </div>
    </div>
    <div class="col-lg">
        <div class="form-group">
            <label class="form-label">Nama Supplier </label>
            <input class="form-control form-control-sm" type="text" id="nama_supplier" name="nama_supplier">
        </div>
    </div>
    <div class="col-lg">
        <div class="form-group">
            <label class="form-label">Tanggal </label>
            <input class="form-control form-control-sm" type="date" id="tanggal" name="tanggal">
        </div>
    </div>
    <hr class="hr-space">
    <div id="barang-container">
        <!-- Initial Form for a single item -->
        <div class="row">
            <form>

            </form>
            <div class="col">
                <div class="form-group">
                    <label class="form-label">Kode Barang </label>
                    <input class="form-control form-control-sm" type="text" name="kode_barang[]">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label class="form-label">Nama Barang </label>
                    <input class="form-control form-control-sm" type="text" name="nama_barang[]">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label class="form-label">Jumlah </label>
                    <input class="form-control form-control-sm input-jumlah" oninput="calculateTotalBarang()" type="text" name="jumlah_barang[]">
                </div>
            </div>
            <div class="col">
                <button type="button" class="btn btn-danger" onclick="removeItem(this)">Remove</button>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-outline-success btn-sm add-item-button" onclick="addItem()">Add Item</button>
    <hr class="hr-space">
    <div class="form-group">
        <label class="form-label">Total Barang </label>
        <input class="form-control form-control-sm" type="text" id="total_barang">
    </div>
    <div style="display:none">
        <div id="template-barang">
            <!-- Initial Form for a single item -->
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label class="form-label">Kode Barang </label>
                        <input class="form-control form-control-sm" type="text" name="kode_barang[]">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label class="form-label">Nama Barang </label>
                        <input class="form-control form-control-sm" type="text" name="nama_barang[]">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label class="form-label">Jumlah </label>
                        <input class="form-control form-control-sm input-jumlah" oninput="calculateTotalBarang()" type="text"  name="jumlah_barang[]">
                    </div>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-danger" onclick="removeItem(this)">Remove</button>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-outline-success btn-sm add-item-button" onclick="addItem()">Add Item</button>
    </div>

</div>

<script>
   function addItem() {
        // Clone the template row and append it to the container
        var template = document.querySelector("#template-barang .row");
        var clone = template.cloneNode(true);
        document.getElementById("barang-container").appendChild(clone);

        // Recalculate total_barang when adding items
        calculateTotalBarang();
    }

    function removeItem(button) {
        // Remove the parent row when the remove button is clicked
        button.parentNode.parentNode.remove();

        // Recalculate total_barang when removing items
        calculateTotalBarang();
    }

    function calculateTotalBarang() {
        var total_barang = 0;

        // Iterate through all jumlah_barang inputs and accumulate the values
        document.querySelectorAll('input[name^="jumlah_barang"]').forEach(function (input) {
            total_barang += parseInt(input.value) || 0;
        });

        // Update the total_barang input
        document.getElementById('total_barang').value = total_barang;
    }
</script>
<?php /**PATH C:\xampp\htdocs\inventory-test\resources\views/barangmasuk/add.blade.php ENDPATH**/ ?>