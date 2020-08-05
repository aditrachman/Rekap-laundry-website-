<?php
include "koneksi.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$level = $_POST['level'];


$query = mysqli_query($koneksi, "update user set nama='$nama', username='$username', level='$level' where id='$id'");
if ($query) {
    ?><script language="javascript">
	document.location.href = "tadmin.php";
</script>
<?php
} else {
    echo "Gagal update data";
    echo mysqli_error($koneksi);
}
?>