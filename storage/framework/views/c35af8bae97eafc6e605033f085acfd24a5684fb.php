<?php $__env->startSection('container'); ?>
    <div class="container-fluid  pt-3 pb-2 mb-2">
        <div class="card">
            <div class="card-header">
                <?php echo $header; ?>

                <div class="card-body mt-1">
                    
                    <div class="row mb-3 justify-content-center">
                        
                        <div class="col-md-3">
                            <label for="filter_kode_bar">Filter Kode Barang:</label>
                            <select id="filter_kode_bar" class="form-select form-select-sm">
                                
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="filter_nama_bar">Filter Nama Barang:</label>
                            <select id="filter_nama_bar" class="form-select form-select-sm">
                                
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="filter_kategori">Filter Kategori:</label>
                            <select id="filter_kategori" class="form-select form-select-sm">
                                
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="filter_gudang">Filter Gudang:</label>
                            <select id="filter_gudang" class="form-select form-select-sm">
                                
                            </select>
                        </div>
                        
                    </div>
                    <hr>
                    <table class="table" id="tableinventaris" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Kategori</th>
                                <th>Stock Barang</th>
                                <th>Minimal Stock</th>
                                <th>Lokasi Gudang</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gudang-klinik\resources\views/inventaris/index.blade.php ENDPATH**/ ?>