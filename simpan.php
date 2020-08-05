<?php
include "koneksi.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$berat = $_POST['berat'];
$jenis = $_POST['jenis'];

$query = mysqli_query($koneksi, "update tb_23 set nama='$nama', alamat='$alamat', nohp='$nohp', berat='$berat', jenis='$jenis' where id='$id'");
if ($query) {
    ?><script language="javascript">
	document.location.href = "tlihat.php";
</script>
<?php
} else {
    echo "Gagal update data";
    echo mysqli_error($koneksi);
}
?>