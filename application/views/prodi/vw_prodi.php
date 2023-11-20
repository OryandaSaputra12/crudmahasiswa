<div class="container">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row">
        <div class="col-md-6"><a href="<?= base_url() ?>Prodi/tambah" class="btn btn-info mb-2">Tambah Prodi</a></div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama Prodi</td>
                        <td>Ruangan</td>
                        <td>Jurusan</td>
                        <td>Akreditasi</td>
                        <td>Nama Kaprodi</td>
                        <td>Tahun Berdiri</td>
                        <td>Output Lulusan</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($prodi as $pr): ?>
                        <tr>
                            <td>
                                <?= $i; ?>.
                            </td>
                            <td>
                                <?= $pr['nama']; ?>
                            </td>
                            <td>
                                <?= $pr['ruangan']; ?>
                            </td>
                            <td>
                                <?= $pr['jurusan']; ?>
                            </td>
                            <td>
                                <?= $pr['akreditasi']; ?>
                            </td>
                            <td>
                                <?= $pr['nama_kaprodi']; ?>
                            </td>
                            <td>
                                <?= $pr['tahun_berdiri']; ?>
                            </td>
                            <td>
                                <?= $pr['output_lulusan']; ?>
                            </td>
                            <td>
                                <a href="<?= base_url('Prodi/hapus/') . $pr['id']; ?>" class="btn btn-danger">Hapus</a>
                                <a href="<?= base_url('Prodi/edit/') . $pr['id']; ?>" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>

</html>