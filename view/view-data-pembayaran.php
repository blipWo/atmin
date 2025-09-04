<?php include('../../conf/config.php'); ?>
<div class="card">
              <div class="card-header">
<h3 class="card-title">Data Pembayaran : <?php echo $nim;?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambah Data
                </button>
                <br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Pembayaran</th>
                    <th>Keterangan</th>
                    <th>Tanggal Bayar</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $nim = isset($_POST['nim']) ? $_POST['nim'] : '';
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_pembayaran WHERE nim = '$nim'");
                    while($mhs = mysqli_fetch_array($query)){
                    $no++
                    ?>
                  <tr>
                    <td width='5%'><?php echo $no;?></td>
                    <td><?php echo $mhs['nama'];?></td>
                    <td><?php echo $mhs['nim'];?></td>
                    <td><?php echo $mhs['pembayaran'];?></td>
                    <td><?php echo $mhs['keterangan'];?></td>
                    <td><?php echo $mhs['tanggal-bayar'];?></td>
                    <td>
                      <a onclick="hapus_data(<?php echo $mhs['id'];?>)" class="btn btn-sm btn-danger">Hapus</a>
                      <a href="index.php?page=edit_data&& id=<?php echo $mhs['id'];?>" class="btn btn-sm btn-success">Edit</a>
                      <a class="view-data btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-view" 
                      data-nama="<?php echo $mhs['nama'];?>"
                      data-nim="<?php echo $mhs['nim'];?>"
                      data-semester="<?php echo $mhs['semester'];?>">View Data</a>
                    </td>
                  </tr>
                  <?php }?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>