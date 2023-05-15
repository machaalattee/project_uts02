<?php 
include_once 'db_alat_tulis.php'; 
include_once 'tamplates/header.php';
include_once 'tamplates/sidebar.php';
include_once 'tamplates/topbar.php';

 
 
?> 
<?php 
 
$sql = "SELECT * FROM merk"; 
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
                                            <h2>Data Merk</h2> 
                                        </div> 
 
                                        <div class="row content"> 
                                            <div class="col-lg-12"> 
                                                <a href="create_merk.php" class="btn btn-primary mb-2 ">Create Merk</a> 
 
 
                                                <table class="table"> 
                                                    <thead> 
                                                        <tr> 
                                                            <th scope="col">Id</th> 
                                                            <th scope="col">Nama_merk</th>
                                        
                                                        </tr> 
                                                    </thead> 
                                                    <tbody> 
                                                        <?php 
                                                        $no = 1; 
                                                        foreach ($rs as $prod) {
                                                        ?> 
                                                            <tr> 
                                                                <td><?= $prod['id'] ?></td> 
                                                                <td><?= $prod['nama_merk'] ?></td>  
                                                                <td> 
                                                                    <a href="view_merk.php?id=<?= $prod['id'] ?>" class="btn btn-info">View</a> 
                                                                    <a href="edit_merk.php?id=<?= $prod['id'] ?>" class="btn btn-warning">Edit</a> 
                                                                    <a class="btn btn-danger" href="delete_merk.php?id=<?= $prod['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Merk <?= $prod['id'] ?>?')) {return false}">Delete</a>
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