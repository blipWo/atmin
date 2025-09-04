
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Mahasiswa</h3>
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
                    <th>Semester</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_mahasiswa");
                    while($mhs = mysqli_fetch_array($query)){
                    $no++
                    ?>
                  <tr>
                    <td width='5%'><?php echo $no;?></td>
                    <td><?php echo $mhs['nama'];?></td>
                    <td><?php echo $mhs['nim'];?></td>
                    <td><?php echo $mhs['semester'];?></td>
                    <td>
                      <a class="view-pembayaran btn btn-sm btn-warning" data-nim="<?php echo $mhs['nim'];?>">View Pembayaran</a>
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
            <!-- View Data Pembayaran -->
             <div id="hasil-view-pembayaran">

             </div>
                      <?php include('view/view-data-pembayaran.php');?>
            <!-- End Data Pembayaran -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
      <div class="modal fade" id="modal-lg">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Tambah Data</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form method="get" action="add/tambah_data.php">
                <div class="modal-body">
                  
      <div class="form-row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Nama" name="nama" required>
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="NIM" name="nim" required>
        </div>
        <div class="col">
          <select class="custom-select" id="inputGroupSelect01" name="semester" >
    <option selected>Pilih...</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select>
        </div>
      </div>
    
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </div>
              </form>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- modal view data -->
           <!-- modal view data -->
<div class="modal fade" id="modal-view">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form method="get" action="add/tambah_data.php">
        <div class="modal-header">
          <h4 class="modal-title">View Data </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="hasil-view-data">
          <!-- isi ajax masuk sini -->
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

  <script>
    function hapus_data(data_id){
      // alert('ok');
      // window.location=("delete/hapus_data.php?id="+data_id);
      Swal.fire({
  title: "Yakin Dengan Pilihanmu?",
  // showDenyButton: false,
  showCancelButton: true,
  confirmButtonText: "Hapus?",
  confirmButtonColor: '#CD5C5C',
  // denyButtonText: `Don't save`
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    window.location=("delete/hapus_data.php?id="+data_id);
  } 
});
    }
  </script>