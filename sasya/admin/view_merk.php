<?php  
require_once 'db_alat_tulis.php'; 
include_once 'tamplates/header.php';
include_once 'tamplates/sidebar.php';
include_once 'tamplates/topbar.php';
?> 
<?php 
    $_id = $_GET['id']; 
     
    $sql = "SELECT * FROM merk WHERE id=?"; 
    $st = $dbh->prepare($sql); 
    $st->execute([$_id]); 
    $row = $st->fetch(); 
   
?> 
 
<table class="table table-striped"> 
    <tbody> 
        <tr>  <td>Id</td><td><?=$row['id']?></td></tr> 
        <tr>  <td>Nama_merk</td><td><?=$row['nama_merk']?></td></tr>
          
    </tbody> 
</table>
<?php 
require_once 'tamplates/footer.php'; 
?>