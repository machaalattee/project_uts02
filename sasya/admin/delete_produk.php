<?php 
require_once 'db_alat_tulis.php'; 
$id = $_GET['id']; 
$sql = "DELETE FROM produk WHERE id= ?"; 
$r = $dbh->prepare($sql); 
$r->execute(array($id)); 
header('location:index_produk.php'); 
 
?>