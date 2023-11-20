<div class="container">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>

    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <br>
            <div class=" card-header justify-content-center">
                <h2><b>Form ubah Prodi</b></h2>
            </div>
            <br>
            <div class="card-body">
                <form action="<?= base_url() ?>Prodi/update?>" method="POST">
                    <div class="form-group mb-3">
                        <label for="nama"><b>Nama Prodi</b></label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">

                    </div>
                    <div class="form-group mb-3">
                        <label for="ruangan"><b>Ruangan</b></label>
                        <input type="text" name="ruangan" class="form-control" id="ruangan" placeholder="NIM">

                    </div>
                    <div class="form-group mb-3">
                        <label for="jurusan"><b>Jurusan</b></label>
                        <select name="jurusan" class="form-control" id="jurusan" class="form-control">
                            <option value="">Jurusan</option>
                            <option value="JTI">JTI</option>
                            <option value="AKTP">AKTP</option>
                        </select>

                    </div>
                    <div class="form-group mb-3">
                        <label for="akreditasi"><b>Akreditasi</b></label>
                        <select name="akreditasi" class="form-control" id="akreditasi" class="form-control">
                            <option value="">Akreditasi</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>

                    </div>
                    <div class="form-group mb-3">
                        <label for="nama_kaprodi"><b>Kaprodi</b></label>
                        <input type="text" name="nama_kaprodi" class="form-control" id="nama_kaprodi" placeholder="Nama Kaprodi">

                    </div>
                    <div class="form-group mb-3">
                        <label for="tahun_berdiri"><b>Tahun Berdiri</b></label>
                        <input type="text" name="tahun_berdiri" class="form-control" id="tahun_berdiri" placeholder="Tahun Berdiri">

                    </div>

                    <div class="form-group mb-3">
                        <label for="output_lulusan"><b>Output Lulusan</b></label>
                        <input type="text" name="output_lulusan" class="form-control" id="output_lulusan" placeholder="Output Lulusan">

                    </div>
                    <a href="<?= base_url('prodi') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-primary float right">Tambah Prodi </button>
                </form>
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