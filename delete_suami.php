<?php

include('koneksi.php');
$delete_query = mysql_query("delete from kawinsyah where id='" . $_GET['id'] . "'");
if ($delete_query) {
    header("location:view_suami.php");
} else {
    echo mysql_error();
}
?>