<div class="card mb-4 mt-2">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
       Input Data Kehadiran
    </div>

<div class="card-body">
    <form method="POST" class="form-inline">
        <div class="form-group mb-2">
            <label for="bulan" class="">Bulan : </label>
            <select name="bulan" class="form-control ml-2">
                <option value="">--Pilih Bulan--</option>
                <option value="01">Januari</option>
                <option value="02">Februari</option>
                <option value="03">Maret</option>
                <option value="04">April</option>
                <option value="05">Mei</option>
                <option value="06">Juni</option>
                <option value="07">Juli</option>
                <option value="08">Agustus</option>
                <option value="09">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
            </select>
        </div>

        <div class="form-group mb-2 ml-5">
            <label for="tahun" class="">Tahun :</label>
            <select name="tahun" class="form-control ml-2">
                <option value="">--Pilih Tahun--</option>
                <?php $tahun = date('Y');
                    for($i=2020;$i<$tahun+3;$i++) : ?>
                        <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor; ?>
            </select>
        </div>
        

  <button type="submit" class="btn btn-primary mb-2 ml-auto"><i class="fas fa-eye"></i>Generate</button>

  

    </form>
    </div>
</div>

<?php 
    if((isset($_POST['bulan']) && $_POST['bulan']!='') && (isset($_POST['tahun']) && $_POST['tahun']!='')) {
        $bulan = $_POST['bulan'];
        $tahun = $_POST['tahun'];
        $bulantahun = $bulan.$tahun;
    }else{
        $bulan = date('m');
        $tahun = date('Y');
        $bulantahun = $bulan.$tahun;
    }
?>

<div class="alert alert-info">
    Menampilkan data Kehadiran Pegawai : <span class="font-weight-bold"><?= $bulan ?></span> Tahun : <span class="font-weight-bold"><?= $tahun ?></span>
</div>

<div class="card-body">
<form method="POST">
<button class="btn btn-success mb-2 ml-4" type="submit" name="submit">Simpan</button>
<table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
    <tr>
        <td class="text-center">No</td>
        <td class="text-center">NIP</td>
        <td class="text-center">Nama Karyawan</td>
        <td class="text-center">Jenis Kelamin</td>
        <td class="text-center">Jabatan</td>
        <td class="text-center" width="8%">Hadir</td>
        <td class="text-center" width="8%">Sakit</td>
        <td class="text-center" width="8%">Alpha</td>
    </tr>

    <?php 
    $no = 1;
    foreach($input_absensi as $a ): ?>
        <tr>
            <input type="hidden" name="bulan[]" class="form-control" value="<?= $bulantahun ?>">
            <!-- <input type="hidden" name="nip[]" class="form-control" value="<?= $a->$nip ?>"> -->

            <td class="text-center"><?= $no++; ?></td>
            <td class="text-center"><?= $a->nip ?></td>
            <td class="text-center"><?= $a->nama ?></td>
            <td class="text-center"><?= $a->jenis_kelamin ?></td>
            <td class="text-center"><?= $a->jabatan ?></td>
            <td><input type="number" name="hadir[]" class="form-control" value="0"> </td>
            <td><input type="number" name="sakit[]" class="form-control" value="0"> </td>
            <td><input type="number" name="alpha[]" class="form-control" value="0"> </td>
        </tr>
    <?php endforeach; ?>
</table>
</form>
</div>