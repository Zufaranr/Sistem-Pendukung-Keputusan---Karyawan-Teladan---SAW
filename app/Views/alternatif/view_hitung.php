<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <!-- Hitung NORMALISASI -->
        <div class="card">
          <div class="card-body">
            <p>[Note:  B = Benefit
                  C = Cost]</p>
            
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Keterangan</th>
                  
                  <th>C1 - Kehadiran [B] | max</th>
                  <th>C2 - Kualitas & Kuantitas Kerja [B] | max</th>
                  <th>C3 -  Kerjasama [B] | max</th>
                  <th>C4 -  Kehandalan & Inisiatif [B] | max</th>
                  <th>C5 -  Sikap & Etika [B] | max</th>
                  <th>C6 -  Kedisiplinan [B] | max</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php
                  $no=0;
                  foreach($dataMb as $row):
                    $no++;
                    
                ?>
                <tr>
                    <th> Nilai Max/Min Kriteria</th>
                    <td><?= $row->maxminK1?></td>
                    <td><?= $row->maxminK2?></td>
                    <td><?= $row->maxminK3?></td>
                    <td><?= $row->maxminK4?></td>
                    <td><?= $row->maxminK5?></td>
                    <td><?= $row->maxminK6?></td>
                </tr>
                <?php endforeach;?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>