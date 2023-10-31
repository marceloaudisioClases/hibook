<div class="page page-center">
    <div class="container container-tight py-4">
        <div class="text-center mb-4">
            <a href="#" class="navbar-brand navbar-brand-autodark"><img src="<?php echo base_url('assets/HiBook-logo.jpg') ?>" height="36"
                    alt="Hibook"></a>
        </div>
        <div class="card card-md">
            <div class="card-body">
                <h2 class="h2 text-center mb-4">Inicia sesión con tu cuenta</h2>
                <form action="<?php echo site_url('auth/ingresar'); ?>" method="post" autocomplete="off" novalidate>
                    <div class="mb-3">
                        <?php if (isset($message)) { echo $message;} ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Usuario</label>
                        <input name="usuario" type="text"
                            class="form-control <?php echo (form_error('usuario')) ? "is-invalid" : ""; ?>"
                            placeholder="Tu nombre de usuario" autocomplete="off"
                            value="<?php echo set_value('usuario'); ?>">
                        <?php echo form_error('usuario', "<small class='invalid-feedback'>", "</small>"); ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">
                            Contraseña
                            <span class="form-label-description">
                                <a href="./forgot-password.html">Olvide mi contraseña</a>
                            </span>
                        </label>
                        <input name="password" type="password"
                            class="form-control <?php echo (form_error('password')) ? "is-invalid" : ""; ?>"
                            placeholder="Tu contraseña" autocomplete="off">

                        <?php echo form_error('password', "<small class='invalid-feedback'>", "</small>"); ?>

                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</div>