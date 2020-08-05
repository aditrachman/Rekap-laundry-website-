<?php
include "koneksi.php";

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$berat = $_POST['berat'];
$jenis = $_POST['jenis'];
$query = mysqli_query($koneksi, "INSERT INTO tb_23(nama, alamat, nohp, berat, jenis) value ('$nama','$alamat','$nohp','$berat','$jenis')");
if ($query) {
	?><script language="javascript">
	document.location.href = "timelinelihat.php";
</script>
<?php
} else {
	echo "gagal input data";
}
?>

