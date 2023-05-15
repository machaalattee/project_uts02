<?php  
    require_once 'db_alat_tulis.php'; 
    include_once 'tamplates/header.php';
    include_once 'tamplates/sidebar.php';
    include_once 'tamplates/topbar.php';
?> 
<?php 
$id = $_GET['id']; 
$sql = "SELECT * FROM merk WHERE id = ?"; 
$r = $dbh->prepare($sql); 
$r->execute(array($id)); 
$hasil = $r->fetch(); 
?> 
             
<form method="POST" action="proses_merk.php"> 
   <input type ="hidden" name = "id" value="<?php echo $hasil['id']; ?>"> 
  
  <div class="form-group row"> 
    <label for="nama_merk" class="col-4 col-form-label">Nama_merk</label>  
    <div class="col-8"> 
      <div class="input-group"> 
        <div class="input-group-prepend"> 
          <div class="input-group-text"> 
            <i class="fa fa-adjust"></i> 
          </div> 
        </div>  
        <input id="nama_merk" name="nama_merk" type="text" class="form-control"  
        value="<?php echo $hasil['nama_merk']; ?>"> 
      </div> 
    </div> 
  </div> 

  <div class="form-group row"> 
    <div class="offset-4 col-8"> 
      <input type="submit" name="proses" type="submit"  
      class="btn btn-primary" value="Update"/> 
    </div> 
  </div> 
</form>
<?php
include_once 'tamplates/footer.php';
?>