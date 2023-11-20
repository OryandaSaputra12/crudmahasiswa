<div class="container">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card”">
                <div class=" card-header justify-content-center">
                    <h2><b>Form Tambah Data Mahasiswa</b></h2>
                </div>
                <br>
                <div class="card-body">
                    <form action="<?= base_url() ?>Mahasiswa/update?>" method="POST">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="form-group mb-3">
                            <label for="nama"><b>Nama</b></label>
                            <input type="text" name="nama" value="<?= $mahasiswa['nama']; ?>" class="form-control"
                                id="nama" placeholder="Nama">

                        </div>
                        <div class="form-group mb-3">
                            <label for="nim"><b>Nim</b></label>
                            <input type="text" name="nim" value="<?= $mahasiswa['nim']; ?>" class="form-control"
                                id="nim" placeholder="NIM">

                        </div>
                        <div class="form-group mb-3">
                            <label for="jenis_kelamin"><b>Jenis Kelamin</b></label>
                            <select name="jenis_kelamin" value="<?= $mahasiswa['jenis_kelamin']; ?>"
                                class="form-control" id="jenis_kelamin" class="form-control">
                                <option value="">Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>

                        </div>
                        <div class="form-group mb-3">
                            <label for="email"><b>Email</b></label>
                            <input type="text" name="email" value="<?= $mahasiswa['email']; ?>" class="form-control"
                                id="email" placeholder="Email">

                        </div>
                        <div class="form-group mb-3">
                            <label for="asal_sekolah"><b>Asal sekolah</b></label>
                            <input type="text" name="asal_sekolah" value="<?= $mahasiswa['asal_sekolah']; ?>"
                                class="form-control" id="email" placeholder="Asal Sekolah">

                        </div>
                        <div class="form-group mb-3">
                            <label for="prodi"><b>Prodi</b></label>
                            <select name="prodi" value="<?= $mahasiswa['prodi']; ?>" class="form-control" id="prodi"
                                class="form-control">
                                <option value="">Pilih Prodi</option>
                                <option value="teknik_informatika">Teknik Informatika</option>
                                <option value="sistem_informasi">Sistem Informasi</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="no_hp"><b>No Telepon</b></label>
                            <input type="text" name="no_hp" value="<?= $mahasiswa['no_hp']; ?>" class="form-control"
                                id="no_hp" placeholder="NO HP">

                        </div>
                        <div class="form-group mb-3">
                            <label for="alamat"><b>Alamat</b></label>
                            <input type="text" name="alamat" value="<?= $mahasiswa['alamat']; ?>" class="form-control"
                                id="alamat" placeholder="Alamat">

                        </div>
                        <a href="<?= base_url('Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float right">Ubah Mahasiswa
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>

</html>