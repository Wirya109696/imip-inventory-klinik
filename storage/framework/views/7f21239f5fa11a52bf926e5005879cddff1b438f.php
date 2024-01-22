<?php $__env->startSection('container'); ?>
    <div class="container-fluid  pt-3 pb-2 mb-2">
        <div class="card">
            <div class="card-header">
                <?php echo $header; ?>

                <button id="add_btnbrng" class="btn btn-outline-success btn-sm" style="float: right"><i
                        class="bi bi-file-earmark-plus"></i>
                    Excel</button>
                <div class="card-body mt-1">
                    
                    <div class="row mb-3 justify-content-center">
                        
                        
                        <div class="col-md-3">
                            <label for="filter_gudang">Filter Lokasi:</label>
                            <select id="filter_gudang" class="form-select form-select-sm">
                                
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="filter_gudang">Filter Gudang:</label>
                            <select id="filter_gudang" class="form-select form-select-sm">
                                
                            </select>
                        </div>
                        
                    </div>
                    
                    
                    <hr>
                    
                    <table class="table" id="tablelaporans" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Kategori</th>
                                <th>Stock Awal</th>
                                <th>Pemasukan</th>
                                <th>Pengeluaran</th>
                                <th>Stock Akhir</th>
                                <th>Gudang</th>
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

<?php echo $__env->make('layouts.main_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gudang-klinik\resources\views/laporan/index.blade.php ENDPATH**/ ?>