<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">&emsp;<?php echo $judul; ?></h1>
    <div class="row">

        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nis</th>
                        <th>Status</th>
                        <th>Jenis Kelamin</th>
                        <th>Pengajuan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Aditya Dyan Ramadhan</td>
                        <td>4578934894689</td>
                        <td>Alumni</td>
                        <td>Laki-laki</td>
                        <td>Pengajuan Legalisir</td>
                        <td>
                            <a href="<?= base_url('Arsipm/detail/'); ?>" class="badge badge-warning">Detail</a>
                            <a href="<?= base_url('Arsipm/proses/'); ?>" class="badge badge-info">Proses</a>
                            <a href="<?= base_url('Arsipm/hapus/'); ?>" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>