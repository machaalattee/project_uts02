<?php 
   require_once 'db_alat_tulis.php';
?>
<?php 
   $_tanggal = $_POST['tanggal'];
   $_produk_id = $_POST['produk_id'];
   $_quantity = $_POST['quantity'];
   $_alamat = $_POST['alamat'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_tanggal; 
   $ar_data[]=$_produk_id;
   $ar_data[]=$_quantity;
   $ar_data[]=$_alamat;

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pesanan (tanggal,produk_id,quantity,alamat) VALUES (?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['id'];// ? 8
    $sql = "UPDATE pesanan SET tanggal=?,produk_id=?,quantity=?,alamat=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:index_pesanan.php');
?>