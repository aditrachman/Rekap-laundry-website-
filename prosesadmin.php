<?php
include "koneksi.php";

$nama = $_POST['nama'];
$username = $_POST['username'];
$level = $_POST['level'];

$query = mysqli_query($koneksi, "INSERT INTO user(nama, username, level) value ('$nama','$username','$level')");
if ($query) {
	?><script language="javascript">
	document.location.href = "timelineadmin.php";
</script>
<?php
} else {
	echo "gagal input data";
}
?>

