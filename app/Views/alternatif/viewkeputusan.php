<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <!-- Hitung NORMALISASI -->
        <div class="card">
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Karyawan</th>
                  <th>Hasil Nilai</th>
                  <!-- <th>Status Bantuan</th> -->
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;
                foreach ($dataMb['all'] as $row) :
                  foreach ($dataMb['B1'] as $x) :
                    foreach ($dataMb['B2'] as $y) :
                      foreach ($dataMb['B3'] as $z) :
                        foreach ($dataMb['B4'] as $a) :
                          foreach ($dataMb['B5'] as $b) :
                            foreach ($dataMb['B6'] as $c) :
                              $no++;
                              foreach ($dataMb['maxmin'] as $rowx) :

                ?>
                                <tr>
                                  <th> <?= $no; ?></th>
                                  <td><?= $row->nama_usaha; ?></td>

                                  <?php $jumlah = round(($row->C1 / $rowx->maxminK1) * $x->nilai_kriteria, 3) + round(($row->C2 / $rowx->maxminK2) * $y->nilai_kriteria, 3) + round(($row->C3 / $rowx->maxminK3) * $z->nilai_kriteria, 3) + round(($row->C4 / $rowx->maxminK4) * $a->nilai_kriteria, 3) + round(($row->C5 / $rowx->maxminK5) * $b->nilai_kriteria, 3) + round(($row->C6 / $rowx->maxminK6) * $c->nilai_kriteria, 3); ?>
                                  <td><?= $jumlah ?></td>
                                  <!-- <td><?php if ($jumlah > 0.5) {
                                              echo "Mendapat Bantuan";
                                            } else {
                                              echo "Tidak Mendapat Bantuan";
                                            } ?></td> -->
                                </tr>
                <?php
                              endforeach;
                            endforeach;
                          endforeach;
                        endforeach;
                      endforeach;
                    endforeach;
                  endforeach;
                endforeach;
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>