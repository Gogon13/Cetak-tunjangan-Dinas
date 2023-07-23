<?php

include('koneksi.php');
$delete_query = mysql_query("delete from data_pegawai where id='" . $_GET['id'] . "'");
if ($delete_query) {
    header("location:view_pegawai.php");
} else {
    echo mysql_error();
}
?>