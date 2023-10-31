<header class="navbar navbar-expand-sm navbar-light d-print-none">
    <div class="container-xl">
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <!-- Logo -->
            <a href="<?= base_url(); ?>">
                <img src="<?= base_url('assets/logo hibook solo.png'); ?>" 
                    alt="Logo"
                    width="110" height="90"
                />
                <img src="<?= base_url('assets/logo hibook fuente.png'); ?>" 
                    alt="Nombre"
                    width="100" height="60"
                />
            </a>
        </h1>
        
        <!-- Botones -->
        <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item">
                <a href="<?= base_url(); ?>" class="nav-link d-flex lh-1 text-reset p-0">
                    <img src="<?= base_url('uploads/Avatar.png'); ?>" alt="Avatar" style="width: 80px; height: 80px;">
                    <div class="d-none d-xl-block ps-2">
                        <?php if (isset($_SESSION["usuario"])){ ?><div> <?php echo $_SESSION["usuario"]; ?> </div> <?php }?>
                    </div>
                </a>
            </div>
        </div>
    </div>
</header>