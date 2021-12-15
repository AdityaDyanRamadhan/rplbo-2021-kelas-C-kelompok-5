<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header justify-content-center">
                    &emsp; Form Pengajuan Data
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Laporanm/upload'); ?>" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama</label><br>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="nis">Nis</label>
                            <input type="text" name="nis" class="form-control" id="nis" placeholder="Nis">
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="">Pilih</option>
                                <option value="Siswa">Siswa</option>
                                <option value="Alumni">Alumni</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option value="">Pilih</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir">
                        </div>

                        <div class="form-group">
                            <label for="no_hp">No Hp</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="No Hp">
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
                        </div>

                        <div class="form-group">
                            <label for="mengajukan">Mengajukan</label>
                            <select name="mengajukan" id="mengajukan" class="form-control">
                                <option value="">Pilih Surat Masuk</option>
                                <option value="Surat Berkelakuan Baik">Surat Berkelakuan Baik</option>
                                <option value="Legalisir">Legalisir</option>
                                <option value="Rekap Nilai">Rekap Nilai</option>
                            </select>
                        </div>

                        <a href="<?= base_url('Laporanm') ?>" class="btn btn-danger">Kembali</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Input Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>