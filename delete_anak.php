<?php

include('koneksi.php');
$delete_query = mysql_query("delete from tanggungan where id='" . $_GET['id'] . "'");
if ($delete_query) {
    header("location:view_anak.php");
} else {
    echo mysql_error();
}
?>