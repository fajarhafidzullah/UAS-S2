<form method="POST" action="<?= base_url('data_karyawan/tambah_karyawan_aksi') ?>">

<div class="card rounded-lg">
        <div class="card-header">Form Data Karyawan</div>
        <div class="card-body">            
            <div class="form-row">
                <div class="col-lg-12 row">
                    <label class="col-md-2">NIP</label>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" name="nip" type="text" placeholder="NIP" />
                            <?= form_error('nip','<div class="text-small text-danger">','</div>') ?>
                        </div>
                    </div>                        
                </div>

                <div class="col-lg-12 row">
                    <label class="col-md-2">Nama Karyawan</label>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" name="nama" type="text" placeholder="Nama Karyawan" />
                            <?= form_error('nama','<div class="text-small text-danger">','</div>') ?>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12 row">
                    <label class="col-md-2">Jenis Kelamin</label>
                    <div class="form-group">
                        <div class="col-md-auto">
                        <select name="jenis_kelamin" class="form-control">
                            <option value="">--Pilih Gender--</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <?= form_error('jenis_kelamin','<div class="text-small text-danger">','</div>') ?>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12 row">
                    <label class="col-md-2">Alamat</label>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" name="alamat" type="text" placeholder="Alamat" />
                            <?= form_error('alamat','<div class="text-small text-danger">','</div>') ?>
                        </div>
                    </div>
                </div>

                
                <div class="col-lg-12 row">
                    <label class="col-md-2">No. Telepon</label>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" name="no_telepon" type="text" placeholder="Nomer Telepon" />
                            <?= form_error('no_telepon','<div class="text-small text-danger">','</div>') ?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 row">
                    <label class="col-md-2">Jabatan</label>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" name="jabatan" type="text" placeholder="Jabatan" />
                            <?= form_error('jabatan','<div class="text-small text-danger">','</div>') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer text-right">
            <button type="submit" class="btn btn-primary mt-4">Tambah</button>
            <button type="reset" class="btn btn-danger mt-4">Reset</button>
        </div>
    </div>
</form>