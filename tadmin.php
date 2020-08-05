<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
  }
  ?>


<?php
include "koneksi.php";
$query = mysqli_query($koneksi, "select * from user");
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

<h3 class="container">Pengaturan user</h3>
                                                         <!-- INI BATAS LIHAT-->
         <br>
           <div class="container table-responsive">
        <table class="table table bordered text-dark">
            <tr>
                <th>Nama</th>
                <th>Username</th>
                <th>Level</th>
                <th>aksi</th>
            </tr>

            <?php
            $c = 0;
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['username']; ?></td>
                    <td><?= $row['level']; ?></td>
                    <td>
                        <div class="">
                            <button data-toggle="tooltip" title="Edit <?= $row['nama']; ?>" data-id="<?= $row['id'] ?>" data-nama="<?= $row['nama']; ?>" data-username="<?= $row['username']; ?>" data-level="<?= $row['level']; ?>" class="editData btn btn-sm btn-warning">Edit</button>
                            <button data-toggle="tooltip" title="Hapus <?= $row['nama']; ?>" data-id="<?= $row['id'] ?>" data-nama="<?= $row['nama']; ?>" class="hapusData btn btn-sm btn-danger">Hapus</button>
                        </div>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table><br>
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
                    <form action="simpanuser.php" method="post">
                        <input type="hidden" id="idedit" name="id">
                        <p>Nama user</p>
                        <div class="form-group">
                            <input type="text" id="namaedit" name="nama" class="form-control" >
                        </div>
                        <p>username</p>
                        <div class="form-group">
                        <textarea class="form-control" id="usernameedit" name="username"></textarea>
                        </div>
                        
                        <p>Level</p>
                        <div class="form-group">
                        <select class="form-control" name="level" id="leveledit" >
                            <option>-- Level --</option>
                            <option>admin</option>
                            <option>pegawai</option>
                        </select>
                        </div>
                        

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
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
                    <form action="deleteadmin.php" method="post">
                        <input type="hidden" name="id" id="idhapus">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
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
            $('#usernameedit').val($(this).data('username'));
            $('#leveledit').val($(this).data('level'));
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