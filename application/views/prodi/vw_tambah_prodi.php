<body>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">
            <?php echo $judul; ?>
        </h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header justify-content-center">
                        Form Ubah Data Prodi
                    </div>
                    <div class="card-body">
                    <form action="<?=base_url('Prodi/upload')?>" method="POST">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama prodi">
                            </div>
                            <div class="form-group">
                                <label for="ruangan">ruangan</label>
                                <input type="text" name="ruangan" class="form-control" id="ruangan"
                                    placeholder="ruangan">
                            </div>
                            <div class="form-group">
                                <label for="jurusan">jurusan</label>
                                <input type="text" name="jurusan" class="form-control" id="jurusan"
                                    placeholder="jurusan">
                            </div>

                   
                    <div class="form-group">
                        <label for="akreditasi">akreditasi</label>
                        <input type="text" name="akreditasi" class="form-control" id="akreditasi"
                            placeholder="akreditasi">
                    </div>
                    <div class="form-group">
                        <label for="nama_kaprodi">nama_kaprodi</label>
                        <input type="text" name="nama_kaprodi" class="form-control" id="nama_kaprodi"
                            placeholder="nama_kaprodi">
                    </div>
                    <div class="form-group">
                        <label for="tahun_berdiri">tahun_berdiri</label>
                        <input type="text" name="tahun_berdiri" class="form-control" id="tahun_berdiri"
                            placeholder="tahun_berdiri">
                    </div>
                    <div class="form-group">
                        <label for="output_lulusan">output_lulusan</label>
                        <input type="text" name="output_lulusan" class="form-control" id="output_lulusan" placeholder="outuput_lulusan">

                    </div>
                   
                    <a href="<?= base_url('Prodi') ?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-primary float-right"> Tambah prodi </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="<?= base_url('assets/') ?>libs/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/sidebarmenu.js"></script>
    <script src="<?= base_url('assets/') ?>js/app.min.js"></script>
    <script src="<?= base_url('assets/') ?>libs/simplebar/dist/simplebar.js"></script>
    <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/') ?>images/logos/favicon.png" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/styles.min.css" />

</body>