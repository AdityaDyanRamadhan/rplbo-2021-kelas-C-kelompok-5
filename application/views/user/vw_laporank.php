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
                    <?php $i = 1; ?>
                    <?php foreach ($laporank as $us) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><?= $us['nama']; ?></td>
                            <td><?= $us['nip']; ?></td>
                            <td><?= $us['perihal']; ?></td>
                            <td><?= $us['tempat_tujuan']; ?></td>
                            <td><?= $us['lama_keluar']; ?></td>
                            <td>
                                <a href="<?= base_url('Laporank/detail/') . $us['id']; ?>" class="badge badge-warning">Detail</a>
                                <a href="<?= base_url('Laporank/proses/') . $us['id']; ?>" class="badge badge-info">Proses</a>
                                <a href="<?= base_url('Laporank/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>