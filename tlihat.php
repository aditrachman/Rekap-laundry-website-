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
          include('template/sidebarpegawai.php');
        ?>
                            <!-- BAGIAN SIDEBAR -->



                                                         <!-- INI BATAS LIHAT-->
       

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
                            <!-- INI BATAS LIHAT-->




                            <!-- BAGIAN FOOTER -->                               
             <?php
              include('template/kakineh.php');
            ?>
                            <!-- BAGIAN FOOTER -->



</body>
</html>