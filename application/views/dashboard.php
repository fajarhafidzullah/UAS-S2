<div class="row ml-auto">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">Pegawai</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link">Jumlah : <?=$this->fungsi->count_karyawan()?></a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">Absensi</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" >Jumlah :  <?=$this->fungsi->count_absensi()?></a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body">Users</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" >Jumlah :  <?=$this->fungsi->count_absensi()?></a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    
        
    </div>
</div>
