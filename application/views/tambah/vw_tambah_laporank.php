<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header justify-content-center">
                    &emsp; Form Pengajuan Data
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Laporank/upload'); ?>" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama</label><br>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="nip">Nip</label>
                            <input type="text" name="nip" class="form-control" id="nip" placeholder="Nip">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <label for="no_hp">No Hp</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="No Hp">
                        </div>

                        <div class="form-group">
                            <label for="perihal">Perihal</label>
                            <input type="text" name="perihal" class="form-control" id="perihal" placeholder="Perihal">
                        </div>

                        <div class="form-group">
                            <label for="tempat_tujuan">Tempat Tujuan</label>
                            <input type="text" name="tempat_tujuan" class="form-control" id="tempat_tujuan" placeholder="Tempat Tujuan">
                        </div>

                        <div class="form-group">
                            <label for="lama_keluar">Lama Keluar</label>
                            <input type="text" name="lama_keluar" class="form-control" id="lama_keluar" placeholder="dd/mm/yy - dd/mm/yy">
                        </div>

                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Keterangan">
                        </div>


                        <a href="<?= base_url('Laporank') ?>" class="btn btn-danger">Kembali</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Input Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>