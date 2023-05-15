<?php  
    require_once 'db_alat_tulis.php';
    include_once 'tamplates/header.php';
    include_once 'tamplates/sidebar.php';
    include_once 'tamplates/topbar.php';
?> 
<?php 
    $_id = $_GET['id']; 
   
    $sql = "SELECT * FROM pesanan WHERE id=?"; 
    $st = $dbh->prepare($sql); 
    $st->execute([$_id]); 
    $row = $st->fetch(); 
    
?> 
 
<table class="table table-striped"> 
    <tbody> 
        <tr>  <td>Id</td><td><?=$row['id']?></td></tr> 
        <tr>  <td>Tanggal</td><td><?=$row['tanggal']?></td></tr>
        <tr>  <td>Produk_id</td><td><?=$row['produk_id']?></td></tr> 
        <tr>  <td>Quantity</td><td><?=$row['quantity']?></td></tr>
        <tr>  <td>Alamat</td><td><?=$row['alamat']?></td></tr>
         
    </tbody> 
</table>
<?php 
require_once 'tamplates/footer.php'; 
?>