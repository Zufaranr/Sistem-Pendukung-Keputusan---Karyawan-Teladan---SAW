<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data Bobot</h3>
                </div>
                <div class="card-body">
                <?php
                    $session = session();
                    if ($session->has('alert')) {
                        echo '<script>alert("' . $session->getFlashdata('alert') . '")</script>';
                    }
                ?>
                <form method="post" action="<?= site_url('home/simpan_bobot') ?>">
                    <label for="">Nama Bobot</label>
                    <select name="nama" class="form-control">
                        <?php foreach($dataa as $row) : ?>
                            <option value="<?=$row->nama_kriteria?>"><?=$row->nama_kriteria?></option>
                        <?php endforeach ?>
                    </select><br>

                    <label for="">Nama Bobot</label>
                    <input type="text" name="namabo" class="form-control"><br>

                    <label for="">Nilai Bobot</label>
                    <input type="number" name="nilai" class="form-control"><br>

                    <button class="btn btn-primary">Submit</button>
                </form>
                <button class="btn btn-secondary" onclick="location.href='<?=site_url('home/view_bobot')?>'" style="margin-left: 90px; margin-top: -65px;">
                    Kembali
                </button>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>