<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
  }
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


                                <!-- CONTENT -->
            <div class="container-fluid">
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h3 class="text-dark mb-0">Tambah Data Laundry</h3>
                </div>
            </div>
            <div class="container-fluid">
      <form action="proses.php" method="post">
                        
                        <div class="form-group">
                          <label>Nama</label>
                            <input type="text" name="nama" class="form-control" >
                        </div>
                        
                        <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" id="" class="form-control"></textarea>
                        </div>
                       
                        <div class="form-group">
                          <label>No hp</label>
                          <input type="text" name="nohp" class="form-control" >
                         </div>  
                       
                          <div class="form-group">
                            <label>jenis</label>
                            <select class="form-control" name="jenis">
                              <option>-- jenis --</option>
                              <option>Cuci setrika</option>
                              <option>Setrika</option>
                              <option>Selimut / bedcover</option>

                            </select>
                          </div>

                        <div class="form-group">
                          <label>berat</label>
                            <input type="text" name="berat" class="form-control">
                        </div>
                        <button type="reset" class="btn btn-secondary" >Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>

        </div>
                                <!-- CONTENT -->



                            <!-- BAGIAN FOOTER -->                               
            <?php
              include('template/kakineh.php');
            ?>
                            <!-- BAGIAN FOOTER -->


</body>
</html>