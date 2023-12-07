<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <!-- Hitung NORMALISASI -->
        <div class="card">
          <div class="card-body">
            <p>[Note: B = Benefit
              C = Cost]</p>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Karyawan</th>
                  <th>N1 - Kehadiran [B]</th>
                  <th>N2 - Kualitas & Kuantitas Kerja [B]</th>
                  <th>N3 - Kerjasama [B]</th>
                  <th>N4 - Kehandalan & Inisiatif [B]</th>
                  <th>N5 - Sikap & Etika [B]</th>
                  <th>N6 - Kedisiplinan [B]</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 0;
                foreach ($dataMb['all'] as $row) :
                  $no++;
                  foreach ($dataMb['maxmin'] as $rowx) :
                ?>
                    <tr>
                      <th> <?= $no; ?></th>
                      <td><?= $row->nama_usaha; ?></td>
                      <td><?= $row->C1 ?>/<?= $rowx->maxminK1 ?> = <?= round($row->C1 / $rowx->maxminK1, 2) ?></td>
                      <td><?= $row->C2 ?>/<?= $rowx->maxminK2 ?> = <?= round($row->C2 / $rowx->maxminK2, 2) ?></td>
                      <td><?= $row->C3 ?>/<?= $rowx->maxminK3 ?> = <?= round($row->C3 / $rowx->maxminK3, 2) ?></td>
                      <td><?= $row->C4 ?>/<?= $rowx->maxminK4 ?> = <?= round($row->C4 / $rowx->maxminK4, 2) ?></td>
                      <td><?= $row->C5 ?>/<?= $rowx->maxminK5 ?> = <?= round($row->C5 / $rowx->maxminK5, 2) ?></td>
                      <td><?= $row->C6 ?>/<?= $rowx->maxminK6 ?> = <?= round($row->C6 / $rowx->maxminK6, 2) ?></td>
                      <!-- <td></td> -->
                    </tr>
                <?php
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