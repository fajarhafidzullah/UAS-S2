
<div class="card mb-4 mt-2">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Data Users
    </div>

    <div class="card-body">
<a href="<?= base_url('user/add') ?>" class="btn btn-primary btn-xs mb-3">Tambah</a>
        <div class="table-responsive">
            <table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
                <tr>
                <th class="text-center">#</th>
                <th class="text-center">Username</th>
                <th class="text-center">Name</th>
                <th class="text-center">Address</th>
                <th class="text-center">Level</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php 
           $no = 1;
           foreach($row->result() as $key => $data) : ?>
               <tr>
                   <td class="text-center"><?= $no++; ?></td>
                   <td class="text-center"><?= $data->username ?></td>
                   <td class="text-center"><?= $data->name ?></td>
                   <td class="text-center"><?= $data->address ?></td>
                   <td><?= $data->level == 1 ? "Admin1" : "Admin2"?></td>
                   <td class="text-center" width="170px">

                   <form action="<?=site_url('user/del')?>" method="post">

                   <input type="hidden" name="id_user" value="<?=$data->id_user?>">
                    <button onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger btn-xs">
                        <i class="fa fa-trash"></i> Delete
                        
                    </button>
                    </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    </div>
</div>