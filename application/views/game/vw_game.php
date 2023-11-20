<div id="layoutError">
            <div id="layoutError_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="container-fluid">
                                    <h1 class="h3 mb-4 text-gray-800"> <?php echo $judul; ?></h1>
                                    <div class="col-md-6"><a href="<?= base_url() ?>Game/tambah" class="btn btn-info mb-2">Tambah Game</a></div>
                                    <div class="col-md-12">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td>No</td>
                                                    <td>Nama Game</td>
                                                    <td>Nama Pencipta</td>
                                                    <td>nama Penerbit</td>
                                                    <td>Kategori</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=1;?>
                                                <?php foreach ($game as $us) : ?>
                                                    <tr>
                                                        <td> <?= $i; ?>.</td>
                                                        <td> <?= $us['nama_game']; ?></td>
                                                        <td> <?= $us['nama_pencipta']; ?></td>
                                                        <td> <?= $us['nama_penerbit']; ?></td>
                                                        <td> <?= $us['kategori']; ?></td>
                                                        <td> 
                                                            <a href ="<?= base_url('Game/hapus/') . $us['id_game']; ?>" class="btn btn-danger">Hapus</a>
                                                            <a href ="<?= base_url('Game/edit/') . $us['id_game']; ?>" class="btn btn-warning">Edit</a>
                                                        </td>
                                                </tr>
                                                <?php $i++;?>
                                                <?php endforeach;?>
                                            </tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
<div id="layoutError_footer">
               
