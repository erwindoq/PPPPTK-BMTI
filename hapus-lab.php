<?php 
include "koneksi.php";
$id = antiinjection($_GET['id']);

$query_mysql = mysql_query("SELECT * FROM lab WHERE id='$id'");
if (mysql_num_rows($query_mysql)>0) {

	mysql_query("DELETE FROM lab WHERE id='$id'");
	header("location: admin.php");
} else {
	echo "Data laboratorium tidak ditemukan...";
}
?>