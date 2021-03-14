
<div class="card mb-4 mt-2">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Data Karyawan
    </div>

    <div class="card-body">
<a href="<?= base_url('data_karyawan/tambah_karyawan') ?>" class="btn btn-primary btn-xs mb-3">Tambah Karyawan</a>
        <div class="table-responsive">
            <table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th class="text-center">NIP</th>
                <th class="text-center">Nama Karyawan</th>
                <th class="text-center">Jenis Kelamin</th>
                <th class="text-center">Alamat</th>
                <th class="text-center">No. Telepon</th>
                <th class="text-center">Jabatan</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php 
           $no = 1;
           foreach($tb_karyawan as $n ): ?>
               <tr>
                   <td class="text-center"><?= $no++; ?></td>
                   <td class="text-center"><?= $n->nip ?></td>
                   <td class="text-center"><?= $n->nama ?></td>
                   <td class="text-center"><?= $n->jenis_kelamin ?></td>
                   <td><?= $n->alamat ?></td>
                   <td class="text-center"><?= $n->no_telepon ?></td>
                   <td class="text-center"><?= $n->jabatan ?></td>
                   <td class="text-center" width="170px">
                   
                        <a href="<?= base_url('data_karyawan/update_karyawan_aksi/').$n->id_karyawan?>" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit"></i> Update
                        </a>

                        <a href="<?= base_url('data_karyawan/hapus_karyawan/').$n->id_karyawan?>" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash"></i>Delete
                        </a>
                        
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    </div>
</div>