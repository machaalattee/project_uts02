<?php
$menu = [
    'Home' => 'index.php',
    'Produk' => 'index_produk.php',
    'Pesanan' => 'index_pesanan.php',
    'Merk' => 'index_merk.php'
];


$icons = [
    'Home' => 'house',
    'Produk' => 'list',
    'Pesanan' => 'fas fa-file-alt',
    'Merk' => 'fas fa-certificate'
];
?>
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <?php foreach($menu as $key => $value): ?> 
                            <a class="nav-link" href="<?= $value?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-<?= $icons[$key] ?>"></i></div>
                                
                                <?= $key ?>
                            </a>
                            <?php endforeach ?> 
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Sasya Stationery
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">