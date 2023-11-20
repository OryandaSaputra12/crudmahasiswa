<div class="container">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <br>
    <div class="row">
        <div class=" col-md-6"><a href="<?= base_url() ?>Mahasiswa/tambah" class="btn btn-info mb-2">TambahMahasiswa</a>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama</td>
                            <td>NIM</td>
                            <td>Email</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($mahasiswa as $us): ?>
                            <tr>
                                <td>
                                    <?= $i; ?>.
                                </td>
                                <td>
                                    <?= $us['nama']; ?>
                                </td>
                                <td>
                                    <?= $us['nim']; ?>
                                </td>
                                <td>
                                    <?= $us['email']; ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('Mahasiswa/hapus/') . $us['id']; ?>"class="btn btn-danger">Hapus</a>
                                    <a href="<?= base_url('Mahasiswa/edit/') . $us['id']; ?>"class="btn btn-warning">Edit</a>
                                    <a href="<?= base_url('Mahasiswa/detail/') . $us['id']; ?>"class="btn btn-info">Detail</a>
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