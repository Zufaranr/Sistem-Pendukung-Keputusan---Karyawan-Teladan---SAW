<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Alternatif</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?= site_url('home/simpan_alt') ?>">

                            <label for="">Nama Karyawan</label>
                            <input type="text" name="nama" class="form-control"><br>

                            <label for="">C1</label>
                            <input type="number" name="nilai1" class="form-control"><br>

                            <label for="">C2</label>
                            <input type="number" name="nilai2" class="form-control"><br>

                            <label for="">C3</label>
                            <input type="number" name="nilai3" class="form-control"><br>

                            <label for="">C4</label>
                            <input type="number" name="nilai4" class="form-control"><br>

                            <label for="">C5</label>
                            <input type="number" name="nilai5" class="form-control"><br>

                            <label for="">C6</label>
                            <input type="number" name="nilai6" class="form-control"><br>

                            <button class="btn btn-primary" onclick="location.href='<?= site_url('home/view_alt') ?>'">
                                Submit
                            </button>
                        </form>
                        <button class="btn btn-secondary" onclick="location.href='<?= site_url('home/view_alt') ?>'" style="margin-left: 90px; margin-top: -65px;">
                            Kembali
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>