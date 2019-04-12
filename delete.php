<?php

include("config.php");
$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM barangmainan WHERE id=$id");
echo "<script>alert('Hapus maklumat berjaya');"
    . "window.location='index.php'</script>";

?>
