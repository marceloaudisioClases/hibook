<header class="navbar navbar-expand-sm navbar-light d-print-none">
    <div class="container-xl">
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <!-- Logo -->
            <a href="#">
                <img src="https://preview.tabler.io/static/logo.svg" width="110" height="32" alt="Tabler"
                    class="navbar-brand-image" />
            </a>
        </h1>
        
        <!-- Botones -->
        <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item">
                <a href="#" class="nav-link d-flex lh-1 text-reset p-0">
                    <span class="avatar avatar-sm" style="background-image: url(/samples/avatars/002m.jpg)"></span>
                    <div class="d-none d-xl-block ps-2">
                        <?php if (isset($_SESSION["usuario"])){ ?><div> <?php echo $_SESSION["usuario"]; ?> </div> <?php }?>
                    </div>
                </a>
            </div>
        </div>
    </div>
</header>