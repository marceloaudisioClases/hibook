<?php 
    $ancho_bar = "40px"; 
    $tamaño_titulo = "60px";
    $tamaño_avatar = "60px";
?>
<header class="navbar navbar-expand-sm navbar-light d-print-none">
    <div class="container-xl">
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <!-- Logo -->
            <a href="<?= site_url("inicio/main"); ?>">
                <img src="<?= base_url('assets/logo hibook solo.png'); ?>" 
                    alt="Logo"
                    width=<?= $ancho_bar ?> height="auto"
                />
                <img src="<?= base_url('assets/logo hibook fuente.png'); ?>" 
                    alt="Nombre"
                    width=<?= $tamaño_titulo ?> height="auto"
                />
            </a>
        </h1>
        
        <!-- Botones -->
        <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item">
                <a href="<?= base_url(); ?>" class="nav-link d-flex lh-1 text-reset p-0">
                    <img src=<?php if($_SESSION["avatar"]!=""){echo $_SESSION["avatar"];}else{ echo base_url('assets/default_avatar.png');} ?> alt="Avatar" style="width: <?= $ancho_bar; ?>">
                    <div class="d-none d-xl-block ps-2">
                        <h4><?php if (isset($_SESSION["usuario"])){ ?><div> <?php echo $_SESSION["usuario"]; ?> </div> <?php }?></h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
</header>