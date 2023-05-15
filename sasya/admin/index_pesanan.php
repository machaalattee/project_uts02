<?php 
include_once 'db_alat_tulis.php'; 
include_once 'tamplates/header.php';
include_once 'tamplates/sidebar.php';
include_once 'tamplates/topbar.php';

 
 
?> 
<?php 
 
$sql = "SELECT * FROM pesanan"; 
$rs = $dbh->query($sql); 
?> 
 
<div class="content-wrapper"> 
    <!-- Content Header (Page header) --> 
    <section class="content-header"> 
        <div class="container-fluid"> 
            <div class="row mb-2"> 
                <div class="col-sm-6"> 
                </div> 
            </div> 
 
        </div><!-- /.container-fluid --> 
    </section> 
 
 
    <!-- Main content --> 
    <section class="content"> 
 
        <div class="container-fluid"> 
            <div class="row"> 
                <div class="col-12"> 
                    <!-- Default box --> 
                    <div class="card"> 
                        <div class="card-body"> 
 
                            <main> 
                                <section id="data_produk" class="data_produk"> 
                                    <div class="container" data-aos="fade-up"> 
 
                                        <div class="section-title"> 
                                            <h2>Data Pesanan</h2> 
                                        </div> 
 
                                        <div class="row content"> 
                                            <div class="col-lg-12"> 
                                                <a href="create_pesanan.php" class="btn btn-primary mb-2 ">Create Pesanan</a> 
 
 
                                                <table class="table"> 
                                                    <thead> 
                                                        <tr> 
                                                            <th scope="col">Id</th> 
                                                            <th scope="col">Tanggal</th>
                                                            <th scope="col">Produk_id</th>
                                                            <th scope="col">Quantity</th>
                                                            <th scope="col">Alamat</th>
                                        
                                                        </tr> 
                                                    </thead> 
                                                    <tbody> 
                                                        <?php 
                                                        $no = 1; 
                                                        foreach ($rs as $prod) {
                                                        ?> 
                                                            <tr> 
                                                                <td><?= $prod['id'] ?></td> 
                                                                <td><?= $prod['tanggal'] ?></td>
                                                                <td><?= $prod['produk_id'] ?></td> 
                                                                <td><?= $prod['quantity'] ?></td>
                                                                <td><?= $prod['alamat'] ?></td>
                                                                <td> 
                                                                    <a href="view_pesanan.php?id=<?= $prod['id'] ?>" class="btn btn-info">View</a> 
                                                                    <a href="edit_pesanan.php?id=<?= $prod['id'] ?>" class="btn btn-warning">Edit</a> 
                                                                    <a class="btn btn-danger" href="delete_pesanan.php?id=<?= $prod['id']?>" onclick="if(!confirm('Anda Yakin Hapus Data Pesanan <?= $prod['id'] ?>?')) {return false}">Delete</a>
                                                                </td> 
                                                            </tr> 
                                                        <?php 
                                                            $no++; 
                                                        } 
                                                        ?> 
                                                    </tbody> 
                                                </table> 
                                            </div> 
                                        </div> 
 
                                    </div> 
                                </section><!-- End About Us Section --> 
                        </div> 
                        <!-- /.card-body --> 
 
                        <!-- /.card-footer--> 
                    </div> 
                    <!-- /.card --> 
                </div> 
            </div> 
        </div> 
    </section> 
    <!-- /.content --> 
</div> 
<!-- /.content-wrapper --> 
</main> 
 
<?php 
require_once 'tamplates/footer.php'; 
?>