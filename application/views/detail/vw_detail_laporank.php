<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header justify-content-center">
                    Detail Laporan
                </div>
                <div class="card-body">
                    <h2 class="card-title"><?= $laporank['nama']; ?></h2>

                    <div class="row">
                        <div class="col-md-4">NIP</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $laporank['nip']; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Email</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $laporank['email']; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">No Hp</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $laporank['no_hp']; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Perihal</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $laporank['perihal']; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Tempat Tujuan</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $laporank['tempat_tujuan']; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Lama Keluar</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $laporank['lama_keluar']; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Keterangan</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $laporank['keterangan']; ?></div>
                    </div>
                </div>
                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('Laporank'); ?>" class="btn btn-danger">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>