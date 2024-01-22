<div class="row">
    <div class="col-lg">
        <div class="form-group">
            <label class="form-label">Id Karyawan</label>
            <input class="form-control form-control-sm" type="text" name="kar_idkar" id="kar_idkar"
                value="<?php echo e(old('kar_idkar', $data->kar_idkar)); ?>">
        </div>
        <div class="form-group mt-1">
            <label class="form-label">Nama Pengambil</label>
            <input class="form-control form-control-sm" type="text" name="kar_nama" id="kar_nama"
                value="<?php echo e(old('kar_nama', $data->kar_nama)); ?>">
        </div>
        
        <div class="form-group">
            <label class="form-label mt-2">Divisi </label>
            <select class="form-control form-control-sm" id="kar_dept">
                <option value="ACC SKS" <?php echo e(old('kar_dept', $data->kar_dept) == 'ACC SKS' ? 'selected' : ''); ?>>
                    ACC SKS
                </option>
                <option value="Administrasi" <?php echo e(old('kar_dept', $data->kar_dept) == 'Administrasi' ? 'selected' : ''); ?>>
                    Administrasi
                </option>
                <option value="Apotek" <?php echo e(old('kar_dept', $data->kar_dept) == 'Apotek' ? 'selected' : ''); ?>>
                    Apotek
                </option>
                <option value="BPJS" <?php echo e(old('kar_dept', $data->kar_dept) == 'BPJS' ? 'selected' : ''); ?>>
                    BPJS
                </option>
                <option value="Klaim" <?php echo e(old('kar_dept', $data->kar_dept) == 'Klaim' ? 'selected' : ''); ?>>
                    Klaim
                </option>
                <option value="Laboratorium" <?php echo e(old('kar_dept', $data->kar_dept) == 'Laboratorium' ? 'selected' : ''); ?>>
                    Laboratorium
                </option>
                <option value="Poli 1" <?php echo e(old('kar_dept', $data->kar_dept) == 'Poli 1' ? 'selected' : ''); ?>>
                    Poli 1
                </option>
                <option value="Poli 2" <?php echo e(old('kar_dept', $data->kar_dept) == 'Poli 2' ? 'selected' : ''); ?>>
                    Poli 2
                </option>
                <option value="Poli 3" <?php echo e(old('kar_dept', $data->kar_dept) == 'Poli 3' ? 'selected' : ''); ?>>
                    Poli 3
                </option>
                <option value="Poli 4" <?php echo e(old('kar_dept', $data->kar_dept) == 'Poli 4' ? 'selected' : ''); ?>>
                    Poli 4
                </option>
                <option value="Poli 5" <?php echo e(old('kar_dept', $data->kar_dept) == 'Poli 5' ? 'selected' : ''); ?>>
                    Poli 5
                </option>
                <option value="Poli 6" <?php echo e(old('kar_dept', $data->kar_dept) == 'Poli 6' ? 'selected' : ''); ?>>
                    Poli 6
                </option>
                <option value="Poli Gigi" <?php echo e(old('kar_dept', $data->kar_dept) == 'Poli Gigi' ? 'selected' : ''); ?>>
                    Poli Gigi
                </option>
                <option value="Poli Tindakan"
                    <?php echo e(old('kar_dept', $data->kar_dept) == 'Poli Tindakan' ? 'selected' : ''); ?>>
                    Poli Tindakan
                </option>
                <option value="Rawat Inap" <?php echo e(old('kar_dept', $data->kar_dept) == 'Rawat Inap' ? 'selected' : ''); ?>>
                    Rawat Inap
                </option>
                <option value="Radiologi" <?php echo e(old('kar_dept', $data->kar_dept) == 'Radiologi' ? 'selected' : ''); ?>>
                    Radiologi
                </option>
                <option value="Rekam Medis" <?php echo e(old('kar_dept', $data->kar_dept) == 'Rekam Medis' ? 'selected' : ''); ?>>
                    Rekam Medis
                </option>
                <option value="UGD" <?php echo e(old('kar_dept', $data->kar_dept) == 'UGD' ? 'selected' : ''); ?>>
                    UGD
                </option>
            </select>
        </div>
    </div>
</div>

<input class="form-control" type="hidden" id="id" value="<?php echo e($data->id); ?>">
<input class="form-control" type="hidden" id="kar_idkar_old" value="<?php echo e(old('kar_nama', $data->kar_idkar)); ?>">
<?php /**PATH C:\xampp\htdocs\inventory-imip-klinik\resources\views/karyawan/edit.blade.php ENDPATH**/ ?>