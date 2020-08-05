<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
  }
  ?>


<?php
include "koneksi.php";
$query = mysqli_query($koneksi, "select * from tb_23");
$jml = mysqli_num_rows($query);
?>

<!DOCTYPE html>
<html>
<head>
</head>



                            <!-- BAGIAN SIDEBAR -->
        <?php
          include('template/sidebar.php');
        ?>
                            <!-- BAGIAN SIDEBAR -->



                                                         <!-- INI BATAS LIHAT-->
         <br>

    <!-- DataTales Example -->
    <div class="container">
    <div class="card shadow mb-4 ">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data pemasukan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
               <!--Table-->
<table class="table table-hover table-fixed">

<!--Table head-->
<thead>
  <tr>
    <th>Nama</th>
    <th>Alamat</th>
    <th>No hp</th>
    <th>Berat</th>
    <th>Jenis</th>
    <th>aksi</th>
  </tr>
</thead>
<!--Table head-->

<!--Table body-->
<tbody>
<?php
            $c = 0;
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td> <?= $row['nama'] ?></td>
                    <td><?= $row['alamat']; ?></td>
                    <td><?= $row['nohp']; ?></td>
                    <td><?= $row['berat']; ?></td>
                    <td><?= $row['jenis']; ?></td>
                    <td>
                        <div class="">
                            <button data-toggle="tooltip" title="Edit <?= $row['nama']; ?>" data-id="<?= $row['id'] ?>" data-nama="<?= $row['nama']; ?>" data-alamat="<?= $row['alamat']; ?>" data-nohp="<?= $row['nohp']; ?>" data-berat="<?= $row['berat']; ?>" data-jenis="<?= $row['jenis']; ?>" class="editData btn btn-sm btn-warning">Edit</button>
                            <button data-toggle="tooltip" title="Hapus <?= $row['nama']; ?>" data-id="<?= $row['id'] ?>" data-nama="<?= $row['nama']; ?>" class="hapusData btn btn-sm btn-danger">Hapus</button>
                        </div>
                    </td>
                </tr>
            <?php
            }
            ?>
</tbody>
<!--Table body-->
</table>
</div>
<!--Table-->
              </div>
            </div>
          </div>


    
                             <!-- Modal edit-->

    <div class="modal fade" id="edit-biodata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Biodata</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="simpanadmin.php" method="post">
                        <input type="hidden" id="idedit" name="id">
                        <p>Nama </p>
                        <div class="form-group">
                            <input type="text" id="namaedit" name="nama" class="form-control" >
                        </div>
                        <p>Alamat</p>
                        <div class="form-group">
                        <textarea class="form-control" id="alamatedit" name="alamat"></textarea>
                        </div>
                        <p>No hp</p>
                        <div class="form-group">
                        <input type="text" id="nohpedit" name="nohp" class="form-control">
                        </div>
                        
                        <p>Jenis laundry</p>
                        <div class="form-group">
                        <select class="form-control" name="jenis" id="jenisedit" >
                            <option>-- Jenis laundry --</option>
                            <option>cuci setrika</option>
                            <option>cuci komplit</option>
                        </select>
                        </div>
                        
                        <p>berat</p>
                        <div class="form-group">
                            <input type="text" id="beratedit" name="berat" class="form-control" >
                        </div>
                        

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
                             <!-- Modal edit-->


    <!-- Modal -->
    <div class="modal fade" id="hapus-biodata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Biodata</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="isinya"></p>
                </div>
                <div class="modal-footer">
                    <form action="delete.php" method="post">
                        <input type="hidden" name="id" id="idhapus">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.tambahBiodata').click(function() {
            $('#tambah-biodata').modal('show');
        });

        $('.editData').click(function() {
            $('#idedit').val($(this).data('id'));
            $('#namaedit').val($(this).data('nama'));
            $('#alamatedit').val($(this).data('alamat'));
            $('#nohpedit').val($(this).data('nohp'));
            $('#beratedit').val($(this).data('berat'));
            $('#jenisedit').val($(this).data('jenis'));
            $('#edit-biodata').modal('show');
        });

        $('.hapusData').click(function() {
            $('#idhapus').val($(this).data('id'));
            var nama = ($(this).data('nama'));
            $('#isinya').html('Apakah anda ingin menghapus <strong class="text-danger">' + nama + '</strong> ?');
            $('#hapus-biodata').modal('show');
        });
    </script>


                            <!-- INI BATAS LIHAT-->




                            <!-- BAGIAN FOOTER -->                               
             <?php
              include('template/kakineh.php');
            ?>
                            <!-- BAGIAN FOOTER -->



</body>
</html>