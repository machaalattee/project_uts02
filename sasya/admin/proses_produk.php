<?php 
   require_once 'db_alat_tulis.php';
   
?>
<?php 
   $_id = $_POST['id'];
   $_nama = $_POST['nama'];
   $_harga = $_POST['harga'];
   $_stok = $_POST['stok'];
   $_merk_id = $_POST['merk_id'];
   $_nama_merk = $_POST['nama_merk'];
   
   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_id;
   $ar_data[]=$_nama; 
   $ar_data[]=$_harga;
   $ar_data[]=$_stok;
   $ar_data[]=$_merk_id;
   $ar_data[]=$_nama_merk;

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO produk (id,nama,harga,stok,merk_id,nama_merk) VALUES (?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['id'];// ? 8
    $sql = "UPDATE produk SET id=?,nama=?,harga=?,stok=?,merk_id=?,nama_merk=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:index_produk.php');
?>