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
                  <th>
                    <center>C1 - Kehadiran [B] <br /> [N1 x 0.2]</center>
                  </th>
                  <th>
                    <center>C2 - Kualitas & Kuantitas Kerja [B] <br /> [N2 x 0.3]</center>
                  </th>
                  <th>
                    <center>C3 - Kerjasama [B] <br /> [N3 x 0.1]</center>
                  </th>
                  <th>
                    <center>C4 - Kehandalan & Inisiatif [B] <br /> [N4 x 0.15]</center>
                  </th>
                  <th>
                    <center>C5 - Sikap & Etika [B] <br /> [N5 x 0.1]</center>
                  </th>
                  <th>
                    <center>C6 - Kedisiplinan [B] <br /> [N6 x 0.15]</center>
                  </th>
                  <th>Hasil Nilai</th>
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

                            <td><?= round($row->C1 / $rowx->maxminK1, 2) ?> X <?= $x->nilai_kriteria ?> = <?= round(($row->C1 / $rowx->maxminK1) * $x->nilai_kriteria, 3) ?></td>
                            <td><?= round($row->C2 / $rowx->maxminK2, 2) ?> X <?= $y->nilai_kriteria ?> = <?= round(($row->C2 / $rowx->maxminK2) * $y->nilai_kriteria, 3) ?></td>
                            <td><?= round($row->C3 / $rowx->maxminK3, 2) ?> X <?= $z->nilai_kriteria ?> = <?= round(($row->C3 / $rowx->maxminK3) * $z->nilai_kriteria, 3) ?></td>
                            <td><?= round($row->C4 / $rowx->maxminK4, 2) ?> X <?= $a->nilai_kriteria ?> = <?= round(($row->C4 / $rowx->maxminK4) * $a->nilai_kriteria, 3) ?></td>
                            <td><?= round($row->C5 / $rowx->maxminK5, 2) ?> X <?= $b->nilai_kriteria ?> = <?= round(($row->C5 / $rowx->maxminK5) * $b->nilai_kriteria, 3) ?></td>
                            <td><?= round($row->C6 / $rowx->maxminK6, 2) ?> X <?= $c->nilai_kriteria ?> = <?= round(($row->C6 / $rowx->maxminK6) * $c->nilai_kriteria, 3) ?></td>

                            <?php $jumlah = round(($row->C1 / $rowx->maxminK1) * $x->nilai_kriteria, 3) + round(($row->C2 / $rowx->maxminK2) * $y->nilai_kriteria, 3) + round(($row->C3 / $rowx->maxminK3) * $z->nilai_kriteria, 3) + round(($row->C4 / $rowx->maxminK4) * $a->nilai_kriteria, 3) + round(($row->C5 / $rowx->maxminK5) * $b->nilai_kriteria, 3) + round(($row->C6 / $rowx->maxminK6) * $c->nilai_kriteria, 3); ?>
                            <td><?= $jumlah ?></td>
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