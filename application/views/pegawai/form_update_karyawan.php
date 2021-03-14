
<div class="card rounded-lg">
        <div class="card-header">Update Data Karyawan</div>
        <div class="card-body">            
            <?php foreach($tb_karyawan as $n) : ?>
        <form method="POST" action="<?= base_url().'data_karyawan/update_karyawan_aksi'; ?>">
            <div class="form-row">
                <div class="col-lg-12 row">
                    <label class="col-md-2">NIP</label>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="hidden" name="id_karyawan" value="<?= $n->id_karyawan ?>">
                            <input class="form-control" name="nip" type="text" value="<?= $n->nip ?>" />
                        </div>
                    </div>                        
                </div>

                <div class="col-lg-12 row">
                    <label class="col-md-2">Nama Karyawan</label>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" name="nama" type="text" value="<?= $n->nama ?>" />
                        </div>
                    </div>
                </div>


                <div class="col-lg-12 row">
                    <label class="col-md-2">Jenis Kelamin</label>
                    <div class="form-group">
                        <div class="col-md-auto">
                        <select name="jenis_kelamin" class="form-control" value="<?= $n->jenis_kelamin ?>">
                            <option value="">--Pilih Gender--</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12 row">
                    <label class="col-md-2">Alamat</label>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" name="alamat" type="text" value="<?= $n->alamat ?>"/>
                        </div>
                    </div>
                </div>

                
                <div class="col-lg-12 row">
                    <label class="col-md-2">No. Telepon</label>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" name="no_telepon" type="text" value="<?= $n->no_telepon ?>"  />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer text-right">
            <button type="submit" class="btn btn-primary mt-4">Simpan</button>
            <button type="reset" class="btn btn-danger mt-4">Reset</button>
        </div>
    </div>
</form>
<?php endforeach; ?>