<div class="container">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>

    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <br>
            <div class=" card-header justify-content-center">
                <h2><b>Form Tambah Game</b></h2>
            </div>
            <br>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group mb-3">
                        <label for="nama_game"><b>Nama Game</b></label>
                        <input value="<?= set_value('nama_game'); ?>" type="text" name="nama_game" class="form-control" id="nama_game" placeholder="Nama game">
						<?= form_error('nama_game', '<small class="text-danger pl-3">', '<small>'); ?>
                    </div>
                    <div class="form-group mb-3">
                        <label for="nama_pencipta"><b>Nama Pencipta</b></label>
                        <input value="<?= set_value('nama_pencipta'); ?>" type="text" name="nama_pencipta" class="form-control" id="nama_pencipta" placeholder="Nama pencipta">
						<?= form_error('nama_pencipta', '<small class="text-danger pl-3">', '<small>'); ?>
                    </div>
                    <div class="form-group mb-3">
                        <label for="nama_penerbit"><b>Nama Penerbit</b></label>
                        <input value="<?= set_value('nama_penerbit'); ?>"type="text" name="nama_penerbit" class="form-control" id="nama_penerbit" placeholder="Nama Penerbit">
						<?= form_error('nama_penerbit', '<small class="text-danger pl-3">', '<small>'); ?>
                    </div>
                    <div class="form-group mb-3">
                        <label for="kategori"><b>Kategori</b></label>
                        <input value="<?= set_value('kategori'); ?>" type="text" name="kategori" class="form-control" id="kategori" placeholder="Kategori">
						<?= form_error('kategori', '<small class="text-danger pl-3">', '<small>'); ?>
                    </div>
                    <a href="<?= base_url('Game') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-primary float right">Tambah Game</button>
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