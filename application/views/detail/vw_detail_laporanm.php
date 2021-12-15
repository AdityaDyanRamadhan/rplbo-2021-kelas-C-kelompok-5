<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header justify-content-center">
                    Detail Laporan
                </div>
                <div class="card-body">
                    <h2 class="card-title"><?= $laporanm['nama']; ?></h2>

                    <div class="row">
                        <div class="col-md-4">NIS</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $laporanm['nis']; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Jenis Kelamin</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $laporanm['jenis_kelamin']; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Status</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $laporanm['status']; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Tempat Lahir</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $laporanm['tempat_lahir']; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">No Hp</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $laporanm['no_hp']; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Alamat</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $laporanm['alamat']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Mengajukan</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $laporanm['mengajukan']; ?></div>
                    </div>
                </div>
                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('Laporanm'); ?>" class="btn btn-danger">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>